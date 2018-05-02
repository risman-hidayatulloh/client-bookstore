<!DOCTYPE html>
<html>
<head>
  <title>Toko Buku</title>
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
  <h2>Keranjangku</h2><br><br>
    <div  class="row">
      <img style="border: 1px solid #8c8c8c; border-radius: 4px; padding: 3px;background-color: white;" class="post-thumb" src="/provis/asset/images/pergi.jpg"> 
      <div class="col-md-7">
        <h4>Nama Buku</h4>
        <h5>Rp100.000,-</h5>
        <br>
        <form>
          <div class="form-group">
              <input type="number" id="number" value="0" />
          </div>
        </form>
      </div>
      <div class="absolute">
        <div class="form-group">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
            <label class="custom-control-label" for="customCheck1"></label>
          </div>
        </div>
      </div>
    </div>
      <hr class="my-4">
      <div class="row">
        <div class="col-md-8">
          
        </div>
        <div class="col-md-2">
          <h4>Subtotal</h4>
          <input type="text" readonly="" class="form-control-plaintext" id="" value="Rp100.000,-">
        </div>
        <div class="col-md-2">
          <button type="button" class="btn btn-primary">Pesan</button>
        </div>
      </div>
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