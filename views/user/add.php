<?php
    include_once('controller/user/adddata.php');
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
                        <li class="breadcrumb-item"><a href="/klinik/usertype">Home</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add user</h3>
                        </div>
                        <form action="/klinik/controller/user/add.php" method="post" name="form1">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Enter Username">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <label for="nomorhp">Nomor HP</label>
                                    <input type="number" class="form-control" name="nomor" placeholder="Enter Nomor HP">
                                </div>
                                <div class="form-group">
                                    <label for="type">Type:</label>
                                    <select name="usertype_id" class="form-control">
                                        <option value="" disabled selected>--- Pilih ---</option>
                                        <?php
                                            while ($data = mysqli_fetch_array($result)) {
                                                $id = $data['id'];
                                                echo "<option value='$id'>" . $data['nama'] . "</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="type">Wilayah:</label>
                                    <select name="wilayah_id" class="form-control">
                                        <option value="" disabled selected>--- Pilih ---</option>
                                        <?php
                                            while ($data = mysqli_fetch_array($result1)) {
                                                $id = $data['id'];
                                                echo "<option value='$id'>" . $data['nama'] . "</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" name="Submit" value="Add" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>