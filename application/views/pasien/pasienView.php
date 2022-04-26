<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Data Pasien</h4>
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
						<h2>Tabel Pasien</h2>
	                    <a href="<?= base_url()?>pasien/addP" class="btn btn-success btn-sm mt-3"><i class="icon-copy ion-plus mr-1"></i>Tambah Pasien</a>
						<button type="button" class="btn btn-sm btn-primary mt-3" data-toggle="modal" data-target="#chartTindakan"><i class="icon-copy dw dw-analytics-11 mr-1"></i>Lihat Chart</button>
						<div class="modal fade" id="chartTindakan">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title">Alamat Pasien</h4>
									</div>
									<div class="modal-body">
										<canvas id="myChart"></canvas>
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
									<th class="table-plus datatable-nosort">ID Pasien</th>
									<th>Nama Pasien</th>
									<th>Alamat</th>
									<th>Tanggal Lahir</th>
									<th>No Telp</th>
									<th class="datatable-nosort"><center>Action</center></th>
								</tr>
							</thead>
							<tbody>
                                <?php foreach($list as $i):?>
                                    <tr>
								        <td><?= "P00" . $i['idpasien']?></td>
									    <td><?= $i['nama']?></td>
									    <td><?= $i['alamat']?></td>
									    <td><?= tanggal_indonesia($i['tgllahir'])?></td>
									    <td><?= $i['notelp']?></td>
									    <td align="center">
										<a class="btn btn-sm btn-primary" href="<?= base_url()?>pasien/editP/<?= $i['idpasien']?>"><i class="icon-copy dw dw-edit-1 mr-1"></i>Edit</a>
										<a class="btn btn-sm btn-danger" href="<?= base_url()?>pasien/deleteP/<?= $i['idpasien']?>"><i class="icon-copy dw dw-delete-3 mr-1"></i>Hapus</a>
										</td>
								    </tr>
                                <?php endforeach?> 
							</tbody>
						</table>
					</div>
				</div>
			</div>
<!-- <script>
    $(document).ready(function() {
    const table = $('#tabelpasien').DataTable( {
        "processing": true,
        "serverSide": true,
        "scrollX": true,
        "ajax": "<?= base_url("DT_serverside/pasien");?>",
        "columnDefs" : [{
            "data" : null,
            "render" : tombol,
            "targets" : [5]
        }],
    } );

    $('.table-datatable tbody').on('click', '.hapus', function(){
        var row = $(this).closest('tr');
        var data = table.row(row).data()[0];
        Swal.fire({
            title: 'Apakah kamu ingin menghapus data ini?',
            text: "Data yang dihapus tidak bisa dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: 'primary',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
        }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire('Data Berhasil Dihapus!', '', 'success', document.location.href = "pasien/deleteP/" + data )
        }
        })
    })
    
    $('.table-datatable tbody').on('click', '.edit', function(){
        var row = $(this).closest('tr');
        var data = table.row(row).data()[0];
        document.location.href = "pasien/editP/" + data;
    })
    
} );
    function tombol(){
        return '<button class="btn btn-danger hapus">Hapus</button>&nbsp;<button class="btn btn-primary edit">Edit</button>';
    }
</script> -->
<script>
</script>
</html>