<?php
    include_once('controller/obat/edit.php');
?>

<div class="wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Obat</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/klinik/obat">Home</a></li>
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
                            <h3 class="card-title">Edit Obat</h3>
                        </div>
                        <form name="update_user" method="post" action="/klinik/controller/obat/update.php">
                            <input type="hidden" name="id" value=<?= $_GET['id'];?>>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" name="nama" value='<?= $nama;?>'>
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="number" class="form-control" name="harga" value='<?= $harga;?>'>
                                </div>
                                <div class="form-group">
                                    <label for="type">Type:</label>
                                    <select name="jenis" class="form-control">
                                        <option value="" disabled selected>--- Pilih ---</option>
                                        <option value="kapsul" <?= ($jenis == 'kapsul') ? 'selected' : '' ?>>Kapsul</option>
                                        <option value="cair" <?= ($jenis == 'cair') ? 'selected' : '' ?>>Obat cair</option>
                                        <option value="oles" <?= ($jenis == 'oles') ? 'selected' : '' ?>>Obat oles</option>
                                        <option value="vitamin" <?= ($jenis == 'vitamin') ? 'selected' : '' ?>>Vitamin</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="harga">Keterangan</label>
                                    <textarea class="form-control" name="keterangan"> <?= $keterangan;?> </textarea>
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