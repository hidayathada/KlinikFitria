<title>Tambah Rawat Obat</title>
<!-- Form tambah data pasien -->

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Tambah Rawat Obat</h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <!-- Button Submit akan mengarah kesavedataP -->
                                <form action="<?php echo base_url('RawatObat/updateRO') . $detail['idrawatobat'] ?>" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="idrawatobat" class="form-label">ID Rawat Obat</label>
                                        <input type="text" name="idrawatobat" class="form-control" id="idrawatobat" value="<?php echo $detail['idrawatobat'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="idrawat" class="form-label">ID Rawat</label>
                                        <input type="text" name="idrawat" class="form-control" id="idrawat" value="<?php echo $detail['idrawat'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="idobat" class="form-label">ID Obat</label>
                                        <input type="text" name="idobat" class="form-control" id="idobat" value="<?php echo $detail['idobat'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="jumlah" class="form-label">Jumlah</label>
                                        <input type="number" name="jumlah" class="form-control" id="jumlah" value="<?php echo $detail['jumlah'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="harga" class="form-label">Harga</label>
                                        <input type="text" name="harga" class="form-control" id="harga" value="<?php echo $detail['harga'] ?>">
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
    </div>
</body>