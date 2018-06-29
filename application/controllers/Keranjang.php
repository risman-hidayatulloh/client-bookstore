<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keranjang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $_SESSION['keranjang'] = '';
    }

    public function index()
    {
        $data['title'] = 'keranjang';
        $this->load->view('global/header', $data);
        $this->load->view('global/keranjang');
        $this->load->view('global/footer');
    }

	public function getKeranjang($key, $value = null)
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
			if ($key == 'title' || $key == 'name_Language' || $key == 'name_Author' || $key == 'name_Publisher' || $key == ' name_Category') {
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
		}

		// menampilkan data
		$this->index($data);

		$this->reset();
	}

	public function keranjang($id)
	{
		$this->getKeranjang('id_Book', $id);
	}
}
