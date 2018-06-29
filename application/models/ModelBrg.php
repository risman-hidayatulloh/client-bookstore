<?php 
	
	/**
	* UserModel.php
	*Model utuk user
	*/
	class ModelBrg extends CI_Model
	{
		var $api = "http://68140596.ngrok.io/api/";
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('curl');
		}

		/////////////////////////////////////
		//pengecekan author berdasarkan data server
		// public function CariAuthor($berdasarkan, $key){
		// 	return json_decode($this->curl->simple_get->($this->api.'author'));
		// }

		// //pengecekan Publish berdasarkan data server
		// public function CariPublish($berdasarkan, $key){
		// 	return json_decode($this->curl->simple_get->($this->api.'publish'));
		// }

		// //pengecekan Book berdasarkan data server
		// public function CariBook($berdasarkan, $key){
		// 	return json_decode($this->curl->simple_get->($this->api.'book'));
		// }

		// //pengecekan Customer berdasarkan data server
		// public function CariCustomer($berdasarkan, $key){
		// 	return json_decode($this->curl->simple_get->($this->api.'customer'));
		// }
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

		public function search($key){
			$this->db->select('book.Title as book_Title, publisher.Name as Publisher_Name, author.Name as Author_Name')->from('book, publisher, author')->where('book.Id_Publisher = publisher.Id_Publisher AND author.Id_Author = book.Id_Author');
			$this->db->or_like(array('book.Title'=> $key, 'publisher.Name'=>$key, 'author.Name'=>$key));

			$query = $this->db->get();
			return $query->result();
		}

		public function GetDataBook(){
			$this->db->select('*')->from('book b');

			$query = $this->db->get();
			$num = $query->num_rows();

			return $query->result();
		}

		public function GetDataPublish(){
			$this->db->select('*')->from('publisher');
			
			$query = $this->db->get();
			$num = $query->num_rows();

			return $query->result();
		}
		public function GetDataAuthor(){
			$this->db->select('*')->from('author');
			
			$query = $this->db->get();
			$num = $query->num_rows();

			return $query->result();
		}
		public function GetDataSBB(){
			$this->db->select('*')->from('shoppingbasketbook');
			
			$query = $this->db->get();
			$num = $query->num_rows();

			return $query->result();
		}
		public function GetDataSB(){
			$this->db->select('*')->from('shoppingbasket');
			
			$query = $this->db->get();
			$num = $query->num_rows();

			return $query->result();
		}
		public function GetDataCustomer(){
			$this->db->select('*')->from('customer');

			$query = $this->db->get();
			$num = $query->num_rows();

			return $query->result();
		}

		public function bookById($id){
			$this->db->select('book.*, publisher.Name as Publisher_Name, author.Name as Author_Name, publisher.Address as Publisher_Address, publisher.Phone as Publisher_Phone, author.Address as Author_Address')->from('book, publisher, author');
			$this->db->where('book.Id_Publisher = publisher.Id_Publisher AND author.Id_Author = book.Id_Author AND book.Id_Book =', $id);

			$query = $this->db->get();

			return $query->row();
		}

	}
 ?>