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
		    			<a class="nav-link" href="<?php echo site_url('Welcome/login'); ?>">Masuk<span class="sr-only">(current)</span></a>
		    		</li>
		    		<li>
		    			<a class="nav-link" href="<?php echo site_url('Welcome/regist'); ?>">Daftar<span class="sr-only">(current)</span></a>
		    		</li>
		    		<!-- <li>
		    			<a class="nav-link" href=""><i class="fa" style="color:white;">&#xf290;</i>&nbsp;&nbsp;Keranjang</a>
		    		</li> -->
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
				<div class="col-md-5"></div>
				<div class="col-md-2">
					<center>
						<h3>Masuk</h3>
					</center>
					<hr class="my-3">
				</div>
				<div class="col-md-5"></div>
			</div>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<center>
						<div class="card text-white bg-dark mb-8" style="max-width: 20rem;">
						  <div class="card-body">
						    <form>
						    	<div class="form-group">
							      <input type="text" class="form-control" placeholder="Username"><br>
							      <input type="password" class="form-control" placeholder="Password">
							    </div>
							    <button type="submit" class="btn btn-primary">Masuk</button>
						    </form>
						  </div>
						</div>
					</center>
				</div>
				<div class="col-md-2">
					
				</div>
				<div class="col-md-2"></div>
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