	
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
                        <tbody id="userTable">
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready( function () {
    $('#tableP').DataTable();
} );
$('#tableP').DataTable( {
    "scrollX": true
} );
</script>
<script>​
$(document).ready(function(){
    $.ajax({
        url: 'http://rosihanari.net/api/api.php?get=dokter',
        type: 'get',
        dataType: 'JSON',
        success: function(response){
            var len = response.length;
            for(var i=0; i<len; i++){
                var id = response[i].iddokter;
                var username = response[i].namadokter;

                var tr_str = "<tr>" +
                    "<td align='center'>" + iddokter+ "</td>" +
                    "<td align='center'>" + namadokter + "</td>" +
                    "</tr>";

                $("#userTable tbody").append(tr_str);
            }

        }
    });
});​​​​​​​​
</script>