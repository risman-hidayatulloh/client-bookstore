<!DOCTYPE html>
<html>
<head>
	<title>Toko Buku</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="<?php echo site_url('Welcome/loginIn'); ?>">Buku.com</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Welcome/loginIn'); ?>">Beranda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Welcome/aboutIn'); ?>">Tentang</a>
      </li>
    </ul>
    <ul class="navbar-nav navbar-right">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Welcome/Profile'); ?>"><i class="fa" style="color:white;">&#xf2c1;</i>&nbsp;&nbsp;Akun</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('Welcome/Keranjang'); ?>"><i class="fa" style="color:white;">&#xf290;</i>&nbsp;&nbsp;Keranjang</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Welcome/logout'); ?>"><i class="fa" style="color:white;">&#xf0a9;</i>&nbsp;&nbsp;Logout</a>
      </li>
      </ul>
      </div>
  </div>
</nav>
<br><br>
<div class="container">
  <h2>Nama Buku</h2>
  <hr class="my-4">
  <div class="row">
     <div class="col-md-3">
        <img style="border: 1px solid #ddd; border-radius: 4px; padding: 5px;" src="/provis/asset/images/pergi.jpg">  
      </div>
      <div class="col-md-6">
        <h4>Deskripsi Buku</h4>
        <p>Judul: Judul Buku</p>
        <p>ISBN: 12312312321</p>
        <p>Penerbit: PT. Penerbit Buku</p>
        <p>Penulis: Nama Lengkap Penulis</p>
        <p>Alamat Penulis: Jalan Penulis Blok C no. 4, Jakarta</p>
        <p>Tahun Terbit: 2012</p>
        <p>Harga: RP100.000,-</p>
      </div>
      <div class="col-md-3">
        <div style="border: 1px solid #ddd; border-radius: 4px; padding: 5px;">
        <h4><center>RP100.000,-</center></h4>
        </div>
        <br>
        <button type="button" class="btn btn-primary btn-lg btn-block">+ Add To Cart</button>
        <br>
        <div class="card border-secondary mb-3" style="max-width: 20rem;">
        <div class="card-header">Informasi Penerbit</div>
          <div class="card-body">
            <p class="card-text">Nama: Nama Lengkap Penerbit</p>
            <p class="card-text">Alamat: Jalan Penerbit no. 8</p>
            <p class="card-text">No. Telp: 081513131234</p>
          </div>
        </div>
        <br>
      </div>
  </div>
  <hr class="my-4">
</div>
  <nav class="container">
    <footer>
      <p>Contact information: <a href="mailto:C16@gmail.com">
      C16@gmail.com</a>.</p>
    </footer>
  </nav>
</body>
</html>