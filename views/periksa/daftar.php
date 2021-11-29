<div class="wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Periska</h1>
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
                <div class="col-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Periksa</h3>
                        </div>
                        <form action="/klinik/controller/periksa/daftar.php" method="post" name="form1">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="pasien_id">Nama </label>
                                    <input type="hidden" class="form-control" name="pasien_id" value="<?= $_SESSION['id'] ?>" >
                                    <input type="text" class="form-control" value="<?= $_SESSION['nama'] ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="harga">Tanggal Periksa</label>
                                    <input type="date" class="form-control" name="tanggal" min="<?= date('Y-m-d'); ?>">
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