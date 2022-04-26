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
	                    <a href="<?= base_url()?>pasien/addP" class="btn btn-success btn-sm mt-3">Tambah Pasien</a>
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
									    <td><?= $i['tgllahir']?></td>
									    <td><?= $i['notelp']?></td>
									    <td align="center">
											<a class="btn btn-primary" href="<?= base_url()?>pasien/editP/<?= $i['idpasien']?>">Edit</a>
											<a class="btn btn-danger" href="<?= base_url()?>pasien/deleteP/<?= $i['idpasien']?>">Hapus</a>
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