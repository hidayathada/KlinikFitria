<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- CSS only -->
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
<!-- <link rel="stylesheet" href="<?= base_url('assets/jquery/DataTables/datatables.min.css')?>"> -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.9/dist/sweetalert2.all.min.js"></script>

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

<script src="<?php //echo base_url('assets/jquery/jquery.min.js') ?>"></script>
<script src="<?php //echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/jquery/DataTables/datatables.js') ?>"></script>
<script src="<?php //echo base_url('assets/jquery/DataTables/DataTables-1.11.5/js/dataTables.bootstrap.min.js') ?>"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
<script src="<?php echo base_url('assets/jquery/DataTables/datatables.min.js') ?>"></script>
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
</script>
<script>
</script>
</html>