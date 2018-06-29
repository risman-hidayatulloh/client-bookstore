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
						  <input class="list-group-item list-group-item-action" type="submit" name="submit7" value="Tambah Tabel">
						  </input>
						</form>
						  <a href="<?php echo site_url('Welcome/tambah') ?>" class="list-group-item list-group-item-action">Tambah Data</a>
					</div>
				</div>
				<div class="col-md-9">
					<?php if(isset($_POST['submit1'])){ ?>
						<h2>Book</h2>
						<div style="overflow-x:auto;">
						<table class="table table-hover">
						  <thead>
						       <tr class="table-warning">
								  <td scope="row">No</td>
							      <td>Id_Book</td>
							      <td>ISBN</td>
							      <td>Id_Publisher</td>
							      <td>Id_Author</td>
							      <td>Year</td>
							      <td>Title</td>
							      <td>Price</td>
							      <td>Gambar</td>
							      <td>Edit</td>
							      <td>Hapus</td>
							    </tr>
						  </thead>
						  <tbody>
						  	<?php $i = 0;
							if($book != null){				
								foreach($book as $data){ ?>
						  	<tr class="table-light">
						      <th scope="row"><?php echo $i+1; ?></th>
						      <td><?php echo $data->Id_Book ?></td>
						      <td><?php echo $data->ISBN ?></td>
						      <td><?php echo $data->Id_Publisher ?></td>
						      <td><?php echo $data->Id_Author ?></td>
						      <td><?php echo $data->Year ?></td>
						      <td><?php echo $data->Title ?></td>
						      <td><?php echo $data->Price ?></td>
						      <td><?php echo $data->Gambar ?></td>
						      <td>
						      	<a href=""><button type="button" class="btn btn-info" value="edit" name="edit">Edit</button></a>
						      </td>
						      <td>
						      	<a href=""><button type="button" class="btn btn-danger" value="hapus" name="hapus">Hapus</button></a>
						      </td>
						    </tr>
						    <?php $i++; } } ?>
						  </tbody>
						</table> 
						</div>
					<?php }else if(isset($_POST['submit2'])){ ?>
						<h2>Publisher</h2>
						<div style="overflow-x:auto;">
						<table class="table table-hover">
						  <thead>
						       <tr class="table-warning">
							      <td scope="row">No</td>
							      <td>Id_Publisher</td>
							      <td>Nama</td>
							      <td>Alamat</td>
							      <td>Telepon</td>
							      <td>URL</td>
							      <td>Edit</td>
							      <td>Hapus</td>
							    </tr>
						  </thead>
						  <tbody>
						  	<?php $i = 0;
							if($pub != null){				
								foreach($pub as $data){ ?>
						  	<tr class="table-light">
						      <th scope="row"><?php echo $i+1; ?></th>
						      <td><?php echo $data->Id_Publisher ?></td>
						      <td><?php echo $data->Name ?></td>
						      <td><?php echo $data->Address ?></td>
						      <td><?php echo $data->Phone ?></td>
					     	  <td><?php echo $data->URL ?></td>
					     	  <td>
						      	<a href=""><button type="button" class="btn btn-info" value="edit" name="edit">Edit</button></a>
						      </td>
						      <td>
						      	<a href=""><button type="button" class="btn btn-danger" value="hapus" name="hapus">Hapus</button></a>
						      </td>
						    </tr>
						    <?php $i++;} } ?>
						  </tbody>
						</table> 
						</div>
					<?php }else if(isset($_POST['submit3'])){ ?>
						<h2>Author</h2>
						<div style="overflow-x:auto;">
						<table class="table table-hover">
						  <thead>
						       <tr class="table-warning">
							      <td scope="row">No</td>
							      <td>Id_Author</td>
							      <td>Nama</td>
							      <td>Alamat</td>
							      <td>URL</td>
							      <td>Edit</td>
							      <td>Hapus</td>
							    </tr>
						  </thead>
						  <tbody>
						  	<?php $i = 0;
							if($aut != null){				
								foreach($aut as $data){ ?>
						  	<tr class="table-light">
						      <th scope="row"><?php echo $i+1; ?></th>
						      <td><?php echo $data->Id_Author ?></td>
						      <td><?php echo $data->Name; ?></td>
						      <td><?php echo $data->Address ?></td>
					      	  <td><?php echo $data->URL ?></td>
					      	  <td>
						      	<a href=""><button type="button" class="btn btn-info" value="edit" name="edit">Edit</button></a>
						      </td>
						      <td>
						      	<a href=""><button type="button" class="btn btn-danger" value="hapus" name="hapus">Hapus</button></a>
						      </td>
						    </tr>
						    <?php $i++; } } ?>
						  </tbody>
						</table> 
						</div>
					<?php }else if(isset($_POST['submit4'])){ ?>
						<h2>Customer</h2>
						<div style="overflow-x:auto;">
						<table class="table table-hover">
						  <thead>
						       <tr class="table-warning">
							      <td scope="row">No</td>
							      <td>Id_Customer</td>
							      <td>Email</td>
							      <td>Nama</td>
							      <td>Telepon</td>
							      <td>Alamat</td>
							      <td>Password</td>
							      <td>Edit</td>
							      <td>Hapus</td>
							    </tr>
						  </thead>
						  <tbody>
						  	<?php $i = 0;
						  	if($cus != NULL){
						  		foreach($cus as $key){ ?>
						  	<tr class="table-light">
						      <th scope="row"><?php echo $i+1; ?></th>
						      <td><?php echo $key->Id_Customer ?></td>
						      <td><?php echo $key->Email ?></td>
						      <td><?php echo $key->Name ?></td>
						      <td><?php echo $key->Phone ?></td>
						      <td><?php echo $key->Address ?></td>
						      <td><?php echo $key->Password ?></td>
						      <td>
						      	<a href=""><button type="button" class="btn btn-info" value="edit" name="edit">Edit</button></a>
						      </td>
						      <td>
						      	<a href=""><button type="button" class="btn btn-danger" value="hapus" name="hapus">Hapus</button></a>
						      </td>
						    </tr>
						    <?php $i++; } } ?>
						  </tbody>
						</table>
						</div> 
					<?php }else if(isset($_POST['submit5'])){ ?>
						<h2>Shopping Basket</h2>
						<div style="overflow-x:auto;">
						<table class="table table-hover">
						  <thead>
						       <tr class="table-warning">
							      <td scope="row">No</td>
							      <td>Id_ShoppingBasket</td>
							      <td>Id_Customer</td>
							      <td>Edit</td>
							      <td>Hapus</td>
							    </tr>
						  </thead>
						  <tbody>
						  	<?php $i = 0;
						  	if($sb != NULL){
						  		foreach($sb as $key){ ?>
						  	<tr class="table-light">
						      <th scope="row"><?php echo $i+1; ?></th>
						      <td><?php echo $key->Id_ShoppingBasket ?></td>
						      <td><?php echo $key->Id_Customer ?></td>
						      <td>
						      	<a href=""><button type="button" class="btn btn-info" value="edit" name="edit">Edit</button></a>
						      </td>
						      <td>
						      	<a href=""><button type="button" class="btn btn-danger" value="hapus" name="hapus">Hapus</button></a>
						      </td>
						    </tr>
						    <?php $i++; } } ?>
						  </tbody>
						</table> 
						</div>
					<?php }else if(isset($_POST['submit6'])){ ?>
						<h2>Shopping Basket Book</h2>
						<div style="overflow-x:auto;">
						<table class="table table-hover">
						  <thead>
						       <tr class="table-warning">
							      <td scope="row">No</td>
							      <td>Id_ShoppingBasketBook</td>
							      <td>Id_ShoppingBasket</td>
							      <td>Id_Book</td>
							      <td>Count</td>
							      <td>Edit</td>
							      <td>Hapus</td>
							    </tr>
						  </thead>
						  <tbody>
						  	<?php $i = 0;
							if($sbb != null){				
								foreach($sbb as $data){ ?>
						  	<tr class="table-light">
						      <th scope="row"><?php echo $i+1; ?></th>
						      <td><?php echo $data->Id_ShoppingBasketBook ?></td>
						      <td><?php echo $data->Id_ShoppingBasket ?></td>
						      <td><?php echo $data->Id_Book ?></td>
						      <td><?php echo $data->Count ?></td>
						      <td>
						      	<a href=""><button type="button" class="btn btn-info" value="edit" name="edit">Edit</button></a>
						      </td>
						      <td>
						      	<a href=""><button type="button" class="btn btn-danger" value="hapus" name="hapus">Hapus</button></a>
						      </td>
						    </tr>
						    <?php $i++; } } ?>
						  </tbody>
						</table>
						</div> 
					<?php }else if(isset($_POST['submit7'])){ ?>
						<h2>Tambah Tabel</h2>
						
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