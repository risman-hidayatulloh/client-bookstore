<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart_user extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $_SESSION['cart_user'] = '';
    }

    /* public function index()
    {
        $data['title'] = 'Cart_user';
        $this->load->view('global/header', $data);
        $this->load->view('global/cart_user');
        $this->load->view('global/footer');
    } */

    function reset()
  {
    $_SESSION['httpcode'] = '';
    $_SESSION['httpmessage'] = '';
  }

  function viewData($data)
  {
    $data['title'] = 'Cart_user';
    $this->load->view('global/header', $data);
    $this->load->view('global/cart_user');
    $this->load->view('global/footer');
  }

	public function index()
	{
    if (!isset($_SESSION['token'])) {
     redirect(site_url('login'));
    }

    if (isset($_POST['Cart_user'])) {
      redirect(site_url('Cart_user'));
    } else if (isset($_POST['author'])) {
      redirect(site_url('author'));
    } else if (isset($_POST['bookcategory'])) {
      redirect(site_url('bookcategory'));
    } else if (isset($_POST['customer'])) {
      redirect(site_url('customer'));
    } else if (isset($_POST['publisher'])) {
      redirect(site_url('publisher'));
    } else {
      $this->get('all', null);
    }
	}

    public function get($key, $value = null)
  {
    $ch = curl_init(API . "customer");

    $authorization = AUTH . $_SESSION['token'];

    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json", $authorization, "Accept: application/json"));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $data['customer'] = json_decode(curl_exec($ch));

    $_SESSION['httpcode'] = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);

    if ($_SESSION['httpcode'] == 200) {
      // menyaring hasil pencarian
      $customers = [];
      if ($key == 'title' || $key == 'id_customer') {
        // mengonversi array of objek ke array of array
        foreach ($data['customer'] as $customer) {
          var_dump($customer);
          $customer = get_object_vars($customer);
          // jika yang dicarinya mengandung kata masukan
          if (stripos($customer[$key], $value) !== false) {
            // memasukkan data yang dicari ke array baru
            array_push($customers, $customer);
          }
        }
      } elseif ($key == 'all') {
        // mengonversi array of objek ke array of array
        foreach ($data['customer'] as $customer) {
          $customer = get_object_vars($customer);
          // memasukkan data yang dicari ke array baru
          array_push($customers, $customer);
        }
      } else {
        // mengonversi array of objek ke array of array
        foreach ($data['customer'] as $customer) {
          $customer = get_object_vars($customer);
          // jika sesuai dengan permintaan
          if ($customer[$key] == $value) {
            // memasukkan data yang dicari ke array baru
            array_push($customers, $customer);
          }
        }
      }
      $data['customer'] = $customers;
    }

    // menampilkan data
    $this->viewData($data);

    $this->reset();
  }

  public function getDetails($id)
  {
    $ch = curl_init(API . "shoppingbasket/detail");

    $authorization = AUTH . $_SESSION['token'];

    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json", $authorization, "Accept: application/json"));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $data = json_decode(curl_exec($ch));

    curl_close($ch);

    $i = 1;
    $j = 1;
    $csh = 0; // current Id_ShoppingBasket
    $isnull = true;
    foreach ($data as $value) {
      if ($value->id_shoppingbasketbook == $id) {
        $isnull = false;

        if ($value->id_ShoppingBasket != $csh) {
          $csh = $value->id_ShoppingBasket;
          $j = 1;
          echo "<h6>Transaction No." . $i++ . "</h6>";
        }

        echo "<table class='table table-hover table-striped table-light table-bordered'>";
        echo "<thead>";
        echo "<tr><th colspan='2'>Book No." . $j++ . "</th></tr>";
        echo "</thead>";
        foreach ($value as $k => $v) {
          if (stripos($k, 'id_') === false) {
            echo "<tr>";
            echo "<th width='100'>" . ucfirst($k) . "</th>";
            if ($k == 'picture') {
              echo "<td><img src='" . $v . "' alt='No Preview' height='150'></td>";
            } else {
              echo "<td>" . $v . "</td>";
            }
            echo "</tr>";
          }
        }
        echo "</table>";

      }
    }
    if ($isnull) {
      echo "No data.";
    }
  }
}
