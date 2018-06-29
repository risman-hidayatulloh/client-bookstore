<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    $_SESSION['login'] = '';
  }

  public function index()
  {
    $data['title'] = 'login';
    $this->load->view('global/header', $data);
    $this->load->view('global/login');
    $this->load->view('global/footer');
  }

  public function loginProcess()
  {
    $ch = curl_init(API . "token");

    $body = json_encode(
      array(
        'email' => $this->input->post('email'),
        'password' => $this->input->post('password')
      )
    );

    $_SESSION['login'] = $body;

    curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $token = curl_exec($ch);

    curl_close($ch);

    $_SESSION['token'] = json_decode($token)->token ?? '';
    $_SESSION['httpcode'] = '';
    $_SESSION['httpmessage'] = '';

    if (!empty($_SESSION['token'])) {
      redirect(site_url('client'));
    } else {
      redirect(site_url('login'));
    }
  }
}
