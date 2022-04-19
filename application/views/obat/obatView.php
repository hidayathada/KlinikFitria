	
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css"> -->
<body>
    <div class="container mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-secondary">
                    <h4 class="text-light">Modul Obat</h4>
                </div>
                <div class="card-body">
                    <a href="Obat/addO" class="btn btn-success mb-3 float-right">Tambah Obat</a>
                    <table class="table display nowrap table-bordered table-striped" style="width:100%"id="table">
                        <thead>
                            <tr>
                                <!-- <th class="text-center">No</th> -->
                                <th class="text-center">ID Obat</th>
                                <th class="text-center">Nama Obat</th>
                                <th class="text-center">Harga</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($list as $item) : {
                            ?>
                                    <tr>
                                        <td><?php echo $item['idobat'] ?></td>
                                        <td><?php echo $item['nama'] ?></td>
                                        <td><?php echo $item['harga'] ?></td>
                                        <td class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <a href="Obat/editO/<?php echo $item['idobat']; ?>" class="btn btn-warning">Edit</a>
                                            <a href="Obat/deleteO/<?php echo $item['idobat']; ?>" onclick="return confirm('Data ini akan dihapus. Anda yakin?')" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                            <?php }
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script> -->
<script src="<?php echo base_url('assets/jquery/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/jquery/DataTables/datatables.js')?>"></script>
<!-- <script src="<?php echo base_url('assets/jquery/DataTables/DataTables-1.11.5/js/dataTables.bootstrap.min.js')?>"></script> -->
 
<script>
  var table;
 
 $(document).ready(function() {
  
     //datatables
     table = $('#table').DataTable({ 
  
         "processing": true, //Feature control the processing indicator.
         "serverSide": true, //Feature control DataTables' server-side processing mode.
         "order": [], //Initial no order.
  
         // Load data for the table's content from an Ajax source
         "ajax": {
             "url": "<?php echo base_url('Obat/ajax_list')?>",
             "type": "POST"
         },
  
         //Set column definition initialisation properties.
         "columnDefs": [
         { 
            //  "targets": [ 0 ], //first column / numbering column
             "orderable": false, //set not orderable
         },
         ],
  
     });
  
 });
</script>