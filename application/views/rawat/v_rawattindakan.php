<section class="py-3">
			<div class="min-height-200px">
				
				<!-- Simple Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h3>Tabel Rawat Tindakan</h3>
            <button type="button" class="btn btn-sm btn-success mt-3" data-toggle="modal" data-target="#dataRawatTindakan">
            <i class="icon-copy ion-plus mr-1"></i>Tambah Data Rawat Tindakan
          </button>
          <button type="button" class="btn btn-sm btn-primary mt-3" data-toggle="modal" data-target="#chartTindakan"><i class="icon-copy dw dw-analytics-11 mr-1"></i>Lihat Chart</button>
          <div class="modal fade" id="chartTindakan">
            <div class="modal-dialog">
							<div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title">Frekuensi Banyaknya Tindakan Dokter</h4>
                  </div>
                  <div class="modal-body">
                    <canvas id="myChart"></canvas>
                  </div>
                  </div>
                </div>
              </div>
              <!-- end div modal-->

          <!-- MODAL EDIT -->
          <div class="modal fade" id="dataRawatTindakan">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Tambah Data Rawat Tindakan</h4>
                </div>
                <div class="modal-body">
                  <!-- FORM TAMBAH -->
                  <form method="post" action="<?php echo base_url() ?>rawat/addRawatTindakan">
                    
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
                          <label>Nama Tindakan</label>
                          <select name="tindakan" class="form-control">
                            <?php foreach($tindakan as $i):?>
                              <option value="<?= $i->idtindakan?>"><?= $i->namatindakan?></option>
                              <?php endforeach?>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Jumlah Tindakan</label>
                          <input type="text" class="form-control" name="jumlah">
                          </select>
                        </div>
                      </div>
                  </div>

                    <div class="row">
                      <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Nama Dokter</label>
                          <select name="dokter" class="form-control">
                            <?php foreach($dokter as $i):?>
                              <option><?= $i->namadokter?></option>
                              <?php endforeach?>
                          </select>
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
                <th class="text-center">Nama Tindakan</th>
                <th class="text-center">Nama Dokter</th>
                <th class="text-center">Total Tindakan</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1;?>
              <?php foreach ($rawattindakan as $i) : ?>
                <tr align="center">
                  <td><?= $no++?></td>
                  <td><?= "R00" . $i->idrawat?></td>
                  <td><?= $i->namatindakan ?></td>
                  <td><?= $i->namadokter?></td>
                  <td><?= $i->harga?></td>
                  <td>

                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editRawatTindakan<?= $i->idrawattindakan ?>">
                    <i class="icon-copy dw dw-edit-1 mr-1"></i>Edit
                    </button>
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteRawatTindakan<?= $i->idrawattindakan ?>">
                    <i class="icon-copy dw dw-delete-3 mr-1"></i>Hapus
                    </button>
                  </td>
            <div class="modal fade" id="editRawatTindakan<?= $i->idrawattindakan ?>">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Edit Data Rawat Tindakan</h4>
                </div>
                <div class="modal-body">
                <form method="post" action="<?php echo base_url() ?>rawat/editRawatTindakan">
                    <input type="hidden" name="idrawattindakan" value="<?= $i->idrawattindakan?>">
                    
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
                          <label>Nama Tindakan</label>
                          <select name="tindakan" class="form-control">
                            <?php foreach($tindakan as $k):?>
                              <option value="<?= $k->idtindakan?>"><?= $k->namatindakan?></option>
                              <?php endforeach?>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Jumlah Tindakan</label>
                          <input type="text" class="form-control" name="jumlah" value="<?= $i->jumlah?>">
                          </select>
                        </div>
                      </div>
                  </div>

                    <div class="row">
                      <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                          <label>Nama Dokter</label>
                          <select name="dokter" class="form-control">
                            <?php foreach($dokter as $l):?>
                              <option><?= $l->namadokter?></option>
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
          <div class="modal fade" id="deleteRawatTindakan<?= $i->idrawattindakan ?>">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Delete Data Rawat Tindakan</h4>
                          <form method="post" action="<?php echo base_url() ?>rawat/deleteRawatTindakan">
                          <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </tr>
              <?php endforeach ?>
            </tbody>
						</table>
					</div>
          </section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script type="text/javascript">
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: [
          <?php
            if (count($chartDokter)>0) {
              foreach ($chartDokter as $data) {
                echo "'" .$data->namadokter ."',";
              }
            }
          ?>
        ],
        datasets: [{
            label: 'Jumlah Dokter',
            backgroundColor: ['#b91d47', '#00aba9', '#2b5797'],
            // borderColor: '##93C3D2',
            data: [
              <?php
                if (count($chartDokter)>0) {
                   foreach ($chartDokter as $data2) {
                    echo $data2->jumlahdokter . ", ";
                  }
                }
              ?>
            ]
        }]
    },
});
 
  </script>