<!-- Judul Halaman -->
<br><h2><center>Keranjang</center></h2><br><br>
<div class="container">
<div class="table-responsive">
  <table class="table table-hover table-striped table-light table-bordered" style="margin-top:20px">

    <thead>
      <tr>
        <th style="width:50px;text-align:center">No</th>
        <th>Title</th>
        <th>Picture</th>
        <th>Price</th>
        <th>Count</th>
        <th style="width:130px">Action</th>
      </tr>
    </thead>

    <tbody>

      <?php if (is_array($shoppingbasketbook) && !empty($shoppingbasketbook)) {
        $no = 1;
        //var_dump($shoppingbasket);
        foreach ($shoppingbasketbook as $value):
          foreach ($book as $value2): 
          if ($value['id_Book'] == $value2['id_Book']) {
          
          
          
          ?>

        <tr>
          <td style="text-align:center;font-weight:bold"><?php echo $no++ ?></td>
          <td><?php echo $value2['title'] ?></td>
          <td><img style="height: 100px; width: 30%; display: block;" src="<?php echo $value2['picture'] ?>" alt="No Preview"><br></td>
          <td><?php echo $value2['price'] ?></td>
          <td><?php echo $value['count'] ?></td>
          <td><button class="btn btn-success">Delete</button></td>
        </tr>

      <?php } endforeach; endforeach; } else { ?>

        <tr>
          <td colspan="6">No data.</td>
        </tr>

      <?php } ?>

    </tbody>

  </table>
</div>
</div>