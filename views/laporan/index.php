<?php
include_once('controller/laporan/index.php');
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>

<div class="wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Laporan</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Pemeriksaan Harian</h3>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <canvas id="harian" width="100" height="100"></canvas>
                            </div>
                            <script>
                                var ctx = document.getElementById("harian");
                                var harian = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: [<?php while ($data = mysqli_fetch_array($tanggal)) {
                                                        echo '"' . $data['tanggal'] . '",';
                                                    } ?>],
                                        datasets: [{
                                            label: 'jumlah harian',
                                            data: [<?php while ($p = mysqli_fetch_array($pemeriksaan)) {
                                                        echo '"' . $p['jumlahperiksa'] . '",';
                                                    } ?>],
                                            backgroundColor: [
                                                "#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"
                                            ],
                                            borderColor: [
                                                "#ffffff", "#ffffff", "#ffffff", "#ffffff", "#ffffff"
                                            ],
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            yAxes: [{
                                                ticks: {
                                                    beginAtZero: true
                                                }
                                            }]
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Wilayah Pasien</h3>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <canvas id="wilayah" width="100" height="100"></canvas>
                            </div>
                            <script>
                                var ctx = document.getElementById("wilayah");
                                var wilayah = new Chart(ctx, {
                                    type: 'pie',
                                    data: {
                                        labels: [<?php while ($data = mysqli_fetch_array($wilayah)) {
                                                        echo '"' . $data['nama'] . '",';
                                                    } ?>],
                                        datasets: [{
                                            label: "Population (millions)",
                                            backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                                            data: [<?php while ($p = mysqli_fetch_array($pasien)) {
                                                        echo '"' . $p['jumlahpasien'] . '",';
                                                    } ?>]
                                        }]
                                    },
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>