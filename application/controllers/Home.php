<?php 


defined('BASEPATH') or exit('no script access allowed');
	/**
	* 
	*/
	class Home extends CI_Controller
	{
		public function index(){
			$this->load->view('home');
		}
	}
 ?>