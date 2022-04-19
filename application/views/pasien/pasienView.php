<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<!-- Tampilan halaman utama -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasien</title>
</head>

<body>
    <h1 class="text-center">Daftar Pasien</h1>

    <div class="container">
        <div class="row">
            <!-- Search box dan button -->
            <!-- yang akan mengarah ke controller search -->
            <div class="col-12">
                <form class="col-12" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" style="margin-right: 2px;" id="cariP" name="keyword" onkeyup="prosesMenu()" placeholder="Masukkan ID/Nama Pasien">
                        <span class="col input-group-btn d-flex flex-col-reverse">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </span>
                        <!-- button tambah pasien -->
                        <a href="Pasien/addP" class="btn btn-success">Tambah Pasien</a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Yang berisi daftar pasien beserta tabelnya -->
        <div class="col-12">
            <table class="table table-bordered table-striped" id="tableP">
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
            </table>
        </div>
    </div>
</body>
<!-- Memanggil code js dari folder js  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="assets/jquery/search.js"></script>

</html>
=======
	
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
>>>>>>> faaf744c4a33ef6b0c8d13c77cfa3ad97b5b5c98
