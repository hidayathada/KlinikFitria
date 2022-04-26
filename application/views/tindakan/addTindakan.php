
<title>Tambah Tindakan</title>
<!-- Form tambah data Tindakan -->
<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Data Tindakan</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a class="text-primary" href="<?= base_url('Tindakan')?>">Tindakan</a></li>
									<li class="breadcrumb-item" aria-current="page">Tambah Data Tindakan</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<!-- Simple Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h2>Tambah Data Tindakan</h2>
					</div>
                    
					<div class="pb-20">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <!-- Button Submit akan mengarah kesavedataP -->
                                <form action="<?php echo base_url('Tindakan/savedataT') ?>" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="namatindakan" class="form-label">Nama Tindakan</label>
                                        <input type="text" name="namatindakan" class="form-control" id="namatindakan" autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="biaya" class="form-label">Biaya</label>
                                        <input type="number" name="biaya" class="form-control" id="biaya" autocomplete="off">
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