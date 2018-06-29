<!-- Judul Halaman -->
<br><h2><center>Book Store</center></h2>

	<nav class="container">
		<nav class="jumbotron">
			<div class="row">
				<?php if (is_array($book) && !empty($book)) {
				$no = 1;
				foreach ($book as $value) : ?>
				<div class="col-md-4">
					<div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
					  <div class="card-body">
					    <img style="height: 300px; width: 100%; display: block;" src="<?php echo $value['picture'] ?>" alt="No Preview"><br>
					    <center>
						    <h6 class="card-text" style="color:white;"><?php echo $value['title'] ?></h6>
						    <hr class="my-4">
					    </center>
						<p class="card-text text-right"><b>Rp<td><?php echo $value['price']; ?></td></b></p>
						<!-- <?php $id = $data->Id_Book; ?> -->
					    <a class="btn btn-info" href="<?php echo site_url('client/detail/') . $value['id_Book']; ?>" style="color: white; width: 100%;">Lihat Selengkapnya>></a>
					  </div>
					</div>
				</div>
				<?php endforeach;
		} ?>

			</div>
		</nav>
	</nav>
