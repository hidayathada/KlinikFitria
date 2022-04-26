<section>
			<div class="min-height-200px">
				
				<!-- Simple Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h3>Tabel Rawat Obat</h3>
            <button type="button" class="btn btn-sm btn-success mt-3" data-toggle="modal" data-target="#dataRawatObat">
            Tambah Data Rawat Obat
          </button>

          <!-- MODAL EDIT -->
          <div class="modal fade" id="dataRawatObat">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Tambah Data Rawat Obat</h4>
                </div>
                <div class="modal-body">
                  <!-- FORM TAMBAH -->
                  <form method="post" action="<?php echo base_url() ?>rawat/addRawatObat">

                    <div class="row">
                      <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Nama Pasien</label>
                          <select name="idrawat" class="form-control">
                            <?php foreach($rawat as $i):?>
                              <option value="<?= $i->idrawat?>"><?= "ID Rawat : " . $i->idrawat . " " . "Nama Pasien : " . $i->nama?></option>
                              <?php endforeach?>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Nama Obat</label>
                          <select name="obat" class="form-control">
                              <?php foreach($obat as $i):?>
                              <option value="<?= $i->idobat?>"><?= $i->nama?></option>
                              <?php endforeach?>
                          </select>
                          </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Jumlah</label>
                          <input type="number" class="form-control" name="jumlah" placeholder="Jumlah">
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
              <tr>
                <!-- <th class="text-center">ID Rawat</th> -->
                <th class="text-center">No</th>
                <th class="text-center">ID Rawat</th>
                <th class="text-center">Nama Obat</th>
                <th class="text-center">Jumlah Obat</th>
                <!-- <th class="text-center">Harga Obat Satuan</th> -->
                <th class="text-center">Total Harga</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1;?>
              <?php foreach ($rawatobat as $i) : ?>
                <tr align="center">
                  <td><?= $no++?></td>
                  <td><?= "R00" . $i->idrawat?></td>
                  <td><?= $i->nama ?></td>
                  <td><?= $i->jumlah?></td>
                  <td><?= $i->totalrawatobat?></td>
                  <td>

                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detailRawat<?= $i->idrawat ?>">
                      Detail
                    </button> -->
                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editRawatObat<?= $no ?>">
                    <i class="icon-copy dw dw-edit-1 mr-1"></i>Edit
                    </button>
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteRawat<?= $i->idrawat ?>">
                    <i class="icon-copy dw dw-delete-3 mr-1"></i>Hapus
                    </button>
                  </td>
                  <!-- MODAL EDIT -->
          <div class="modal fade" id="editRawatObat<?= $no ?>">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Edit Data Rawat Obat</h4>
                </div>
                <div class="modal-body">
                  <!-- FORM TAMBAH -->
                  <form method="post" action="<?php echo base_url() ?>rawat/editRawatObat">
                    <input type="hidden" name="idrawatobat" value="<?= $i->idrawatobat?>">

                    <div class="row">
                      <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Nama Pasien</label>
                          <select name="idrawat" class="form-control" readonly>
                            <?php foreach($rawat as $j):?>
                              <option value="<?= $j->idrawat?>"><?= "ID Rawat : " . $j->idrawat . " " . "Nama Pasien : " . $j->nama?></option>
                              <?php endforeach?>
                          </select>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Nama Obat</label>
                          <select name="obat" class="form-control">
                              <?php foreach($obat as $j):?>
                              <option value="<?= $j->idobat?>"><?= $j->nama?></option>
                              <?php endforeach?>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Jumlah</label>
                          <input type="number" class="form-control" name="jumlah" placeholder="Jumlah" value="<?= $i->jumlah?>">
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

                </tr>
              <?php endforeach ?>
            </tbody>
						</table>
					</div>
</section>