<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Modul Tindakan</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<!-- <li class="breadcrumb-item"><a href="index.html">Pasien</a></li> -->
									<!-- <li class="breadcrumb-item active" aria-current="page">DataTable</li> -->
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<!-- Simple Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h2>Tabel Tindakan</h2>
	                    <a href="<?= base_url()?>tindakan/addT" class="btn btn-success btn-sm mt-3">Tambah Tindakan</a>
	                    
					</div>
					<div class="pb-20">
						<table class="data-table table stripe hover nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">ID Tindakan</th>
									<th>Nama Tindakan</th>
									<th>Biaya</th>
									<th ><center>Action</center></th>
								</tr>
							</thead>
							<tbody>
                                <?php foreach($list as $i):?>
                                    <tr>
								        <td><?= "T00" . $i['idtindakan']?></td>
									    <td><?= $i['namatindakan']?></td>
									    <td><?= $i['biaya']?></td>
									    <td align="center">
											<a class="btn btn-primary" href="<?= base_url()?>tindakan/editT/<?= $i['idtindakan']?>">Edit</a>
											<a class="btn btn-danger" href="<?= base_url()?>tindakan/deleteT/<?= $i['idtindakan']?>">Hapus</a>
										</td>
								    </tr>
                                <?php endforeach?> 
							</tbody>
						</table>
					</div>
				</div>
			</div>

<!-- <script>
	$(document).ready( function () {
    $('#tabelku').DataTable({
		// "scrollX" : true
	});
	
} );
</script> -->
	<!-- <script>
    $(document).ready(function() {
    const table = $('#tabeltindakan').DataTable( {
        "processing": true,
        "serverSide": true,
        "scrollX": true,
        "ajax": "<?= base_url("DT_serverside/tindakan");?>",
        "columnDefs" : [{
            "data" : null,
            "render" : tombol,
            "targets" : [3]
        }],
    } );

    $('.table-datatable tbody').on('click', '.hapus', function(){
        var row = $(this).closest('tr');
        var data = table.row(row).data()[0];
        document.location.href = "tindakan/deleteT/" + data;
    })
    
    $('.table-datatable tbody').on('click', '.edit', function(){
        var row = $(this).closest('tr');
        var data = table.row(row).data()[0];
        document.location.href = "tindakan/editT/" + data;
    })
    
} );
    function tombol(){
        return '<button class="btn btn-primary edit">Edit</button>&nbsp;<button class="btn btn-danger hapus">Hapus</button>';
    }
</script> -->

</html>