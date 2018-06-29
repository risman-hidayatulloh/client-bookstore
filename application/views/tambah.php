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
			<a class="navbar-brand" href="">Buku.com</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
			    <span class="navbar-toggler-icon"></span>
			  </button>
		  <div class="collapse navbar-collapse" id="navbarColor01">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="">Beranda <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="">Tentang <span class="sr-only">(current)</span></a>
		      </li>
		    </ul>

		    <form class="form-inline my-2 my-lg-0">
		    	<!-- <ul class="navbar-nav mr-auto">
		    		<li>
		    			<a class="nav-link" href="<?php echo site_url('Welcome/login'); ?>">Masuk <span class="sr-only">(current)</span></a>
		    		</li>
		    		<li>
		    			<a class="nav-link" href="<?php echo site_url('Welcome/regist'); ?>">Daftar <span class="sr-only">(current)</span></a>
		    		</li>
		    	</ul> -->
		    </form>
		  </div>
		</nav>
	</nav>

	<nav class="container">	
		<nav class="jumbotron">
			<div class="row">
				<div class="col-md-3">
					<div class="list-group">
						<form method="post" action="#">
						  <input class="list-group-item list-group-item-action" type="submit" name="submit1" value="Book">
						  </input>
						  <input class="list-group-item list-group-item-action" type="submit" name="submit2" value="Publisher">
						  </input>
						  <input class="list-group-item list-group-item-action" type="submit" name="submit3" value="Author">
						  </input>
						  <input class="list-group-item list-group-item-action" type="submit" name="submit4" value="Customer">
						  </input>
						  <input class="list-group-item list-group-item-action" type="submit" name="submit5" value="Shopping Basket">
						  </input>
						  <input class="list-group-item list-group-item-action" type="submit" name="submit6" value="Shopping Basket Book">
						  </input>
						</form>
					</div>
				</div>
				<div class="col-md-6">
					<?php if(isset($_POST['submit1'])){ ?>
					<form>
						<fieldset>
						<center><h4>Form Insert Book</h4></center><br>
					    <div class="form-group">
						  <label class="col-form-label" for="inputDefault">Id Book</label>
						  <input type="text" class="form-control" id="inputDefault" value="">
						  <small class="form-text text-muted">Isikan id_book dengan id_book data terakhir + 1</small>
						</div><br>
					    <div class="form-group">
						  <label class="col-form-label" for="inputDefault">ISBN</label>
						  <input type="text" class="form-control" placeholder="XXX-X-XXX-XXXXX-XX" id="inputDefault">
						</div><br>
						<div class="form-group">
						  <label class="col-form-label" for="inputDefault">Id Publisher</label>
						  <input type="text" class="form-control" id="inputDefault" value="" placeholder="XXX">
						  <small class="form-text text-muted">Isikan id_publisher dengan nomor</small>
						</div><br>
						<div class="form-group">
						  <label class="col-form-label" for="inputDefault">Id Author</label>
						  <input type="text" class="form-control" id="inputDefault" value="" placeholder="XXX">
						  <small class="form-text text-muted">Isikan id_author dengan nomor</small>
						</div><br>
						<div class="form-group">
						  <label class="col-form-label" for="inputDefault">Tahun</label>
						  <input type="text" class="form-control" id="inputDefault" value="" placeholder="XXX">
						  <small class="form-text text-muted">Tahun terbit buku</small>
						</div><br>
						<div class="form-group">
						  <label class="col-form-label" for="inputDefault">Harga Buku</label>
						  <input type="text" class="form-control" id="inputDefault" value="" placeholder="XXX">
						  <small class="form-text text-muted">Harga buku</small>
						</div><br>
					    <div class="form-group">
					      <label for="exampleInputFile">Input Gambar Buku</label>
					      <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
					    </div><br>
					    <button type="submit" class="btn btn-primary">Submit</button>
					  </fieldset>
					</form>
					<?php } else if(isset($_POST['submit2'])){  ?>
					<form>
						<fieldset>
							<center><h4>Form Insert Publisher</h4></center><br>
							<div class="form-group">
							  <label class="col-form-label" for="inputDefault">Id Publisher</label>
							  <input type="text" class="form-control" id="inputDefault" value="" placeholder="XXX">
							  <small class="form-text text-muted">Isikan id_publisher dengan nomor</small>
							</div><br>
							<div class="form-group">
							  <label class="col-form-label" for="inputDefault">Nama</label>
							  <input type="text" class="form-control" id="inputDefault" value="">
							</div><br>
							<div class="form-group">
							  <label for="exampleTextarea">Alamat</label>
							  <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
							</div>

							<div class="form-group">
							  <label class="col-form-label" for="inputDefault">Telepon</label>
							  <input type="text" class="form-control" id="inputDefault" value="XXXXXXXXXX">
							</div><br>
							<div class="form-group">
							  <label class="col-form-label" for="inputDefault">URL</label>
							  <input type="text" class="form-control" id="inputDefault" value="" placeholder="XXX">
							  <small class="form-text text-muted">Link URL Web</small>
							</div><br>
							<button type="submit" class="btn btn-primary">Submit</button>
						</fieldset>
					</form>
					<?php } else if(isset($_POST['submit3'])){  ?>
					<form>
						<fieldset>
							<center><h4>Form Insert Author</h4></center><br>
							<div class="form-group">
							  <label class="col-form-label" for="inputDefault">Id Author</label>
							  <input type="text" class="form-control" id="inputDefault" value="" placeholder="XXX">
							  <small class="form-text text-muted">Isikan id_Author dengan nomor</small>
							</div><br>
							<div class="form-group">
							  <label class="col-form-label" for="inputDefault">Nama</label>
							  <input type="text" class="form-control" id="inputDefault" value="">
							</div><br>
							<div class="form-group">
							  <label for="exampleTextarea">Alamat</label>
							  <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
							</div>
							<div class="form-group">
							  <label class="col-form-label" for="inputDefault">URL</label>
							  <input type="text" class="form-control" id="inputDefault" value="www.example.com">
							  <small class="form-text text-muted">Link URL Web</small>
							</div><br>
							<button type="submit" class="btn btn-primary">Submit</button>
						</fieldset>
					</form>
					<?php } else if(isset($_POST['submit4'])){  ?>
					<form>
						<fieldset>
							<center><h4>Form Insert Customer</h4></center><br>
							<div class="form-group">
							  <label class="col-form-label" for="inputDefault">Id Customer</label>
							  <input type="text" class="form-control" id="inputDefault" value="" placeholder="XXX">
							  <small class="form-text text-muted">Isikan id_customer dengan nomor</small>
							</div><br>
							<div class="form-group row">
						      <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
						      <div class="col-sm-10">
						        <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="email@example.com">
						      </div>
						    </div>
							<div class="form-group">
							  <label class="col-form-label" for="inputDefault">Nama</label>
							  <input type="text" class="form-control" id="inputDefault" value="">
							</div><br>
							<div class="form-group">
							  <label class="col-form-label" for="inputDefault">Telepon</label>
							  <input type="text" class="form-control" id="inputDefault" value="XXXXXXXXXX">
							</div><br>
							<div class="form-group">
							  <label for="exampleTextarea">Alamat</label>
							  <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
							</div>
							<div class="form-group">
						      <label for="exampleInputPassword1">Password</label>
						      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						    </div><br>
							<button type="submit" class="btn btn-primary">Submit</button>
						</fieldset>
					</form>
					<?php } else if(isset($_POST['submit5'])){  ?>
					<form>
						<fieldset>
							<center><h4>Form Insert Shopping Basket</h4></center><br>
							<div class="form-group">
							  <label class="col-form-label" for="inputDefault">Id Shopping Basket</label>
							  <input type="text" class="form-control" id="inputDefault" value="" placeholder="XXX">
							  <small class="form-text text-muted">Isikan id_ShoppingBasket dengan nomor</small>
							</div><br>
							<div class="form-group">
							  <label class="col-form-label" for="inputDefault">Id Customer</label>
							  <input type="text" class="form-control" id="inputDefault" value="" placeholder="XXX">
							  <small class="form-text text-muted">Isikan id_customer dengan nomor</small>
							</div><br>
							<button type="submit" class="btn btn-primary">Submit</button>
						</fieldset>
					</form>
					<?php } else if(isset($_POST['submit6'])){  ?>
					<form>
						<fieldset>
							<center><h4>Form Insert Shopping Basket Book</h4></center><br>
							<div class="form-group">
							  <label class="col-form-label" for="inputDefault">Id Shopping Basket Book</label>
							  <input type="text" class="form-control" id="inputDefault" value="" placeholder="XXX">
							  <small class="form-text text-muted">Isikan id_ShoppingBasketBook dengan nomor</small>
							</div><br>
							<div class="form-group">
							  <label class="col-form-label" for="inputDefault">Id Shopping Basket</label>
							  <input type="text" class="form-control" id="inputDefault" value="" placeholder="XXX">
							  <small class="form-text text-muted">Isikan id_ShoppingBasket dengan nomor</small>
							</div><br>
							<div class="form-group">
							  <label class="col-form-label" for="inputDefault">Id Book</label>
							  <input type="text" class="form-control" id="inputDefault" value="">
							  <small class="form-text text-muted">Isikan id_book dengan id_book data terakhir + 1</small>
							</div><br>
							<div class="form-group">
							  <label class="col-form-label" for="inputDefault">Jumlah Barang</label>
							  <input type="text" class="form-control" id="inputDefault" value="">
							</div><br>
							<button type="submit" class="btn btn-primary">Submit</button>
						</fieldset>
					</form>
					<?php } ?>
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