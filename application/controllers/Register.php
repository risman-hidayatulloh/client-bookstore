<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    function __construct(){
        parent::__construct();
    }

    function reset()
    {
        $_SESSION['httpcode'] = '';
        $_SESSION['httpmessage'] = '';
    }

    public function index()
    {
        /*Buka aja komentarnya tapi bakalan lama karena datanya banyak*/
        $data['title'] = 'register';
        $data['prov'] = $this->getProv();
        $data['kab'] = $this->getKab();
        $data['kec'] = $this->getKec();
        $data['kel'] = $this->getKel();

        $this->load->view('global/header', $data);
        $this->load->view('global/regist');
        $this->load->view('global/footer');
    }

    public function insert()
    {
        $ch = curl_init(API . "customer/insert");

        $body = json_encode(
          array(
            'id_Customer' => '1',
            'email' => $this->input->post('new-email'),
            'name' => $this->input->post('new-name'),
            'phone' => $this->input->post('new-phone'),
            'address' => $this->input->post('new-address'),
            'id_KabupatenKota' => $this->input->post('new-KabupatenKota'),
            'id_Kecamatan' => $this->input->post('new-Kecamatan'),
            'id_Kelurahan' => $this->input->post('new-Kelurahan'),
            'id_Provinsi' => $this->input->post('new-Provinsi')
          )
        );
        //isi konten untuk dikirim ke server
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        //bentukkan kontennya
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "Accept: application/json"));
        //menampilkan responses dari server. true(gaditampilin) dan sebaliknya
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $_SESSION['httpmessage'] = curl_exec($ch);

        $_SESSION['httpcode'] = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        //insert ke tabel login
        $ch = curl_init(API . "customer/insertLogin");

        $body = json_encode(
          array(
            'email' => $this->input->post('new-email'),
            'password' => $this->input->post('pass')
          )
        );

        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "Accept: application/json"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $_SESSION['httpmessage'] = curl_exec($ch);

        $_SESSION['httpcode'] = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        redirect(site_url('login'));

    }
/*Get All Kabupaten / Kota*/
    public function getKab(){
        $ch = curl_init(API . "KabupatenKota");

        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "Accept: application/json"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $_SESSION['httpcode'] = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        $data['KabupatenKota'] = json_decode(curl_exec($ch));

        curl_close($ch);
        return $data['KabupatenKota'];
    }
/*Get All Kecamatan*/
    public function getKec(){
        $ch = curl_init(API . "Kecamatan");

        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "Accept: application/json"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $_SESSION['httpcode'] = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        $data['Kecamatan'] = json_decode(curl_exec($ch));

        curl_close($ch);
        return $data['Kecamatan'];
    }
/*Get All Kelurahan*/
    public function getKel(){
        $ch = curl_init(API . "Kelurahan");

        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "Accept: application/json"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $_SESSION['httpcode'] = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        $data['Kelurahan'] = json_decode(curl_exec($ch));

        curl_close($ch);

        return $data['Kelurahan'];
    }
/*Get All Provinsi*/
    public function getProv(){
        $ch = curl_init(API . "Provinsi");

        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "Accept: application/json"));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $_SESSION['httpcode'] = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        $data['Provinsi'] = json_decode(curl_exec($ch));

        curl_close($ch);

        return $data['Provinsi'];
    }

}

?>