<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<body>
    <div class="container mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-secondary">
                    <h4 class="text-light">Modul Pasien</h4>
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
                              <h4 class="modal-title">Tambah Data Rawat</h4>
                            </div>
                            <div class="modal-body">
                              <!-- FORM TAMBAH -->
                              <form method="post" action="<?php echo base_url()?>rawat/addRawat" >
                                <!-- <input type="hidden" name="id" id="id" value=> -->
                                      
                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Pasien</label>
                                                <select name="pasien" class="form-select form-select-lg">
                                                    <?php foreach ($pasien as $i):?>
                                                    <option value="<?= $i->idpasien?>"><?= $i->nama?>
                                                    </option>
                                                    <?php endforeach?>
                                                </select>
                                              </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Tindakan</label>
                                                <select name="tindakan" class="form-select form-select-lg" aria-label="Default select example">
                                                    <?php foreach ($tindakan as $i):?>
                                                    <option value="<?= $i->biaya?>"><?= $i->namatindakan?>
                                                    </option>
                                                    <?php endforeach?>
                                                </select>
                                              </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Obat</label>
                                                <select name="obat" class="form-select form-select-lg">
                                                    <?php foreach ($obat as $i):?>
                                                    <option value="<?= $i->harga?>"><?= $i->nama?></option>
                                                    <?php endforeach?>
                                                </select>
                                              </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Dokter</label>
                                                <select name="dokter" class="form-select form-select-lg">
                                                    <?php foreach ($dokter as $i):?>
                                                    <option><?= $i->namadokter?></option>
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
                                                <input type="date" class="form-control" name="tgl_rawat" required>
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
                    <table class="table nowrap table-bordered table-striped" style="width:80%" id="tabeldokter">
                        <thead>
                            <tr>
                                <th class="text-center">ID Rawat</th>
                                <th class="text-center">Nama Pasien</th>
                                <th class="text-center">Dokter</th>
                                <th class="text-center">Tanggal Rawat</th>
                                <th class="text-center">Total Tindakan</th>
                                <th class="text-center">Total Obat</th>
                                <th class="text-center">Total Harga</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody id="Dokter">
                            <?php foreach($rawat as $i):?>
                            <tr align="center">
                              <td><?= $i->idrawat?></td>
                              <td><?= $i->nama?></td>
                              <td><?= $i->dokter?></td>
                              <td><?= $i->tglrawat?></td>
                              <td><?= $i->totaltindakan?></td>
                              <td><?= $i->totalobat?></td>
                              <td><?= $i->totalharga?></td>
                              <td>

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editRawat<?= $i->idrawat?>">
                                  Edit
                                </button>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteRawat<?= $i->idrawat?>">
                                  Hapus
                                </button>
                            </td>
                            <div class="modal fade" id="deleteRawat<?= $i->idrawat?>">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Hapus Data Rawat</h4>
                            </div>
                            <div class="modal-body">
                              <!-- FORM TAMBAH --><h4 class="text-danger mb-2" align="center">Data Yang Dihapus Tidak Bisa Dikembalikan !!</h4><br>
                              <form method="post" action="<?php echo base_url()?>rawat/deleteRawat" >
                                <input type="hidden" name="idrawat" value="<?= $i->idrawat?>">
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </div>
                                </form>
                              <!-- /FORM TAMBAH -->
                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- end div modal-->
                    <!-- MODAL EDIT -->
                    <div class="modal fade" id="editRawat<?= $i->idrawat?>">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Tambah Data Rawat</h4>
                            </div>
                            <div class="modal-body">
                              <!-- FORM TAMBAH -->
                              <form method="post" action="<?php echo base_url()?>rawat/editRawat" >
                                <!-- <input type="hidden" name="id" id="id" value=> -->
                                      
                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>ID Rawat</label>
                                                <input class="form-control" name="idrawat" value="<?= $i->idrawat?>" readonly>
                                              </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Pasien</label>
                                                <select name="pasien" class="form-select form-select-lg">
                                                    <?php foreach ($pasien as $i):?>
                                                    <option value="<?= $i->idpasien?>"><?= $i->nama?>
                                                    </option>
                                                    <?php endforeach?>
                                                </select>
                                              </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Dokter</label>
                                                <select name="dokter" class="form-select form-select-lg">
                                                    <?php foreach ($dokter as $i):?>
                                                    <option><?= $i->namadokter?>
                                                    </option>
                                                    <?php endforeach?>
                                                </select>
                                              </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Tindakan</label>
                                                <select name="tindakan" class="form-select form-select-lg" aria-label="Default select example">
                                                    <?php foreach ($tindakan as $i):?>
                                                    <option value="<?= $i->biaya?>"><?= $i->namatindakan?>
                                                    </option>
                                                    <?php endforeach?>
                                                </select>
                                              </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Obat</label>
                                                <select name="obat" class="form-select form-select-lg">
                                                    <?php foreach ($obat as $i):?>
                                                    <option value="<?= $i->harga?>"><?= $i->nama?> </option>
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
                                                <input type="date" class="form-control" name="tgl_rawat" required>
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
                            <?php endforeach?>
                        </tbody>
                    </table>
                        <!-- Button trigger modal -->
                </div>
            </div>
        </div>
    </div>
</body>
<script src="<?php echo base_url('assets/jquery/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/jquery/DataTables/datatables.js')?>"></script>
<!-- <script src="<?php echo base_url('assets/jquery/DataTables/DataTables-1.11.5/js/dataTables.bootstrap.min.js')?>"></script> -->
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
    $(document).ready( function () {
      $('#tabeldokter').DataTable({
        "scrollX" : true
      });
    })
</script>