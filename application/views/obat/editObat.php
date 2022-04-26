<title>Edit Obat</title>

<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Data Obat</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a class="text-primary" href="<?= base_url('obat')?>">Obat</a></li>
									<li class="breadcrumb-item" aria-current="page">Edit Data Obat</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<!-- Simple Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h2>Edit Data Obat</h2>
					</div>
                    
					<div class="pb-20">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <!-- Button Submit akan mengarah kesavedataP -->
                                <form action="<?php echo base_url('Obat/updateO/') . $detail['idobat'] ?>" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">ID Obat</label>
                                    <input type="text" name="nama" class="form-control" value="<?php echo "O00" . $detail['idobat'] ?>" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Obat</label>
                                    <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $detail['nama'] ?>" autocomplete="off">
                                </div>
                                <div class="mb-3">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input type="text" name="harga" class="form-control" id="harga" value="<?php echo $detail['harga'] ?>" autocomplete="off">
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
