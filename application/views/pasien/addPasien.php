<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pasien</title>
</head>
<!-- Form tambah data pasien -->

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Tambah Pasien</h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <!-- Button Submit akan mengarah kesavedataP -->
                                <form action="<?php echo base_url('Pasien/savedataP') ?>" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="idpasien" class="form-label">ID Pasien</label>
                                        <input type="text" name="idpasien" class="form-control" id="idpasien">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Pasien</label>
                                        <input type="text" name="nama" class="form-control" id="nama">
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <textarea type="text" name="alamat" class="form-control" id="alamat"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tgllahir" class="form-label">Tanggal Lahir</label>
                                        <input type="date" name="tgllahir" class="form-control" id="tgllahir">
                                    </div>
                                    <div class="mb-3">
                                        <label for="notelp" class="form-label">Telepon</label>
                                        <input type="text" name="notelp" class="form-control" id="notelp">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="button" class="btn btn-danger" onclick="history.back();">Kembali</button>
                                </form>
                            </div>
                        </div>

=======
<body>
    <div class="container mt-5">
        <div class="col-md-12">
            <div class="card mb-5">
            <div class="card-header bg-secondary">
                    <h4 class="text-light">Tambah Pasien</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <!-- Button Submit akan mengarah kesavedataP -->
                            <form action="<?php echo base_url('Pasien/savedataP') ?>" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="idpasien" class="form-label">ID Pasien</label>
                                    <input type="text" name="idpasien" class="form-control" id="idpasien">
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Pasien</label>
                                    <input type="text" name="nama" class="form-control" id="nama">
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea type="text" name="alamat" class="form-control" id="alamat"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="tgllahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" name="tgllahir" class="form-control" id="tgllahir">
                                </div>
                                <div class="mb-3">
                                    <label for="notelp" class="form-label">Telepon</label>
                                    <input type="text" name="notelp" class="form-control" id="notelp">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="button" class="btn btn-danger" onclick="history.back();">Kembali</button>
                            </form>
                        </div>
>>>>>>> faaf744c4a33ef6b0c8d13c77cfa3ad97b5b5c98
                    </div>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
</body>

</html>
=======
</body>
>>>>>>> faaf744c4a33ef6b0c8d13c77cfa3ad97b5b5c98
