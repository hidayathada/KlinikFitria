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
                    <table class="table display nowrap table-bordered table-striped table-datatable tbody" style="width:100%" id="tabelpasien">
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
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
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
        document.location.href = "pasien/addPasien" + data;
    })
} );
    function tombol(){
        return '<button class="btn btn-danger hapus">Hapus</button>';
        // return "hada";
    }
</script>
</html>