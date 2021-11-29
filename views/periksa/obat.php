<?php
include_once('controller/periksa/obat.php');
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
                        <li class="breadcrumb-item"><a href="periksa">Back</a></li>
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
                            <h3 class="card-title">Obat</h3>

                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Nama Obat</th>
                                        <th>Jenis Obat</th>
                                        <th>Harga Obat</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    while ($data = mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $i++ . "</td>";
                                        echo "<td>" . $data['nama'] . "</td>";
                                        echo "<td>" . $data['jenis'] . "</td>";
                                        echo "<td>" . $data['harga'] . "</td>";
                                        echo "<td>" . $data['keterangan'] . "</td>";
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