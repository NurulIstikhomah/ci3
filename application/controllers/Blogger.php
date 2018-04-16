<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogger extends CI_Controller {

	public function __construct()
	{
		//Membuat kelas parent 
		parent::__construct();
		//Load model dan helper
		$this->load->model('Artikel');
		$this->load->helper('url_helper','date','file','pagination');
		
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		//Memanggil fungsi menampilkan semua tabel artikel
		$url = $this->uri->segment(3);
		// segmentasi paging  
		$data['artikel']=$this->Artikel->get_article();
		
		$this->load->view('blogger/tampil_blog', $data);
		// $this->load->view('blogger/footer');
	}
	public function view(){
		$id = $this->uri->segment(3);
		//mengambil variabel
		$data['show_article'] = $this->Artikel->get_article_by_id($id);//menyimpan hasil 
		
		//jika data tidak ada maka diasilkan output 404

		if(empty($data['show_article'])){
			show_404();
		}
		/*//Menyimpan kolom tabel ke array
		$data['judul'] = $data['show_article']['judul'];
		$data['artikel'] = $data['show_article']['artikel'];*/
		//Meload View
		$this->load->view('blogger/header');
		$this->load->view('blogger/view', $data);
		$this->load->view('blogger/footer');
	}

	public function create(){
		//Mereload helper form dan form valudasi
		$this->load->helper('form');
		$this->load->library('form_validation');
		//validasi inputan
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('artikel', 'Artikel', 'required');

		if ($this->form_validation->run() == FALSE) {
			//View tambah artikel
			$this->load->view('header');
			$this->load->view('create');
			$this->load->view('footer');
		} else {
			$config['upload_path'] = 'assets/img/';
			$config['allowed_types'] = 'jpg|png|jpeg';

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('userfile')){
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}
			else{
				$data = array('upload_data' => $this->upload->data());
				// Data input ke model
				$data['input'] = array(
					'judul' => $this->input->post('judul'),
					'tanggal' => date("Y/m/d"),
					'author' => $this->input->post('author'),
					'konten' => $this->input->post('konten'),
					
					'gambar' => $this->upload->data('file_name')
					
				);
				//query tambah data
				$this->Artikel->set_article(0,$data['input']);
				//kembali ke home
				redirect('blogger');
			}

		}
	}

	public function edit(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('judul', 'judul', 'required');
		$this->form_validation->set_rules('konten', 'konten', 'required');

		$id = $this->uri->segment(3);
		//Mengambil data dari model 
		$data['show_article'] = $this->Artikel->get_article_by_id($id);

		//Jika validasi belum berjalam
		if ($this->form_validation->run() == FALSE) {
			//Meload View tambah artikel
			$this->load->view('blogger/header');
			$this->load->view('blogger/edit',$data);
			$this->load->view('blogger/footer');
		} else {
			$config['upload_path'] = 'assets/img/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			//Memulai Upload
			$this->load->library('upload', $config);

			//Cek kondisi upload
			if ( ! $this->upload->do_upload('userfile')){
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}
			else{
				$data['input'] = array(
					'judul' => $this->input->post('judul'),
					'tanggal' => date("Y/m/d"),
					'author' => $this->input->post('author'),
					'konten' => $this->input->post('konten'),
					
					'gambar' => $this->upload->data('file_name')
					
				);
				
				$this->Artikel->set_article($id,$data['input']);
				//kembali ke home
				redirect('blogger');
			}
		}	
	}

		
	public function delete(){
		$id = $this->uri->segment(3);
		$this->Artikel->delete_article($id);
		redirect('blogger','refresh');
	}
}
