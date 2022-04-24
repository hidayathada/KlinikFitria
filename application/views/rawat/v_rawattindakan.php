<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<title>Rawat</title>

<body>
  <div class="container mt-5">
    <div class="col-12">
      <div class="card">
        <div class="card-header bg-secondary">
          <h4 class="text-light">Modul Rawat Tindakan</h4>
        </div>
        <div class="card-body">
          <!-- <a href="Pasien/addP" class="btn btn-success mb-3 float-right">Tambah Pasien</a> -->
          <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#dataRawat">
            Tambah Data Rawat
          </button>

          <!-- MODAL EDIT -->
          <div class="modal fade" id="dataRawat">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Tambah Data Rawat Tindakan</h4>
                </div>
                <div class="modal-body">
                  <!-- FORM TAMBAH -->
                  <form method="post" action="<?php echo base_url() ?>rawat/addRawatTindakan">
                    <!-- <input type="hidden" name="id" id="id" value=> -->
                    
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

          <a href="#" class="btn btn-danger float-right mb-3"><i class="fa fa-print"></i>&nbsp;Cetak Nota</a>
          <table class="table nowrap table-bordered table-striped" style="width:100%" id="tabeldokter">
            <thead>
              <tr>
                <!-- <th class="text-center">ID Rawat</th> -->
                <th class="text-center">No</th>
                <th class="text-center">ID Rawat Tindakan</th>
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
                  <td><?= $i->idrawattindakan?></td>
                  <td><?= $i->namatindakan ?></td>
                  <td><?= $i->namadokter?></td>
                  <td><?= $i->harga?></td>
                  <td>

                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detailRawat<?= $i->idrawat ?>">
                      Detail
                    </button> -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editRawatTindakan<?= $i->idrawattindakan ?>">
                      Edit
                    </button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteRawatTindakan<?= $i->idrawattindakan ?>">
                      Hapus
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
          <!-- Button trigger modal -->
        </div>
      </div>
    </div>
  </div>
</body>
<script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/jquery/DataTables/datatables.js') ?>"></script>
<!-- <script src="<?php echo base_url('assets/jquery/DataTables/DataTables-1.11.5/js/dataTables.bootstrap.min.js') ?>"></script> -->
<!-- <script>
$(document).ready(function(){
    $.ajax({
        url: 'http://rosihanari.net/api/api.php?get=dokter',
        dataType: 'json',
        method : "GET",
        success: function(response)
        {
            console.log(response);
            $('#tabeldokter').DataTable({
                serverSide : true,
                processing : true,
                ordering : false,
                searching : true,
                paging : true,
                info : false,
                ajax : function(data, callback, settings){
                    var data = [];
                    response.forEach(element => {
                        console.log(element);
                        data.push([
                            element.iddokter, element.namadokter
                        ]);
                    })
                    
                    setTimeout(function(){
                        callback({
                            draw: data.draw,
                            data: data,
                            recordTotal: data.length,
                            recordFiltered: data.length,
                        });
                    }, 50);
                },
                scrollY:200,
                scroller : {
                    loadingIndicator:true
                },
            });
        }
    })
})
</script> -->
<!-- <script>
    $(document).ready(function(){
    $.ajax({
        url: 'http://rosihanari.net/api/api.php?get=dokter',
        dataType: 'json',
        method : "GET",
        success: function(response){
            response.forEach(element => {
                const tr = document.createElement("tr");
                const td = document.createElement("td");
                td.innerHTML = element.iddokter;
                tr.appendChild(td);
                const td2 = document.createElement("td");
                td2.innerHTML = element.namadokter;
                tr.appendChild(td2);
                const td3 = document.createElement("td");
                td3.innerHTML = "<a href='Pasien/editP' class='btn btn-warning'>Edit</a><a href='Pasien/deleteP/' onclick='return confirm('Data ini akan dihapus. Anda yakin?')' class='btn btn-danger'>Hapus</a>";
                tr.appendChild(td3);

                document.getElementById("Dokter").appendChild(tr);
            })}
    })})
</script> -->
<script>
  $(document).ready(function() {
    $('#tabeldokter').DataTable({
      "scrollX": true
    });
  })
</script>