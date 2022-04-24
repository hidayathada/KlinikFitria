<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }

    .topnav {
      overflow: hidden;
      background-color: #333;
    }

    .topnav a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }

    .topnav a.active {
      background-color: #04AA6D;
      color: white;
    }

    .topnav a.activegrey {
      background-color: grey;
      color: white;
    }

    .topnav .icon {
      display: none;
    }

    @media screen and (max-width: 600px) {
      .topnav a:not(:first-child) {
        display: none;
      }

      .topnav a.icon {
        float: right;
        display: block;
      }
    }

    @media screen and (max-width: 600px) {
      .topnav.responsive {
        position: relative;
      }

      .topnav.responsive .icon {
        position: absolute;
        right: 0;
        top: 0;
      }

      .topnav.responsive a {
        float: none;
        display: block;
        text-align: left;
      }
    }
  </style>
    <link href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>

<body>

  <div class="topnav" id="myTopnav">
    <a href="<?= base_url()?>" class="active"><i class="fa fa-plus mr-2">&nbsp;</i>Klinik Fitria</a>
    <a href="<?= base_url('pasien') ?>" class="<?php if ($this->uri->segment(1) == "pasien" | $this->uri->segment(1) == "Pasien" ) {echo "activegrey";} ?>">Modul Pasien</a>
    <a href="<?= base_url('obat') ?>" class="<?php if ($this->uri->segment(1) == "obat" | $this->uri->segment(1) == "Obat") {echo "activegrey";} ?>">Modul Obat</a>
      <a href="<?= base_url('tindakan') ?>" class="<?php if ($this->uri->segment(1) == "tindakan" | $this->uri->segment(1) == "Tindakan") {echo "activegrey";} ?>">Modul Tindakan</a>
      <a href="<?= base_url('rawat/rawat') ?>" class="<?php if ($this->uri->segment(2) == "rawat") {echo "activegrey";} ?>">Modul Rawat</a>
      <a href="<?= base_url('rawat/rawattindakan') ?>" class="<?php if ($this->uri->segment(2) == "rawattindakan") {echo "activegrey";} ?>">Modul RawatTindakan</a>
      <a href="<?= base_url('rawat/rawatobat') ?>" class="<?php if ($this->uri->segment(2) == "rawatobat") {echo "activegrey";} ?>">Modul RawatObat</a>
    <!-- <div class="dropdown">
      <a class="btn btn-secondary dropdown-toggle" type="button" id="buttonrawat" data-bs-toggle="dropdown" aria-expanded="false">
        Dropdown button
      </a>
      <ul class="dropdown-menu" aria-labelledby="buttonrawat">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
    </div>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div> -->
  </div>


  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
  </script>

</body>

</html>