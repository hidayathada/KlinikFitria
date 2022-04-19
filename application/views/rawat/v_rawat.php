<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
<body>
    <div class="container mt-5">
        <div class="col-md-12">
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
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h2 class="modal-title">Tambah Data Rawat</h2>
                            </div>
                            <div class="modal-body">
                              <!-- FORM TAMBAH -->
                              <form method="post" action="<?php echo base_url()?>rawat/addRawat" >
                                <!-- <input type="hidden" name="id" id="id" value=> -->
								                    <div class="mb-3 row">
								                    </div>
                                      <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Judul Buku</label>
                                                <input type="text" class="form-control" name="judul_koleksi" placeholder="Judul Koleksi">
                                              </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Penulis</label>
                                                <input type="text" class="form-control" name="penulis" placeholder="Penulis">
                                              </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Penerbit</label>
                                                <input type="text" class="form-control" name="penerbit" placeholder="Penerbit" >
                                              </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Pencipta</label>
                                                <input type="text" class="form-control" name="pencipta" placeholder="Penerbit" >
                                              </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                              <!-- text input -->
                                              <div class="form-group">
                                                <label>Nama Dokter</label>
                                                <select class="form-control">
                                                    <?php foreach ($datalist as $i):?>
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
                                                <label>Jenis Koleksi</label>
                                                <select class="form-control" name="jenis_koleksi">
                                                  <option value="buku">Buku</option>
                                                  <option value="majalah">Majalah</option>
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
                    <table class="table display nowrap table-bordered table-striped" style="width:100%" id="tabeldokter">
                        <thead>
                            <tr>
                                <th class="text-center">ID Dokter</th>
                                <th class="text-center">Nama Dokter</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody id="Dokter">
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
<script>
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
</script>
<!-- <script>
    $(document).ready( function () {
    $('#tabeldokter').DataTable();
} ); -->
</script>