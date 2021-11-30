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
                        <li class="breadcrumb-item"><a href="periksadaftar">Daftar Periksa</a></li>
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
                            <h3 class="card-title">Periksa yang akan datang</h3>

                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    while ($data = mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $i++ . "</td>";
                                        echo "<td>" . date('l, d F Y', strtotime($data['tanggal'])) . "</td>";
                                        echo "<td><a class='btn btn-warning' href='obatedit?id=$data[id]'>Edit</a> | <a class='btn btn-danger' href='/klinik/controller/obat/delete.php?id=$data[id]'>Delete</a></td></tr>";
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
                            <h3 class="card-title">Semua Riwayat Periksa</h3>

                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Perawat</th>
                                        <th>Tanggal</th>
                                        <th>Obat</th>
                                        <th>Tindakan</th>
                                        <th>Pembayaran</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    while ($data = mysqli_fetch_array($result1)) {
                                        echo "<tr>";
                                        echo "<td>" . $i++ . "</td>";
                                        echo "<td>" . $data['perawat'] . "</td>";
                                        echo "<td>" . date('l, d F Y', strtotime($data['tanggal'])) . "</td>";
                                        echo "<td> <a class='btn btn-block btn-sm' href='periksaobat?id=$data[id]'>Klik di sini</a> ";
                                        echo "<td> <a class='btn btn-block btn-sm' href='periksatindakan?id=$data[id]'>Klik di sini</a> ";
                                        echo "<td>" . $data['pembayaran'] . "</td>";
                                        echo "<td>" . $data['status'] . "</td>";
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