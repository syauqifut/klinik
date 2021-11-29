<?php
include_once('controller/periksa/index.php');
?>

<div class="wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Periksa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"></a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Pemeriksaan Anda</h3>

                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Pasien</th>
                                        <th>Tanggal</th>
                                        <th>Obat</th>
                                        <th>Tindakan</th>
                                        <th>Harga Layanan</th>
                                        <th>Total Bayar</th>
                                        <th>Pembayaran</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    while ($data = mysqli_fetch_array($result2)) {
                                        echo "<tr>";
                                        echo "<td>" . $i++ . "</td>";
                                        echo "<td>" . $data['pasien'] . "</td>";
                                        echo "<td>" . date('l, d F Y', strtotime($data['tanggal'])) . "</td>";
                                        echo "<td> <a class='btn btn-block btn-sm' href='periksalistobat?id=$data[id]'>Klik di sini</a> ";
                                        echo "<td> <a class='btn btn-block btn-sm' href='periksalisttindakan?id=$data[id]'>Klik di sini</a> ";
                                        echo "<td>" . $data['harga'] . "</td>";
                                        echo "<td>" . $data['totalharga'] . "</td>";
                                        echo "<td>" . $data['pembayaran'] . "</td>";
                                        echo "<td>" . $data['status'] . "</td>";
                                        echo "<td>";
                                            if($data['status'] == 'belum'){
                                                echo "
                                                <a class='btn btn-warning' href='/klinik/controller/periksa/periksaproses.php?id=$data[id]'>Proses</a>
                                                ";
                                            }else if($data['status'] == 'proses'){
                                                echo "
                                                <a class='btn btn-warning' href='/klinik/periksaselesai?id=$data[id]'>Selesai</a>
                                                ";
                                            }else if($data['status'] == 'verifikasi'){
                                                echo "
                                                <a class='btn btn-warning' href='/klinik/controller/periksa/periksaverifikasi.php?id=$data[id]'>Verifikasi pembayaran</a>
                                                ";
                                            }
                                        echo "</td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Semua Pemeriksaan</h3>

                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Pasien</th>
                                        <th>Perawat</th>
                                        <th>Tanggal</th>
                                        <th>Obat</th>
                                        <th>Tindakan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    while ($data = mysqli_fetch_array($result3)) {
                                        echo "<tr>";
                                        echo "<td>" . $i++ . "</td>";
                                        echo "<td>" . $data['pasien'] . "</td>";
                                        echo "<td>" . $data['perawat'] . "</td>";
                                        echo "<td>" . date('l, d F Y', strtotime($data['tanggal'])) . "</td>";
                                        echo "<td> <a class='btn btn-block btn-sm' href='periksaobat?id=$data[id]'>Klik di sini</a> ";
                                        echo "<td> <a class='btn btn-block btn-sm' href='periksatindakan?id=$data[id]'>Klik di sini</a> ";
                                        echo "<td>" . $data['status'] . "</td>";
                                        // if perawat null, ambil
                                        if (($data['perawatid'] != $_SESSION['id']) && ($data['perawatid'] == null)){
                                            echo "<td><a class='btn btn-warning' href='/klinik/controller/periksa/periksaambil.php?id=$data[id]'>Ambil</a></td></tr>";
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>