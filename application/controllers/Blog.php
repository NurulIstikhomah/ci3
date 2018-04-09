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
}


