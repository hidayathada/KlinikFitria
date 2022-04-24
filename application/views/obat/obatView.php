	<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
	<title>Obat</title>

	<body>
	    <div class="container mt-5">
	        <div class="col-md-12">
	            <div class="card">
	                <div class="card-header bg-secondary">
	                    <h4 class="text-light">Modul Obat</h4>
	                </div>
	                <div class="card-body">
	                    <a href="Obat/addO" class="btn btn-success mb-3 float-right">Tambah Obat</a>
	                    <table class="table display nowrap table-bordered table-striped table-datatable tbody" style="width:100%" id="tabelobat">
	                        <thead>
	                            <tr>
	                                <th class="text-center">ID Obat</th>
	                                <th class="text-center">Nama Obat</th>
	                                <th class="text-center">Harga</th>
	                                <th class="text-center">Aksi</th>
	                            </tr>
	                        </thead>
	                    </table>
	                </div>
	            </div>
	        </div>
	    </div>
	</body>
	<!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script> -->
<script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/jquery/DataTables/datatables.js') ?>"></script>
<script src="<?php echo base_url('assets/jquery/DataTables/DataTables-1.11.5/js/dataTables.bootstrap.min.js') ?>"></script>
<script>
    $(document).ready(function() {
    const table = $('#tabelobat').DataTable( {
        "processing": true,
        "serverSide": true,
        "scrollX": true,
        "ajax": "<?= base_url("DT_serverside/obat");?>",
        "columnDefs" : [{
            "data" : null,
            "render" : tombol,
            "targets" : [3]
        }],
    } );

    $('.table-datatable tbody').on('click', '.hapus', function(){
        var row = $(this).closest('tr');
        var data = table.row(row).data()[0];
        document.location.href = "obat/deleteO/" + data;
    })
    
    $('.table-datatable tbody').on('click', '.edit', function(){
        var row = $(this).closest('tr');
        var data = table.row(row).data()[0];
        document.location.href = "obat/editO/" + data;
    })
    
} );
    function tombol(){
        return '<button class="btn btn-primary edit">Edit</button>&nbsp;<button class="btn btn-danger hapus">Hapus</button>';
    }
</script>
</html>