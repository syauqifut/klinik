<?php
    include_once('controller/user/index.php');
?>

<div class="wrapper">
    
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="useradd">Add New User</a></li>
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
                            <h3 class="card-title">User Data</h3>

                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Nomor HP</th>
                                        <th>Tipe User</th>
                                        <th>Kode</th>
                                        <th>Wilayah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    while ($data = mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $i++ . "</td>";
                                        echo "<td>" . $data['nama'] . "</td>";
                                        echo "<td>" . $data['username'] . "</td>";
                                        echo "<td>" . $data['email'] . "</td>";
                                        echo "<td>" . $data['nomor'] . "</td>";
                                        echo "<td>" . $data['type'] . "</td>";
                                        echo "<td>" . $data['kode'] . "</td>";
                                        echo "<td>" . $data['wilayah'] . "</td>";
                                        echo "<td><a class='btn btn-warning' href='useredit?id=$data[id]'>Edit</a> | <a class='btn btn-danger' href='/klinik/controller/user/delete.php?id=$data[id]'>Delete</a></td></tr>";
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