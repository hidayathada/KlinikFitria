<body>
    <div class="container mt-5">
        <div class="col-md-12">
            <div class="card mb-5">
            <div class="card-header bg-secondary">
                    <h4 class="text-light">Edit Pasien</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <!-- Button Submit akan mengarah kesavedataP -->
                            <form action="<?php echo base_url('Pasien/updateP/') . $detail['idpasien'] ?>" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="idpasien" class="form-label">ID Buku</label>
                                    <input type="text" name="idpasien" class="form-control" id="idpasien" value="<?php echo $detail['idpasien'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Pasien</label>
                                    <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $detail['nama'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea type="text" name="alamat" class="form-control" id="alamat"><?php echo $detail['alamat'] ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="tgllahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" name="tgllahir" class="form-control" id="tgllahir" value="<?php echo $detail['tgllahir'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="notelp" class="form-label">Telepon</label>
                                    <input type="text" name="notelp" class="form-control" id="notelp" value="<?php echo $detail['notelp'] ?>">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="button" class="btn btn-danger" onclick="history.back();">Kembali</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>