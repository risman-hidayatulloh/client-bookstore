<div class="container">
  <div class="jumbotron" class="mx-auto">
      <div class="row" class="mx-auto">
        <div class="col-md-4" align="center">
          <?php if (is_array($book) && !empty($book)) {
              foreach ($book as $value): ?>
              <img style="border: 1px solid #ddd; border-radius: 4px; padding: 5px; width: 300px; height: 300px;" src="<?php echo $value['picture'] ?>">
        </div>
        <div class="col-md-5">
          <h4>Deskripsi</h4>
          <p>Judul: <?php echo $value['title'] ?></p>
          <p>Tahun Terbit: <?php echo $value['year'] ?></p>
          <p>Kategory: <?php echo $value['name_Category'] ?></p>
        </div>
        <div class="col-md-3" align="center">
          <div style="border: 1px solid #ddd; border-radius: 4px; padding: 5px; width: 240px; height: 40px;">
            <h4><center>RP<?php echo $value['price'] ?>,-</center></h4>
            </div>
            <br>
            <!-- <button type="button" class="btn btn-primary btn-block" href="<?php echo site_url('client/keranjang/') . $value['id_Book']; ?>">+ Add To Cart</button>
            <br> -->
            <a class="btn btn-info" href="<?php echo site_url('client/keranjang/'). $value['id_Book'];?>" style="color: white; width: 100%;">+ Add To Cart</a>

            <div class="card border-secondary mb-3" style="max-width: 20rem;">
            <div class="card-header">Informasi Penerbit</div>
              <div class="card-body">
               <p class="card-text">Publisher - <?php echo $value['name_Publisher'] ?></p>
              </div>
          </div>
          <br>
      </div>
      <dir>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </dir>
        <?php endforeach; }?>
      </div>
</div>