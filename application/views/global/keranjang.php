<!-- Judul Halaman -->
<br><h2><center>Pesanan</center></h2><br><br>
<div class="container">
<div  class="row">
<?php if (is_array($book) && !empty($book)) {
    foreach ($book as $value): ?>
      <img style="border: 1px solid #8c8c8c; border-radius: 4px; padding: 3px;background-color: white;" class="post-thumb" src="<?php echo $value['picture'] ?>">
      <div class="col-md-7">
        <h4><?php echo $value['title'] ?></h4>
        <h5>RP<?php echo $value['price'] ?>,-</h5>
        <br>
        <form>
          <div class="form-group">
              <input type="number" id="number" value="0" />
          </div>
        </form>
      </div>

        <div class="col-md-2">
          <button type="button" class="btn btn-primary">Pesan</button>
        </div>
    </div>
  </div>
  <?php endforeach; }?>
</div>
</div>
<br><br><br>
