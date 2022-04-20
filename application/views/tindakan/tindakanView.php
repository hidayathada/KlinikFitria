	<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css"> -->
	<title>Tindakan</title>

	<body>
		<div class="container mt-5">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header bg-secondary">
						<h4 class="text-light">Modul Tindakan</h4>
					</div>
					<div class="card-body">
						<a href="Tindakan/addT" class="btn btn-success mb-3 float-right">Tambah Tindakan</a>
						<table class="table display nowrap table-bordered table-striped" style="width:100%" id="tableP">
							<thead>
								<tr>
									<th class="text-center">ID Tindakan</th>
									<th class="text-center">Nama Tindakan</th>
									<th class="text-center">Biaya</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach ($list as $item) : {
								?>
										<tr>
											<td><?php echo $item['idtindakan'] ?></td>
											<td><?php echo $item['namatindakan'] ?></td>
											<td><?php echo $item['biaya'] ?></td>
											<td class="d-grid gap-2 d-md-flex justify-content-md-end">
												<a href="Tindakan/editT/<?php echo $item['idtindakan']; ?>" class="btn btn-warning">Edit</a>
												<a href="Tindakan/deleteT/<?php echo $item['idtindakan']; ?>" onclick="return confirm('Data ini akan dihapus. Anda yakin?')" class="btn btn-danger">Hapus</a>
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
	<script>
		$(document).ready(function() {
			$('#tableP').DataTable();
		});
		$('#tableP').DataTable({
			"scrollX": true
		});
	</script>