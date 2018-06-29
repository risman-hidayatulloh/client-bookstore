<!-- Judul Halaman -->
<br><h2><center>Keranjang</center></h2><br><br>
<div class="container">
<div class="table-responsive">
  <table class="table table-hover table-striped table-light table-bordered" style="margin-top:20px">

    <thead>
      <tr>
        <th style="width:50px;text-align:center">No</th>
        <th>Picture</th>
        <th>Title</th>
        <th>Count</th>
        <th>Price</th>
        <th style="width:130px">Action</th>
      </tr>
    </thead>

    <tbody>

      <?php if (is_array($customer) && !empty($customer)) {
        $no = 1;
        foreach ($customer as $value): ?>

        <tr>

          <td style="text-align:center;font-weight:bold"><?php echo $no++ ?></td>
          <td><?php echo $value['price'] ?></td>
          <td><?php echo $value['count'] ?></td>
          <td><?php echo $value['picture'] ?></td>


        </tr>

      <?php endforeach; } else { ?>

        <tr>
          <td colspan="6">No data.</td>
        </tr>

      <?php } ?>

    </tbody>

  </table>
</div>
</div>

<script type="text/javascript">
  function getDetails() {
    $('#detail-list').html('Loading...');
    var url = "<?php echo site_url('customer/getDetails/') ?>" + $('#detail-id').html();
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", url, true);
    xhttp.send();
    xhttp.onreadystatechange = function() {
      $('#detail-list').html(this.responseText);
    };
  }
</script>