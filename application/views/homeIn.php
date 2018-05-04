<!DOCTYPE html>
<html>
<head>
	<title>Toko Buku</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/lux/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<nav class="container">
			<a class="navbar-brand" href="<?php echo site_url('Welcome/loginIn'); ?>">Buku.com</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
			    <span class="navbar-toggler-icon"></span>
			  </button>
		  <div class="collapse navbar-collapse" id="navbarColor01">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="<?php echo site_url('Welcome/loginIn'); ?>">Beranda <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo site_url('Welcome/aboutIn'); ?>">Tentang<span class="sr-only">(current)</span></a>
		      </li>
		    </ul>

		    <form class="form-inline my-2 my-lg-0">
		    	<ul class="navbar-nav mr-auto">
		    		<li>
		    			<a class="nav-link" href="<?php echo site_url('Welcome/Profile'); ?>"><i class="fa" style="color:white;">&#xf2c1;</i>&nbsp;&nbsp;Akun</a>
		    		</li>
		    		<li>
		    			<a class="nav-link" href="<?php echo site_url('Welcome/Keranjang') ?>"><i class="fa" style="color:white;">&#xf290;</i>&nbsp;&nbsp;Keranjang</a>
		    		</li>
		    		<li class="nav-item">
				        <a class="nav-link" href="<?php echo site_url('Welcome/logout'); ?>"><i class="fa" style="color:white;">&#xf0a9;</i>&nbsp;&nbsp;Logout</a>
				    </li>
		    	</ul>
		    </form>
		  </div>
		</nav>
	</nav>

	<nav class="container">	
		<nav class="jumbotron">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-2">
					<form>
						 <div class="form-group">
					      <select class="form-control" id="exampleSelect1">
					        <option>Publisher</option>
					        <option>Author</option>
					        <option>Book</option>
					      </select>
					    </div>
				</div>
				<div class="col-md-6">
					<center>
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
				<div class="col-md-1"></div>
			</div>
			<hr class="my-12">
			<div class="row">
				<div class="col-md-4">
					<div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
					  <div class="card-body">
					    <img style="height: 300px; width: 100%; display: block;" src="https://ecs7.tokopedia.net/img/product-1/2016/9/7/12005892/12005892_b8675922-f406-4c82-8b79-9d99d037391e.jpg" alt="Card image">
					    <p class="card-text">Judul Buku</p>
					    <hr class="my-4">
					    <p class="card-text">Harga Buku</p>
					    <a href="<?php echo site_url('Welcome/DetailIn'); ?>" style="color: white;">Lihat Selengkapnya>></a>
					  </div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
					  <div class="card-body">
					    <img style="height: 300px; width: 100%; display: block;" src="https://ananthalia19.files.wordpress.com/2013/02/sampul-pk1.jpg" alt="Card image">
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
					    <img style="height: 300px; width: 100%; display: block;" src="https://ssvr.bukukita.com/babacms/displaybuku/99280_f.jpg" alt="Card image">
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
					    <img style="height: 300px; width: 100%; display: block;" src="https://penerbitsalemba.com/v3/images/buku_320992236.jpg" alt="Card image">
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
					    <img style="height: 300px; width: 100%; display: block;" src="https://ecs7.tokopedia.net/img/product-1/2015/11/4/5769067/5769067_8c3efaef-8424-4ac5-b076-0be723ffde0b.jpg" alt="Card image">
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
					    <img style="height: 300px; width: 100%; display: block;" src="https://ssvr.bukukita.com/babacms/displaybuku/101400_f.jpg" alt="Card image">
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
					    <img style="height: 300px; width: 100%; display: block;" src="http://1.bp.blogspot.com/-4P9V_bco88s/Txp1hVzwVOI/AAAAAAAAADQ/glaFbkBPSwo/s1600/surat-kecil.jpg" alt="Card image">
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
					    <img style="height: 300px; width: 100%; display: block;" src="https://www.belbuk.com/images/products/buku/novel--sastra/novel-umum/57bfb26487f657.33131049l.jpg" alt="Card image">
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
					    <img style="height: 300px; width: 100%; display: block;" src="https://scoopadm.apps-foundry.com/ebook-covers/34529/big_covers/ID_RAPH2016MTH09LLSE_B.jpg" alt="Card image">
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
					    <img style="height: 300px; width: 100%; display: block;" src="https://blog.gotomalls.com/wp-content/uploads/2017/08/Laskar-Pelangi.jpg" alt="Card image">
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
					    <img style="height: 300px; width: 100%; display: block;" src="https://gagasmedia.net/wp-content/uploads/2017/03/Sebatas-Mimpi.jpg" alt="Card image">
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
					    <img style="height: 300px; width: 100%; display: block;" src="https://awsimages.detik.net.id//community/media/visual/2016/01/18/b5b2501e-2436-4ab7-a2ff-0c1c4aeef75f.jpg?w=780&q=90" alt="Card image">
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