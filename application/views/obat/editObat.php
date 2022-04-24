<title>Edit Obat</title>

<body>
    <div class="container mt-5">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-header bg-secondary">
                    <h4 class="text-light">Edit Obat</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <!-- Button Submit akan mengarah kesavedataP -->
                            <form action="<?php echo base_url('Obat/updateO/') . $detail['idobat'] ?>" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Obat</label>
                                    <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $detail['nama'] ?>">
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
</body>