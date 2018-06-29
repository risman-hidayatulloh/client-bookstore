<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
  function __construct()
  {
    parent::__construct();
  }

	public function index()
	{
    session_start();
    session_unset($_SESSION['token']);
    session_unset($_SESSION['httpcode']);
    session_unset($_SESSION['httpmessage']);
    redirect(site_url('login'));
	}
}
