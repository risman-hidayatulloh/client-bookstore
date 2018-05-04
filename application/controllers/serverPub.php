<?php
Class serverPub extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API=" http://d9e6b284.ngrok.io/api";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }
    
    // menampilkan data kontak
    function index(){
        $data['datapublish'] = json_decode($this->curl->simple_get($this->API.'/Publisher'));
        //$this->load->view('kontak/list',$data);
    }
    
    // insert data kontak
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'id'       =>  $this->input->post('id'),
                'nama'      =>  $this->input->post('nama'));
            $insert =  $this->curl->simple_post($this->API.'/Publisher', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
           // redirect('kontak');
        }else{
            //$this->load->view('');
        }
    }
    
    // edit data kontak
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'id'       =>  $this->input->post('id'),
                'nama'      =>  $this->input->post('nama'));
            $update =  $this->curl->simple_put($this->API.'/Publisher', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            //redirect('kontak');
        }else{
            $params = array('id'=>  $this->uri->segment(3));
            $data['datapublish'] = json_decode($this->curl->simple_get($this->API.'/kontak',$params));
            //$this->load->view('kontak/edit',$data);
        }
    }
    
    // delete data kontak
    function delete($id){
        if(empty($id)){
            //redirect('kontak');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/Publisher', array('id'=>$id), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
           // redirect('kontak');
        }
    }
}