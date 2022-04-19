<!-- Tampilan halaman Pasien -->

<title>Pasien</title>


<body>
    <div class="container mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-secondary">
                    <h4 class="text-light">Modul Pasien</h4>
                </div>
                <div class="card-body">
                    <!-- Button Tambah pasien -->
                    <a href="Pasien/addP" class="btn btn-success mb-3 float-right">Tambah Pasien</a>
                    <table class="table display nowrap table-bordered table-striped" style="width:100%" id="tableP">
                        <thead>
                            <tr>
                                <!-- Nama table head pasien -->
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
                                        <!-- Isi table dari database -->
                                        <td><?php echo $item['idpasien'] ?></td>
                                        <td><?php echo $item['nama'] ?></td>
                                        <td><?php echo $item['alamat'] ?></td>
                                        <td><?php echo $item['tgllahir'] ?></td>
                                        <td><?php echo $item['notelp'] ?></td>
                                        <td class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <!-- Button Edit dan hapus pasien -->
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


<!-- Memanggil code js dari folder js  -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
<script>
    $(document).ready(function() {
        $('#tableP').DataTable();
    });
    $('#tableP').DataTable({
        "scrollX": true
    });
</script>

</html>