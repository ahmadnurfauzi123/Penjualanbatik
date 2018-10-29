<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		 parent::__construct();
        $this->load->helper('url','form');
        $this->load->model('Admin_model');
        $this->load->model('User_model');
        $this->load->library('form_validation');
        $this->load->library('ECRUD/ecrud');
	}
	private function template($content,$data=null){ 
	//method ini digunakan untuk memanggil template yang telah dibuat
	// untuk dapat digunakan pada method lainnya
	//parameter $content = lokasi file view pada folder View
	//parameter $data = data yang akan dimasukkan ke file view
		$data['content'] = $this->load->view($content,$data,true);
		$this->load->view('template',$data);
	}
	public function index()
	{	
		$this->load->view('admin/barang/list');
	}
	public function tambah()
	{	
		$this->load->view('admin/barang/form');
	}
	public function tampil()
	{
		$this->template('admin/tampil/home');
	}
	}