<title>Edit Pasien</title>
<!-- Form Edit Data Pasien -->

<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Data Pasien</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a class="text-primary" href="<?= base_url('pasien')?>">Pasien</a></li>
									<li class="breadcrumb-item" aria-current="page">Edit Data Pasien</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<!-- Simple Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h2>Edit Data Pasien</h2>
					</div>
                    
					<div class="pb-20">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <!-- Button Submit akan mengarah kesavedataP -->
                                <form action="<?php echo base_url('Pasien/updateP/') . $detail['idpasien'] ?>" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">ID Pasien</label>
                                        <input type="text" name="nama" class="form-control" id="nama" value="<?php echo "P00" . $detail['idpasien'] ?>" readonly>
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
