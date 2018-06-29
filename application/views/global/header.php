<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Online Bookstore</title>
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/lux/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <nav class="container">
      <a class="navbar-brand" href="https://mir-s3-cdn-cf.behance.net/project_modules/disp/c039b824474525.56334ce736de9.jpg"><img class="img-round" width="50" height="50" src="<?php echo base_url('/asset/images/2.jpg'); ?>"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo site_url('Client'); ?>">Home BookStore <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Client/about'); ?>">Informasi <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>

      <!-- Hilangkan link pada navigasi utama untuk halaman login -->
        <!-- Link -->
      <form class="form-inline my-2 my-lg-0">
      <?php if (empty($_SESSION['login'])) { ?>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Login'); ?>">Masuk <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('Register'); ?>">Daftar <span class="sr-only">(current)</span></a>
            </li>
        </ul>
      <?php

    }
    if (!empty($_SESSION['login'])) { ?>

          <ul class="navbar-nav mr-auto">
            <li>        <!-- keranjang -->
              <button type="button" class="btn btn-success btn-sm" onclick="location.href='<?php echo site_url('cart_user') ?>'"><i class="fa" style="color:white;">&#xf290;</i>&nbsp;&nbsp;</button>
            </li>
            <li>
              <button type="button" class="btn btn-danger btn-sm" onclick="location.href='<?php echo site_url('logout') ?>'">Logout</button>
            </li>
          </ul>
        <?php

      } ?>
        </form>
        </div>
    </nav>
  </nav>

