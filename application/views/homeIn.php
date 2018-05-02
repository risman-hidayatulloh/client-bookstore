<!DOCTYPE html>
<html>
<head>
	<title>Book Store</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/lux/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<nav class="container">
			<a class="navbar-brand" href="<?php echo site_url('Welcome/'); ?>">ONLINE BOOKSTORE</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
			    <span class="navbar-toggler-icon"></span>
			  </button>
		  <div class="collapse navbar-collapse" id="navbarColor01">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="<?php echo site_url('Welcome/'); ?>">Beranda <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Tentang<span class="sr-only">(current)</span></a>
		      </li>
		    </ul>

		    <form class="form-inline my-2 my-lg-0">
		    	<ul class="navbar-nav mr-auto">
		    		<li>
		    			<a class="nav-link" href=""><i class="fa" style="color:white;">&#xf2c1;</i>&nbsp;&nbsp;Akun</a>
		    		</li>
		    		<li>
		    			<a class="nav-link" href=""><i class="fa" style="color:white;">&#xf290;</i>&nbsp;&nbsp;Keranjang</a>
		    		</li>
		    		<!-- <li>
				      	<form class="form-inline my-2 my-lg-0">
							<input class="form-control mr-sm-2" type="text" placeholder="Search">
						    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
						</form>
				    </li> -->
		    	</ul>
		    </form>
		  </div>
		</nav>
	</nav>

	<nav class="container">	
		<nav class="jumbotron">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-6">
					<center>
						<form>
							<fieldset>
								<div class="form-group">
							      <input type="text" class="form-control" placeholder="Cari">
							    </div>
							</fieldset>	
					</center>
				</div>
				<div class="col-md-2">
							<button type="submit" class="btn btn-primary">Cari</button>
						</form>
				</div>
				<div class="col-md-2"></div>
			</div>
			<hr class="my-12">
			<div class="row">
				<div class="col-md-4">
					<div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
					  <div class="card-body">
					    <img style="height: 300px; width: 100%; display: block;" src="asset/b1.jpg" alt="Card image">
					    <p class="card-text">Judul Buku</p>
					    <hr class="my-4">
					    <p class="card-text">Harga Buku</p>
					    <a href="" style="color: white;">Lihat Selengkapnya>></a>
					  </div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
					  <div class="card-body">
					    <img style="height: 300px; width: 100%; display: block;" src="asset/b2.jpg" alt="Card image">
					    <p class="card-text">Judul Buku</p>
					    <hr class="my-4">
					    <p class="card-text">Harga Buku</p>
					    <a href="" style="color: white;">Lihat Selengkapnya>></a>
					  </div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
					  <div class="card-body">
					    <img style="height: 300px; width: 100%; display: block;" src="asset/b3.jpg" alt="Card image">
					    <p class="card-text">Judul Buku</p>
					    <hr class="my-4">
					    <p class="card-text">Harga Buku</p>
					    <a href="" style="color: white;">Lihat Selengkapnya>></a>
					  </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
					  <div class="card-body">
					    <img style="height: 300px; width: 100%; display: block;" src="asset/b4.jpg" alt="Card image">
					    <p class="card-text">Judul Buku</p>
					    <hr class="my-4">
					    <p class="card-text">Harga Buku</p>
					    <a href="" style="color: white;">Lihat Selengkapnya>></a>
					  </div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
					  <div class="card-body">
					    <img style="height: 300px; width: 100%; display: block;" src="asset/b5.jpg" alt="Card image">
					    <p class="card-text">Judul Buku</p>
					    <hr class="my-4">
					    <p class="card-text">Harga Buku</p>
					    <a href="" style="color: white;">Lihat Selengkapnya>></a>
					  </div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
					  <div class="card-body">
					    <img style="height: 300px; width: 100%; display: block;" src="asset/b6.jpg" alt="Card image">
					    <p class="card-text">Judul Buku</p>
					    <hr class="my-4">
					    <p class="card-text">Harga Buku</p>
					    <a href="" style="color: white;">Lihat Selengkapnya>></a>
					  </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
					  <div class="card-body">
					    <img style="height: 300px; width: 100%; display: block;" src="asset/b7.jpg" alt="Card image">
					    <p class="card-text">Judul Buku</p>
					    <hr class="my-4">
					    <p class="card-text">Harga Buku</p>
					    <a href="" style="color: white;">Lihat Selengkapnya>></a>
					  </div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
					  <div class="card-body">
					    <img style="height: 300px; width: 100%; display: block;" src="asset/b8.jpg" alt="Card image">
					    <p class="card-text">Judul Buku</p>
					    <hr class="my-4">
					    <p class="card-text">Harga Buku</p>
					    <a href="" style="color: white;">Lihat Selengkapnya>></a>
					  </div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
					  <div class="card-body">
					    <img style="height: 300px; width: 100%; display: block;" src="asset/b9.jpg" alt="Card image">
					    <p class="card-text">Judul Buku</p>
					    <hr class="my-4">
					    <p class="card-text">Harga Buku</p>
					    <a href="" style="color: white;">Lihat Selengkapnya>></a>
					  </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
					  <div class="card-body">
					    <img style="height: 300px; width: 100%; display: block;" src="asset/b10.jpg" alt="Card image">
					    <p class="card-text">Judul Buku</p>
					    <hr class="my-4">
					    <p class="card-text">Harga Buku</p>
					    <a href="" style="color: white;">Lihat Selengkapnya>></a>
					  </div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
					  <div class="card-body">
					    <img style="height: 300px; width: 100%; display: block;" src="asset/b1.jpg" alt="Card image">
					    <p class="card-text">Judul Buku</p>
					    <hr class="my-4">
					    <p class="card-text">Harga Buku</p>
					    <a href="" style="color: white;">Lihat Selengkapnya>></a>
					  </div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
					  <div class="card-body">
					    <img style="height: 300px; width: 100%; display: block;" src="asset/b12.jpg" alt="Card image">
					    <p class="card-text">Judul Buku</p>
					    <hr class="my-4">
					    <p class="card-text">Harga Buku</p>
					    <a href="" style="color: white;">Lihat Selengkapnya>></a>
					  </div>
					</div>
				</div>
			</div>
		</nav>
	</nav>

	<nav class="container">
		<footer>
		  <p>Contact information: <a href="mailto:C16@gmail.com">
		  C16@gmail.com</a>.</p>
		</footer>
		
	</nav>
</body>
</html>