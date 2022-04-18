	
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css"> -->
<body>
    <div class="container mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-secondary">
                    <h4 class="text-light">Modul Pasien</h4>
                </div>
                <div class="card-body">
                    <a href="Pasien/addP" class="btn btn-success mb-3 float-right">Tambah Pasien</a>
                    <table class="table display nowrap table-bordered table-striped" style="width:100%"id="tableP">
                        <thead>
                            <tr>
                                <th class="text-center">ID Pasien</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Tanggal Lahir</th>
                                <th class="text-center">Telepon</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($list as $item) : {
                            ?>
                                    <tr>
                                        <td><?php echo $item['idpasien'] ?></td>
                                        <td><?php echo $item['nama'] ?></td>
                                        <td><?php echo $item['alamat'] ?></td>
                                        <td><?php echo $item['tgllahir'] ?></td>
                                        <td><?php echo $item['notelp'] ?></td>
                                        <td class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <a href="Pasien/editP/<?php echo $item['idpasien']; ?>" class="btn btn-warning">Edit</a>
                                            <a href="Pasien/deleteP/<?php echo $item['idpasien']; ?>" onclick="return confirm('Data ini akan dihapus. Anda yakin?')" class="btn btn-danger">Hapus</a>
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
    $(document).ready( function () {
    $('#tableP').DataTable();
} );
$('#tableP').DataTable( {
    "scrollX": true
} );
</script>