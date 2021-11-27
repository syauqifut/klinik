<div class="wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Usertype</h1>
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
                            <h3 class="card-title">Add usertype</h3>
                        </div>
                        <form action="/klinik/controller/usertype/add.php" method="post" name="form1">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="nama" placeholder="Enter email">
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