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
<br><br>
<div class="container">
    <h2>Tentang</h2>
    <div class="container" style="border-radius: 4px; padding-top: 30px;padding-bottom: 30px; background-color: #ddd;">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum molestie nunc, et suscipit urna vulputate vel. Sed mattis mi sit amet nulla sollicitudin tempus. Proin luctus quam eu nibh iaculis, id scelerisque urna ultrices. Phasellus velit tellus, sodales interdum velit non, sodales sodales tellus. Quisque tempus pellentesque tortor ac aliquam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus quis libero gravida enim pellentesque tincidunt. Morbi quis purus porta, consectetur neque nec, auctor neque. Ut vitae iaculis massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
    </p><p>
    Praesent porta quam ante, non dapibus felis euismod sed. Aenean viverra mi sit amet massa facilisis vulputate. Etiam vestibulum nunc sed velit rhoncus, sed fermentum ex volutpat. Vivamus ut semper orci, faucibus pellentesque risus. Donec iaculis libero et turpis malesuada fringilla. Sed et volutpat ipsum, in rutrum nisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
    </div>
</div>
<hr class="my-4">
  <nav class="container">
    <footer>
      <p>Contact information: <a href="mailto:C16@gmail.com">
      C16@gmail.com</a>.</p>
    </footer>
    
  </nav>
</body>
</html>