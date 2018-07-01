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
							    		<label>Provinsi:</label>
							    	</div>
							    	<div class="col-md-9">
							    		<select name="new-Provinsi" id="new_Provinsi" class="form-control">
							    			
							    		</select><br>  	
						    		</div>
						    		<div class="col-md-3">
							    		<label>Kabupaten/Kota:</label>
							    	</div>
							    	<div class="col-md-9">
							    		<select name="new-KabupatenKota" id="new_Kabupaten" class="form-control">
							    			
							    		</select><br> 	
						    		</div>
						    		<div class="col-md-3">
							    		<label>Kecamatan:</label>
							    	</div>
							    	<div class="col-md-9">
							    		<select name="new-Kecamatan" id="new_Kecamatan" class="form-control">
							    			
							    		</select><br>  	
						    		</div>
						    		<div class="col-md-3">
							    		<label>Kelurahan:</label>
							    	</div>
							    	<div class="col-md-9">
							    		<select name="new-Kelurahan" id="new_Kelurahan" class="form-control">
							    			
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

	<script type="text/javascript">
		
	  $("#new_Provinsi").one("click", function() {
	    $("#new_Provinsi").html("<option>Loading...</option>");
	    var xhttp;
	    xhttp = new XMLHttpRequest();
	    xhttp.open("GET", "<?php echo site_url('selection') ?>?name=provinsi", true);
	    xhttp.send();
	    xhttp.onreadystatechange = function() {
	      $("#new_Provinsi").html(this.responseText);
	    };
	  });

	  $("#new_Kabupaten").one("click", function() {
	    $("#new_Kabupaten").html("<option>Loading...</option>");
	    var xhttp;
	    xhttp = new XMLHttpRequest();
	    xhttp.open("GET", "<?php echo site_url('selection') ?>?name=kabupatenkota", true);
	    xhttp.send();
	    xhttp.onreadystatechange = function() {
	      $("#new_Kabupaten").html(this.responseText);
	    };
	  });

	  $("#new_Kecamatan").one("click", function() {
	    $("#new_Kecamatan").html("<option>Loading...</option>");
	    var xhttp;
	    xhttp = new XMLHttpRequest();
	    xhttp.open("GET", "<?php echo site_url('selection') ?>?name=kecamatan", true);
	    xhttp.send();
	    xhttp.onreadystatechange = function() {
	      $("#new_Kecamatan").html(this.responseText);
	    };
	  });

	  $("#new_Kelurahan").one("click", function() {
	    $("#new_Kelurahan").html("<option>Loading...</option>");
	    var xhttp;
	    xhttp = new XMLHttpRequest();
	    xhttp.open("GET", "<?php echo site_url('selection') ?>?name=kelurahan", true);
	    xhttp.send();
	    xhttp.onreadystatechange = function() {
	      $("#new_Kelurahan").html(this.responseText);
	    };
	  });


	</script>