<?php
    include_once('controller/wilayah/edit.php');
?>

<div class="wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Wilayah</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/klinik/wilayah">Home</a></li>
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
                            <h3 class="card-title">Edit Wilayah</h3>
                        </div>
                        <form name="update_user" method="post" action="/klinik/controller/wilayah/update.php">
                            <input type="hidden" name="id" value=<?= $_GET['id'];?>>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" name="nama" value='<?= $nama;?>'>
                                </div>
                                <div class="form-group">
                                    <label for="kode">Kode</label>
                                    <input type="number" class="form-control" name="kode" value='<?= $kode;?>'>
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