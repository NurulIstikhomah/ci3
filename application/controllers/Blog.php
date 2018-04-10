<?php

defined('BASEPATH') or exit('no script access allowed');
Class Blog extends CI_Controller{
	public function __construct()
		{
			//Membuat kelas parent agar bisa digunakan di semua fungsi
			parent::__construct();
			//Load model dan helper
			// $this->load->model('model_blog');
			$this->load->helper('url_helper');
		}
	public function index(){
		$this->load->view('home1');
	}
	public function about(){
		$this->load->view('about');
	}
	public function blog(){
		$this->load->view('blog');
	}
	public function create(){
		//Meload helper form dan form valudasi
		$this->load->helper('form');
		$this->load->library('form_validation');
		//validasi inputan yang masuk
		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('artikel', 'artikel', 'required');
		//Jika validasi belum berjalam
		if ($this->form_validation->run() == FALSE) {
			//Meload View tambah artikel
			// $this->load->view('Blog/header');
			$this->load->view('Blog/create');
			// $this->load->view('Blog/footer');
		} else {
			//query tambah data
			$this->Artikel->set_article();
			//kembali ke home
			redirect('blogger');
		}
	}
}


