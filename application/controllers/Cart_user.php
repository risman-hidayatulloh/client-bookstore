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
    if (empty($_SESSION['login'])) {
     redirect(site_url('login'));
    }else {
      $data['shoppingbasketbook'] = $this->getshoppingbasketbook('all', null);
      $data['shoppingbasket'] = $this->getshoppingbasket('all', null);
      $data['book'] = $this->getbook('all', null);
      $data['login'] = $this->getlogin('all', null);
      
      // menampilkan data
      $this->viewData($data);
    }
	}

    public function getshoppingbasketbook($key, $value = null)
  {
    $ch = curl_init(API . "shoppingbasketbook");

    $authorization = AUTH . $_SESSION['token'];

    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json", $authorization, "Accept: application/json"));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $data['shoppingbasketbook'] = json_decode(curl_exec($ch));

    $_SESSION['httpcode'] = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);

    if ($_SESSION['httpcode'] == 200) {
      // menyaring hasil pencarian
      $shoppingbasketbooks = [];
      if ($key == 'title' || $key == 'id_shoppingbasketbook') {
        // mengonversi array of objek ke array of array
        foreach ($data['shoppingbasketbook'] as $shoppingbasketbook) {
          var_dump($shoppingbasketbook);
          $shoppingbasketbook = get_object_vars($shoppingbasketbook);
          // jika yang dicarinya mengandung kata masukan
          if (stripos($shoppingbasketbook[$key], $value) !== false) {
            // memasukkan data yang dicari ke array baru
            array_push($shoppingbasketbooks, $shoppingbasketbook);
          }
        }
      } elseif ($key == 'all') {
        // mengonversi array of objek ke array of array
        foreach ($data['shoppingbasketbook'] as $shoppingbasketbook) {
          $shoppingbasketbook = get_object_vars($shoppingbasketbook);
          // memasukkan data yang dicari ke array baru
          array_push($shoppingbasketbooks, $shoppingbasketbook);
        }
      } else {
        // mengonversi array of objek ke array of array
        foreach ($data['shoppingbasketbook'] as $shoppingbasketbook) {
          $shoppingbasketbook = get_object_vars($shoppingbasketbook);
          // jika sesuai dengan permintaan
          if ($shoppingbasketbook[$key] == $value) {
            // memasukkan data yang dicari ke array baru
            array_push($shoppingbasketbooks, $shoppingbasketbook);
          }
        }
      }
      $data['shoppingbasketbook'] = $shoppingbasketbooks;

      return $shoppingbasketbooks;
    }

    

    $this->reset();
  }

   public function getshoppingbasket($key, $value = null)
  {
    $ch = curl_init(API . "shoppingbasket");

    $authorization = AUTH . $_SESSION['token'];

    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json", $authorization, "Accept: application/json"));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $data['shoppingbasket'] = json_decode(curl_exec($ch));

    $_SESSION['httpcode'] = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);

    if ($_SESSION['httpcode'] == 200) {
      // menyaring hasil pencarian
      $shoppingbaskets = [];
      if ($key == 'title' || $key == 'id_shoppingbasket') {
        // mengonversi array of objek ke array of array
        foreach ($data['shoppingbasket'] as $shoppingbasket) {
          var_dump($shoppingbasket);
          $shoppingbasket = get_object_vars($shoppingbasket);
          // jika yang dicarinya mengandung kata masukan
          if (stripos($shoppingbasket[$key], $value) !== false) {
            // memasukkan data yang dicari ke array baru
            array_push($shoppingbaskets, $shoppingbasket);
          }
        }
      } elseif ($key == 'all') {
        // mengonversi array of objek ke array of array
        foreach ($data['shoppingbasket'] as $shoppingbasket) {
          $shoppingbasket = get_object_vars($shoppingbasket);
          // memasukkan data yang dicari ke array baru
          array_push($shoppingbaskets, $shoppingbasket);
        }
      } else {
        // mengonversi array of objek ke array of array
        foreach ($data['shoppingbasket'] as $shoppingbasket) {
          $shoppingbasket = get_object_vars($shoppingbasket);
          // jika sesuai dengan permintaan
          if ($shoppingbasket[$key] == $value) {
            // memasukkan data yang dicari ke array baru
            array_push($shoppingbaskets, $shoppingbasket);
          }
        }
      }
      $data['shoppingbasket'] = $shoppingbaskets;

      return $shoppingbaskets;
    }

    $this->reset();
  }

   public function getbook($key, $value = null)
  {
    $ch = curl_init(API . "book");

    $authorization = AUTH . $_SESSION['token'];

    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json", $authorization, "Accept: application/json"));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $data['book'] = json_decode(curl_exec($ch));

    $_SESSION['httpcode'] = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);

    if ($_SESSION['httpcode'] == 200) {
      // menyaring hasil pencarian
      $books = [];
      if ($key == 'title' || $key == 'id_book') {
        // mengonversi array of objek ke array of array
        foreach ($data['book'] as $book) {
          var_dump($book);
          $book = get_object_vars($book);
          // jika yang dicarinya mengandung kata masukan
          if (stripos($book[$key], $value) !== false) {
            // memasukkan data yang dicari ke array baru
            array_push($books, $book);
          }
        }
      } elseif ($key == 'all') {
        // mengonversi array of objek ke array of array
        foreach ($data['book'] as $book) {
          $book = get_object_vars($book);
          // memasukkan data yang dicari ke array baru
          array_push($books, $book);
        }
      } else {
        // mengonversi array of objek ke array of array
        foreach ($data['book'] as $book) {
          $book = get_object_vars($book);
          // jika sesuai dengan permintaan
          if ($book[$key] == $value) {
            // memasukkan data yang dicari ke array baru
            array_push($books, $book);
          }
        }
      }
      $data['book'] = $books;

      return $books;
    }

    $this->reset();
  }

  public function getlogin($key, $value = null)
  {
    $ch = curl_init(API . "login");

    $authorization = AUTH . $_SESSION['token'];

    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json", $authorization, "Accept: application/json"));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $data['login'] = json_decode(curl_exec($ch));

    $_SESSION['httpcode'] = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);

    if ($_SESSION['httpcode'] == 200) {
      // menyaring hasil pencarian
      $logins = [];
      if ($key == 'title' || $key == 'id_login') {
        // mengonversi array of objek ke array of array
        foreach ($data['login'] as $login) {
          var_dump($login);
          $login = get_object_vars($login);
          // jika yang dicarinya mengandung kata masukan
          if (stripos($login[$key], $value) !== false) {
            // memasukkan data yang dicari ke array baru
            array_push($logins, $login);
          }
        }
      } elseif ($key == 'all') {
        // mengonversi array of objek ke array of array
        foreach ($data['login'] as $login) {
          $login = get_object_vars($login);
          // memasukkan data yang dicari ke array baru
          array_push($logins, $login);
        }
      } else {
        // mengonversi array of objek ke array of array
        foreach ($data['login'] as $login) {
          $login = get_object_vars($login);
          // jika sesuai dengan permintaan
          if ($login[$key] == $value) {
            // memasukkan data yang dicari ke array baru
            array_push($logins, $login);
          }
        }
      }
      $data['login'] = $logins;

      return $logins;
    }

    $this->reset();
  }
}
