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
                            <h3 class="card-title">Add obat</h3>
                        </div>
                        <form action="/klinik/controller/obat/add.php" method="post" name="form1">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Enter Nama">
                                </div>
                                <div class="form-group">
                                    <label for="type">Type:</label>
                                    <select name="jenis" class="form-control">
                                        <option value="" disabled selected>--- Pilih ---</option>
                                        <option value="kapsul">Kapsul</option>
                                        <option value="cair">Obat cair</option>
                                        <option value="oles">Obat oles</option>
                                        <option value="vitamin">Vitamin</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="number" class="form-control" name="harga" placeholder="Enter Harga">
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <textarea class="form-control" name="keterangan" placeholder="Enter Keterangan"></textarea>
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