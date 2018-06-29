	<nav class="container">	
		<nav class="jumbotron">
			<div class="row">
				<div class="col-md-5"></div>
				<div class="col-md-2">
					<center>
						<h3>Daftar</h3>
					</center>
					<hr class="my-3">
				</div>
				<div class="col-md-5"></div>
			</div>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<center>
						<div class="card text-white bg-dark mb-4" style="max-width: 100rem;">
						  <div class="card-body">
						    <form method="post" action="<?php echo site_url('register/insert') ?>">
						    	<div class="form-group">
						    		<div class="row">
							    		<div class="col-md-3">
							    			<label>Nama Lengkap:</label>	
							    		</div>
							    		<div class="col-md-9">
								      	<input type="text" name="new-name" class="form-control"><br>
								      </div>
						    		</div>
						    		<div class="row">
							    		<div class="col-md-3">
							    			<label>Email:</label>
							    		</div>
							    		<div class="col-md-9">
								      	<input type="text" name="new-email" class="form-control"><br>
								      </div>
						    		</div>
						    		<div class="row">
							    		<div class="col-md-3">
							    			<label>Alamat:</label>
							    		</div>
							    		<div class="col-md-9">
							    			<textarea rows="4" cols="50" name="new-address" class="form-control">
							    			</textarea><br>
						    		</div>
						    		<div class="col-md-3">
							    		<label>Nomor Telepon:</label>
							    	</div>
							    	<div class="col-md-9">
								    	<input type="text" name="new-phone" class="form-control"><br>  	
						    		</div>
						    		<div class="col-md-3">
							    		<label>Kabupaten/Kota:</label>
							    	</div>
							    	<div class="col-md-9">
							    		<select name="new-KabupatenKota" class="form-control">
							    			<?php foreach ($kab as $value) {?>
							    			<option value="<?php echo $value->id_KabupatenKota; ?>"><?php echo $value->name; ?></option>
							    			<?php } ?>
							    		</select><br> 	
						    		</div>
						    		<div class="col-md-3">
							    		<label>Kecamatan:</label>
							    	</div>
							    	<div class="col-md-9">
							    		<select name="new-Kecamatan" class="form-control">
							    			<?php foreach ($kec as $value) {?>
							    			<option value="<?php echo $value->id_Kecamatan; ?>"><?php echo $value->name; ?></option>
							    			<?php } ?>
							    		</select><br>  	
						    		</div>
						    		<div class="col-md-3">
							    		<label>Kelurahan:</label>
							    	</div>
							    	<div class="col-md-9">
							    		<select name="new-Kelurahan" class="form-control">
							    			<?php foreach ($kel as $value) {?>
							    			<option value="<?php echo $value->id_Kelurahan; ?>"><?php echo $value->name; ?></option>
							    			<?php } ?>
							    		</select><br> 	
						    		</div>
						    		<div class="col-md-3">
							    		<label>Provinsi:</label>
							    	</div>
							    	<div class="col-md-9">
							    		<select name="new-Provinsi" class="form-control">
							    			<?php foreach ($prov as $value) {?>
							    			<option value="<?php echo $value->id_Provinsi; ?>"><?php echo $value->name; ?></option>
							    			<?php } ?>
							    		</select><br>  	
						    		</div>
						    		<div class="col-md-3">
							    			<label>Password:</label>
							    		</div>
							    		<div class="col-md-9">
								      		<input type="password" name="pass" class="form-control"><br>
								      	
						    		</div>   		
							 
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