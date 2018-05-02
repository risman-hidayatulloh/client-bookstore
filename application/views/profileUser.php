<!DOCTYPE html>
<html>
<head>
  <title>Buku.com</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="asset/css/style.css">
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
<div style="" class="jumbotron">

  <div class="container">
        <h2>Profil</h2>
    <br><br>
    
    <img src="/provis/asset/images/pergi.jpg" alt="Avatar" class="avatar">
    <br><br><br>  
    <h4>Nama Lengkap</h4>
          <input type="text" readonly="" class="form-control-plaintext" id="" value="Rizky Rahmana">
    <br><br> 
    <h4>Email</h4>
          <input type="text" readonly="" class="form-control-plaintext" id="" value="rizky@gmail.com">
    <br><br> 
    <h4>No. Telp</h4>
          <input type="text" readonly="" class="form-control-plaintext" id="" value="087712312323">
    <br><br> 
    <h4>Password</h4>
          <input type="password" readonly="" class="form-control-plaintext" id="" value="rizky">
  </div>
</div>
  <nav class="container">
    <footer>
      <p>Contact information: <a href="mailto:C16@gmail.com">
      C16@gmail.com</a>.</p>
    </footer>
    
  </nav>
</body>
</html>