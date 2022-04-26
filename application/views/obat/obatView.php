<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Data Obat</h4>
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
						<h2>Tabel Obat</h2>
	                    <a href="<?= base_url()?>obat/addO" class="btn btn-success btn-sm mt-3">Tambah Obat</a>
						<button type="button" class="btn btn-sm btn-primary mt-3" data-toggle="modal" data-target="#chartTindakan"><i class="icon-copy dw dw-analytics-11 mr-1"></i>Lihat Chart</button>
						<div class="modal fade" id="chartTindakan">
							<div class="modal-dialog">
							<div class="modal-content">
                  <div class="modal-header">
                      <h4>Banyaknya Obat Yang Dibeli</h4>
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
									<th class="table-plus datatable-nosort">ID Obat</th>
									<th>Nama Obat</th>
									<th>Harga</th>
									<th class="datatable-nosort"><center>Action</center></th>
								</tr>
							</thead>
							<tbody>
                                <?php foreach($list as $i):?>
                                    <tr>
								        <td><?= "O00" . $i['idobat']?></td>
									    <td><?= $i['nama']?></td>
									    <td><?= $i['harga']?></td>
									    <td align="center">
											<a class="btn btn-primary" href="<?= base_url()?>obat/editO/<?= $i['idobat']?>">Edit</a>
											<a class="btn btn-danger" href="<?= base_url()?>obat/deleteO/<?= $i['idobat']?>">Hapus</a>
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
    const table = $('#tabelobat').DataTable( {
        "processing": true,
        "serverSide": true,
        "scrollX": true,
        "ajax": "<?= base_url("DT_serverside/obat");?>",
        "columnDefs" : [{
            "data" : null,
            "render" : tombol,
            "targets" : [3]
        }],
    } );

    $('.table-datatable tbody').on('click', '.hapus', function(){
        var row = $(this).closest('tr');
        var data = table.row(row).data()[0];
        document.location.href = "obat/deleteO/" + data;
    })
    
    $('.table-datatable tbody').on('click', '.edit', function(){
        var row = $(this).closest('tr');
        var data = table.row(row).data()[0];
        document.location.href = "obat/editO/" + data;
    })
    
} );
    function tombol(){
        return '<button class="btn btn-primary edit">Edit</button>&nbsp;<button class="btn btn-danger hapus">Hapus</button>';
    }
</script> --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script type="text/javascript">
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: [
          <?php
            if (count($chartObat)>0) {
              foreach ($chartObat as $data) {
                echo "'" .$data->nama ."',";
              }
            }
          ?>
        ],
        datasets: [{
            label: 'Jumlah Obat',
            backgroundColor: ['#b91d47', '#00aba9', '#2b5797'],
            // borderColor: '##93C3D2',
            data: [
              <?php
                if (count($chartObat)>0) {
                   foreach ($chartObat as $data2) {
                    echo $data2->total . ", ";
                  }
                }
              ?>
            ]
        }]
    },
});
 
  </script>