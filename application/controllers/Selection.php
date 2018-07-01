<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Selection extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    session_start();
  }

  function index()
  {
    $name = $_GET['name'];

    $ch = curl_init(API . $name);

    $token = $_SESSION['token'] ?? '';

    $authorization = AUTH . $token;

    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json", $authorization, "Accept: application/json"));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $data = json_decode(curl_exec($ch));

    curl_close($ch);

    // mengonversikan objek ke array
    $array = [];
    foreach ($data as $key) {
      array_push($array, get_object_vars($key));
    }
    $data = $array;

    $i = 0;
    foreach ($data as $key) {
      $i++;
      echo '<option value="' . array_values($key)[0] . '">' . $key['name'] . '</option>';
      if ($i == 100) {
        break;
      }
    }
  }
}
