<?php
    $id = $_GET['id'];
?>

<div class="wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Transaksi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/klinik/transaksi">Home</a></li>
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
                            <h3 class="card-title">Bayar</h3>
                        </div>
                        <form name="update_user" method="post" action="/klinik/controller/transaksi/prosesbayar.php">
                            <input type="hidden" name="id" value='<?= $_GET['id'];?>'>
                            <input type="hidden" name="tanggal" value='<?php echo date('Y-m-d'); ?>'>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="type">Type:</label>
                                    <select name="pembayaran" class="form-control">
                                        <option value="" disabled selected>--- Pilih ---</option>
                                        <option value="manual">Transfer Manual (ke BCA 4736251)</option>
                                        <option value="qris" disabled>QRIS (cooming soon)</option>
                                        <option value="va" disabled>Virtual Account (cooming soon)</option>
                                    </select>
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