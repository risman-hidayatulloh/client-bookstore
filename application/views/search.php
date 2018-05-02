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
			<a class="navbar-brand" href="<?php echo site_url('Welcome/'); ?>">Buku.com</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
			    <span class="navbar-toggler-icon"></span>
			  </button>
		  <div class="collapse navbar-collapse" id="navbarColor01">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="<?php echo site_url('Welcome/'); ?>">Beranda <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo site_url('Welcome/about'); ?>">Tentang <span class="sr-only">(current)</span></a>
		      </li>
		    </ul>

		    <form class="form-inline my-2 my-lg-0">
		    	<ul class="navbar-nav mr-auto">
		    		<li>
		    			<a class="nav-link" href="<?php echo site_url('Welcome/login'); ?>">Masuk <span class="sr-only">(current)</span></a>
		    		</li>
		    		<li>
		    			<a class="nav-link" href="<?php echo site_url('Welcome/regist'); ?>">Daftar <span class="sr-only">(current)</span></a>
		    		</li>
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
			<!-- <?php foreach() ?> -->
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