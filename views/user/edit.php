<?php
    include_once('controller/user/edit.php');
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
                        <li class="breadcrumb-item"><a href="/klinik/user">Home</a></li>
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
                            <h3 class="card-title">Edit User</h3>
                        </div>
                        <form name="update_user" method="post" action="/klinik/controller/user/update.php">
                            <input type="hidden" name="id" value=<?= $_GET['id'];?>>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" name="nama" value="<?= $nama;?>">
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username" value="<?= $username;?>">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" value=<?= $email;?>>
                                </div>
                                <div class="form-group">
                                    <label for="nomorhp">Nomor HP</label>
                                    <input type="number" class="form-control" name="nomor" value=<?= $nomor;?>>
                                </div>
                                <div class="form-group">
                                    <label for="type">Type:</label>
                                    <select name="usertype_id" class="form-control">
                                        <?php
                                            while ($usertype_data = mysqli_fetch_array($result1)) {
                                                $idtype = $usertype_data['id'];
                                                echo "<option value='$idtype' ($idtype == $usertype_id) ? selected : '' >" . $usertype_data['nama'] . "</option>";
                                            }
                                        ?>
                                    </select>
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" name="update" value="Update" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</div>