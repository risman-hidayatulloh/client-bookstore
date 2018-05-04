<?php 
	
	/**
	* UserModel.php
	*Model utuk user
	*/
	class UserModel extends CI_Model
	{
		var $api = "http://d9e6b284.ngrok.io/api/"
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('curl');
		}

		/////////////////////////////////////
		//pengecekan author berdasarkan data server
		public function CariAuthor($berdasarkan, $key){
			return json_decode($this->curl->simple_get->($this->api.'author'));
		}

		//pengecekan Publish berdasarkan data server
		public function CariPublish($berdasarkan, $key){
			return json_decode($this->curl->simple_get->($this->api.'publish'));
		}

		//pengecekan Book berdasarkan data server
		public function CariBook($berdasarkan, $key){
			return json_decode($this->curl->simple_get->($this->api.'book'));
		}

		//pengecekan Customer berdasarkan data server
		public function CariCustomer($berdasarkan, $key){
			return json_decode($this->curl->simple_get->($this->api.'customer'));
		}
		/////////////////////////////////////

		public function login($data)
		{
			//print_r($data);
			$cond = array('username' => $data['username'] ,'password' => $data['password'] );
			$this->db->select('*');
			$this->db->from('tbusername');
			$this->db->where($cond);
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
				return $query;
			}else{
				return null;
			}
		}

		public function searching($query)
		{
			$this->db->select('*');
			$this->db->form('tbjurnal');
			$this->db->or_like(array('judul' => $query, 'pengarang' => $query, 'tahun' => $query, 'katakunci' => $query));
			/*LIKE OR LIKE*/
			// $this->db->where('id', $id);
			return $this->db->get();
		}

		public function searchingData($query, $start=0, $end=0){
			$this->db->select('*');
			$this->db->form('tbJurnal');
			$this->db->or_like(array('judul' => $query, 'pengarang' => $query, 'tahun' => $query, 'katakunci' => $query));
			/*LIKE OR LIKE*/
			$this->db->limit($start, $end);


			return $this->db->get();
		}

		public function register($data){
			$this->db->insert('tbusername', $data);
		}

		//////////////////////////////////////////////////


	}
 ?>