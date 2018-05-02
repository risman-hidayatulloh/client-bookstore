<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		redirect(site_url('Welcome/Home'));
	}
	public function Home(){
		$this->load->view('home');
	}
	public function login(){
		$this->load->view('login');
	}

	public function regist(){
		$this->load->view('regist');
	}

	/*public function userHomeIn(){

	}*/

}
