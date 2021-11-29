<?php
    include_once('controller/periksa/obatadddata.php');
    $id = $_GET['id'];
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
                        <li class="breadcrumb-item"><a href="/klinik/periksalistobat?id=<?= $id ?>">Back</a></li>
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
                            <h3 class="card-title">Tambah Obat</h3>
                        </div>
                        <form action="/klinik/controller/periksa/obatadd.php" method="post" name="form1">
                            <input type="hidden" class="form-control" name="periksa_id" value="<?= $_GET['id'] ?>" >
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="type">Obat:</label>
                                    <select name="obat_id" class="form-control">
                                        <option value="" disabled selected>--- Pilih ---</option>
                                        <?php
                                            while ($data = mysqli_fetch_array($result)) {
                                                $idobat = $data['id'];
                                                echo "<option value='$idobat'>" . $data['nama'] . "</option>";
                                            }
                                        ?>
                                    </select>
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