<section class="py-3">
<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Modul Rawat</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<!-- Simple Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h3>Tabel Rawat</h3>
            <button type="button" class="btn btn-success btn-sm mt-3" data-toggle="modal" data-target="#dataRawat">
            <i class="icon-copy ion-plus mr-1"></i>Tambah Data Rawat
          </button>

          <!-- MODAL EDIT -->
          <div class="modal fade" id="dataRawat">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Tambah Data Rawat</h4>
                </div>
                <div class="modal-body">
                  <!-- FORM TAMBAH -->
                  <form method="post" action="<?php echo base_url() ?>rawat/addRawat">

                    <div class="row">
                      <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Nama Pasien</label>
                          <select name="pasien" class="form-control">
                            <?php foreach($pasien as $i):?>
                              <option value="<?= $i->idpasien?>"><?= $i->nama?></option>
                              <?php endforeach?>
                          </select>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Tanggal Rawat</label>
                          <input type="date" class="form-control" name="tgl_rawat">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>Uang Muka</label>
                          <input type="text" class="form-control" name="uangmuka" placeholder="Uang Muka">
                        </div>
                      </div>
                    </div>
                    

                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                  </form>
                  <!-- /FORM TAMBAH -->
                </div>
              </div>
            </div>
          </div>
          <!-- end div modal-->
					</div>
                    
					<div class="pb-20">
						<table class="data-table table stripe hover nowrap">
							<thead>
              <tr align="center">
                <!-- <th>No</th> -->
                <th>ID Rawat</th>
                <th>Nama Pasien</th>
                <th>Tgl Rawat</th>
                <!-- <th>Total Tindakan</th>
                <th>Total Obat</th>
                <th>Total Harga</th> -->
                <th>Uang Muka</th>
                <th>Kurang</th>
                <th class="datatable-nosort">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1?>
              <?php foreach ($rawat as $i) : ?>
                <tr align="center">
                  <!-- <td><?= $no++?></td> -->
                  <td><?= "R00" . $i->idrawat?></td>
                  <td><?= $i->nama ?></td>
                  <td><?= tanggal_indonesia(date(($i->tglrawat))) ?></td>
                  <!-- <td><?php if($i->totaltindakan <= 0){
                      echo "Belum ada total obat"; 
                  }elseif($i->totalobat <= 0){
                      echo "uang muka";
                  } ?></td> -->
                  <!-- <td><?= $i->totaltindakan ?></td>
                  <td><?= $i->totalobat ?></td>
                  <td><?= $i->totalharga ?></td> -->
                  <td><?= $i->uangmuka ?></td>
                  <td><?= $i->kurang ?></td>
                  <td>
                  <div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
                  <!-- <?php //if($i->totalobat == 0 && $i->totaltindakan == 0){?>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    <button type="button" class="dropdown-item text-success" data-toggle="modal" data-target="#uangmuka<?= $i->idrawat ?>">
                      <i class="icon-copy ion-plus mr-1"></i>Input Uang Muka
                    </button>
                    </div>

                    <div class="modal fade" id="uangmuka<?= $i->idrawat ?>">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title"><center>Input Uang Muka</center></h4>
                        </div>
                        <div class="modal-body">
                        <form method="post" action="<?php echo base_url() ?>rawat/inpUtuangMuka">
                      <input type="hidden" name="idrawat" value="<?= $i->idrawat?>">
                      <input type="hidden" name="totaltindakan" value="<?= $i->totaltindakan?>">
                      <input type="hidden" name="totalobat" value="<?= $i->totalobat?>">

                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>Uang Muka</label>
                          <input type="text" class="form-control" name="uangmuka" placeholder="Uang Muka" value="<?= $i->uangmuka?>">
                        </div>
                      </div>
                    </div>

                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                  </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php //}else{?> -->
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                      <button type="button" class="dropdown-item text-info" data-toggle="modal" data-target="#detailRawat<?= $i->idrawat ?>">
                        <i class="dw dw-eye mr-1"></i>Detail
                      </button>
                      <a href="<?= base_url("rawat/laporan_pdf")?>" type="button" class="dropdown-item text-secondary"><i class="icon-copy dw dw-floppy-disk mr-1"></i>Print PDF</a>
                      <button type="button" class="dropdown-item text-primary" data-toggle="modal" data-target="#editRawat<?= $i->idrawat ?>">
                        <i class="icon-copy dw dw-edit-1 mr-1"></i>Edit
                      </button>
                      <button type="button" class="dropdown-item text-danger" data-toggle="modal" data-target="#deleteRawat<?= $i->idrawat ?>">
                        <i class="icon-copy dw dw-delete-3 mr-1"></i>Hapus
                      </button>
                    </div>
                  </div>
                  </td>
                  <div class="modal fade" id="detailRawat<?= $i->idrawat ?>">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Detail Data Rawat</h4>
                        </div>
                        <div class="modal-body">
                        <form method="post" action="<?php echo base_url() ?>rawat/editRawat">
                    <!-- <input type="hidden" name="idrawat" value="<?= $i->idrawat?>"> -->

                    <div class="row">
                      <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Tanggal Rawat</label>
                          <input type="text" class="form-control" name="tgl_rawat" value="<?= tanggal_indonesia($i->tglrawat)?>" readonly>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Total Tindakan</label>
                          <input type="text" class="form-control" name="totaltindakan" placeholder="Total Tindakan" value="<?= $i->totaltindakan?>" readonly>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Total Obat</label>
                          <input type="text" class="form-control" name="totalobat" placeholder="Total Obat" value="<?= $i->totalobat?>" readonly>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Total Harga</label>
                          <input type="text" class="form-control" name="totalharga" placeholder="Total Harga" value="<?= $i->totalharga?>" readonly>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Uang Muka</label>
                          <input type="number" class="form-control" name="uangmuka" placeholder="Uang Muka" value="<?= $i->uangmuka?>" readonly>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Kurang</label>
                          <input type="number" class="form-control" name="kurang" placeholder="Kurang" value="<?= $i->kurang?>" readonly>
                        </div>
                      </div>
                    </div>
                  </form>
                  <!-- /FORM TAMBAH -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end div modal-->
                  <div class="modal fade" id="deleteRawat<?= $i->idrawat ?>">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <!-- <div class="modal-header">
                          </div> -->
                          <div class="modal-body">
                            <h4 class="modal-title mb-4">Apakah anda yakin ingin menghapus data ini?</h4>
                            <form method="post" action="<?php echo base_url() ?>rawat/deleteRawat">
                              <input type="hidden" name="idrawat" value="<?= $i->idrawat?>">
                              <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                              <button type="submit" class="btn btn-danger">Ya</button>
                              </div>
                            </form>
                            <!-- /FORM TAMBAH -->
                          </div>
                        </div>
                      </div>
                    </div>

                  <div class="modal fade" id="editRawat<?= $i->idrawat ?>">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Edit Data Rawat</h4>
                        </div>
                        <div class="modal-body">
                        <form method="post" action="<?php echo base_url() ?>rawat/editRawat">
                    <input type="hidden" name="idrawat" value="<?= $i->idrawat?>">

                    <div class="row">
                      <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                          <label>ID Rawat</label>
                          <input type="date" class="form-control" name="tgl_rawat" value="<?= $i->idrawat?>" readonly>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Tanggal Rawat</label>
                          <input type="date" class="form-control" name="tgl_rawat" value="<?= $i->tglrawat?>">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Total Tindakan</label>
                          <input type="text" class="form-control" name="totaltindakan" placeholder="Total Tindakan" value="<?= $i->totaltindakan?>">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Total Obat</label>
                          <input type="text" class="form-control" name="totalobat" placeholder="Total Obat" value="<?= $i->totalobat?>">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Total Harga</label>
                          <input type="text" class="form-control" name="totalharga" placeholder="Total Harga" value="<?= $i->totalharga?>">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Uang Muka</label>
                          <input type="number" class="form-control" name="uangmuka" placeholder="Uang Muka" value="<?= $i->uangmuka?>">
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Kurang</label>
                          <input type="number" class="form-control" name="kurang" placeholder="Kurang" value="<?= $i->kurang?>">
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Nama Pasien</label>
                          <select name="pasien" class="form-control">
                            <?php foreach($pasien as $i):?>
                              <option value="<?= $i->idpasien?>"><?= $i->nama?></option>
                              <?php endforeach?>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                  </form>
                  <!-- /FORM TAMBAH -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end div modal-->
                  <!-- <?php //}?> -->
                </tr>
              <?php endforeach ?>
            </tbody>
						</table>
					</div>
				</div>
			</div>