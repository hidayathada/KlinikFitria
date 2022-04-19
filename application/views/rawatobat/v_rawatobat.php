	<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css"> -->
	<!-- Tampilan Rawat obat -->
	<title>Rawat Obat</title>

	<body>
		<div class="container mt-5">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header bg-secondary">
						<h4 class="text-light">Modul Rawat Obat</h4>
					</div>
					<div class="card-body">
						<a href="Obat/addO" class="btn btn-success mb-3 float-right">Tambah Rawat Obat</a>
						<table class="table display nowrap table-bordered table-striped" style="width:100%" id="tableP">
							<thead>
								<!-- Table Head -->
								<tr>
									<th class="text-center">ID Rawat Obat</th>
									<th class="text-center">ID Rawat</th>
									<th class="text-center">ID Obat</th>
									<th class="text-center">Jumlah</th>
									<th class="text-center">Harga</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<!-- Isi dari table -->
								<?php
								foreach ($list as $item) : {
								?>
										<tr>
											<td><?php echo $item['idrawatobat'] ?></td>
											<td><?php echo $item['idrawat'] ?></td>
											<td><?php echo $item['idobat'] ?></td>
											<td><?php echo $item['jumlah'] ?></td>
											<td><?php echo $item['harga'] ?></td>
											<td class="d-grid gap-2 d-md-flex justify-content-md-end">
												<a href="Obat/editRO/<?php echo $item['idrawatobat']; ?>" class="btn btn-warning">Edit</a>
												<a href="Obat/deleteRO/<?php echo $item['idrawatobat']; ?>" onclick="return confirm('Data ini akan dihapus. Anda yakin?')" class="btn btn-danger">Hapus</a>
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
	<!-- Javascript untuk datatables -->
	<script>
		$(document).ready(function() {
			$('#tableP').DataTable();
		});
		$('#tableP').DataTable({
			"scrollX": true
		});
	</script>