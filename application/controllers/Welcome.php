<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//require(APPPATH.'/libraries/REST_Controller.php');

class Welcome extends CI_Controller {

	public function index()
	{
		redirect(site_url('Welcome/Home'));
	}
	public function Home(){
		$this->load->view('home');
	}
	/////////////////////////////////////
	/*function user_get()
    {
        if(!$this->get('id'))
        {
            $this->response(NULL, 400);
        }
 
        $user = $this->user_model->get( $this->get('id') );
         
        if($user)
        {
            $this->response($user, 200); // 200 being the HTTP response code
        }
 
        else
        {
            $this->response(NULL, 404);
        }
    }
     
    function user_post()
    {
        $result = $this->user_model->update( $this->post('id'), array(
            'name' => $this->post('name'),
            'email' => $this->post('email')
        ));
         
        if($result === FALSE)
        {
            $this->response(array('status' => 'failed'));
        }
         
        else
        {
            $this->response(array('status' => 'success'));
        }
         
    }
     
    function users_get()
    {
        $users = $this->user_model->get_all();
         
        if($users)
        {
            $this->response($users, 200);
        }
 
        else
        {
            $this->response(NULL, 404);
        }
    }*/
	/////////////////////////////////////

	
	public function login(){
		// if ($this->session->userdata('logged_in') && $this->session->userdata('username')!='admin') {
		// 	redirect(site_url('Welcome/loginIn'));
		// }else{
			$this->load->view('login');
		// }
	}

	public function prosesLogin(){
		// $data['username'] = $this->input->post('username');
		// $data['password'] = $this->input->post('password');
		// $id=$this->UserModel->login($data);
		// if ($id != null) {
		// 	$result = $id->result_array();
		// 	$_SESSION['nama'] = $result[0]['nama'];
		// 	$_SESSION['username'] = $result[0]['username'];
		// 	$_SESSION['logged_in'] = true;

		// 	if ($_SESSION['username'] == 'admin') {
		// 		//redirect(site_url('Admin'));
		// 		$this->load->view('Admin');

		// 	}else{
		 		$this->loginIn();
		// 	}
		// }else{
		// 	//ned to show something the user about wrong login
		// 	$this->load->view('logErr');
		// }
	}

	public function loginIn(){
		// if ($_SESSION['logged_in']) {
		 		$this->load->view('homeIn');
		// 	}else{
		// 		redirect(site_url('Welcome/'));
		// 	}
		// }
	}

	public function regist(){
		$this->load->view('regist');
	}

	public function prosesRegis(){
		// $data['nama'] = $this->input->post('nama');
		// $data['username'] = $this->input->post('username');
		// $data['password'] = $this->input->post('password');
		// $this->UserModel->register($data);
		// redirect(site_url('Welcome/'));
	}	

	public function Detail(){
		$this->load->view('detail/detailBarang1');
	}

	public function DetailIn(){
		$this->load->view('detail/In/detailBarang_userIn');
	}

	public function Keranjang(){
		$this->load->view('cart_userIn');
	}

	public function Profile(){
		$this->load->view('profileUser');
	}

	public function aboutIn(){
		$this->load->view('aboutIn');
	}

	public function about(){
		$this->load->view('about');
	}

	public function Search(){
		$this->load->view('search');
	}

	public function SearchIn(){
		$this->load->view('searchIn');
	}	

	public function logout(){
		// foreach ($_SESSION as $key => $value) {
		// 	$_SESSION[$key] = null;
		// }
		 $this->load->view('home');
	}

}
