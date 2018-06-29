<!DOCTYPE html>
<html>
<head>
	<title>Toko Buku</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
  <a class="navbar-brand" href="<?php echo site_url('Welcome/'); ?>">Buku.com</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Welcome/'); ?>">Beranda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Welcome/about'); ?>">Tentang</a>
      </li>
    </ul>
    <ul class="navbar-nav navbar-right">
      <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('Welcome/login'); ?>">Masuk</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('Welcome/regist'); ?>">Daftar</a>
      </li>
      </ul>
      </div>
  </div>
</nav>
<br><br>
<div class="container">
  <?php if($result != NULL){ ?>
  <h2><?php echo $result->Title; ?></h2>
  <hr class="my-4">
  <div class="row">
     <div class="col-md-3">
        <img style="border: 1px solid #ddd; border-radius: 4px; padding: 5px;" src="<?php echo 'http://68140596.ngrok.io/1/asset/images/'. $result->Picture; ?>">  
      </div>
      <div class="col-md-6">
        <h4>Deskripsi Buku</h4>
        <p>Judul: <?php echo $result->Title; ?></p>
        <p>ISBN: <?php echo $result->ISBN; ?></p>
        <p>Penulis: <?php echo $result->Author_Name ?></p>
        <p>Alamat Penulis: <?php echo $result->Author_Address ?></p>
        <p>Tahun Terbit: <?php echo $result->Year; ?></p>
      </div>
      <div class="col-md-3">
        <div style="border: 1px solid #ddd; border-radius: 4px; padding: 5px;">
        <h4><center>RP<?php echo $result->Price ?>,-</center></h4>
        </div>
        <br>
        <button type="button" class="btn btn-primary btn-lg btn-block">+ Add To Cart</button>
        <br>
        <div class="card border-secondary mb-3" style="max-width: 20rem;">
        <div class="card-header">Informasi Penerbit</div>
          <div class="card-body">
            <p class="card-text">Nama: <?php echo $result->Publisher_Name?></p>
            <p class="card-text">Alamat: <?php echo $result->Publisher_Address?></p>
            <p class="card-text">No. Telp: <?php echo $result->Publisher_Phone ?></p>
          </div>
        </div>
        <br>
      </div>
  </div>
  <hr class="my-4">
  <?php } ?>
</div>
  <nav class="container">
    <footer>
      <p>Contact information: <a href="mailto:C16@gmail.com">
      C16@gmail.com</a>.</p>
    </footer>
  </nav>
</body>
</html>