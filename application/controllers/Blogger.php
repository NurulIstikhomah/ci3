<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogger extends CI_Controller {

	public function __construct()
	{
		//Membuat kelas parent 
		parent::__construct();
		//Load model dan helper
		$this->load->model('Artikel');
		$this->load->model('categories');
		$this->load->helper('url_helper','date','file','pagination');
		
		date_default_timezone_set('Asia/Jakarta');
	}

	public function blog()
		{
			$limit_per_page = 3;

			$start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;

			
			$total_records = $this->$model_blog->get_total();

			if ($total_records > 0) {
				$data["all_blog"] = $this->model_blog->get_all_blog($limit_per_page, $start_index);
				
				$config['base_url'] = base_url() . 'blog/blog';
				$config['total_rows'] = $total_records;
				$config['per_page'] = $limit_per_page;
				$config["uri_segment"] = 3;
				
				$this->pagination->initialize($config);
					
				$data["categories"] = $this->pagination->create_category();
			}
			/*$this->load->view('header');*/
			$this->load->view('blog', $data);
			/*$this->load->view('footer');*/
		}

	public function index()
	{
		$this->load->view('home1');
		//Memanggil fungsi menampilkan semua tabel artikel
		/*$url = $this->uri->segment(3);*/
		// segmentasi paging  
		/*$data['artikel']=$this->Artikel->get_article();
		*/
		/*$this->load->view('blogger/tampil_blog', $data);*/
		// $this->load->view('blogger/footer');
	}
	public function index2()
	{
		$this->load->view('home2');
	}
	public function index3()
	{
		$this->load->view('home3');
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
		/*$this->load->view('blogger/header');*/
		$this->load->view('blogger/view', $data);
		/*$this->load->view('blogger/footer');*/
	}

	public function create(){

		if(!$this->session->userdata('logged_in')){
			redirect('user/login');
		}

		//Mereload helper form dan form valudasi
		$data['dropdown'] = $this->categories->dropdown();
		$config['upload_path'] = './image/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);

		$this->load->helper('form');
		$this->load->library('form_validation');
		//validasi inputan
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('artikel', 'Artikel', 'required');

		if ($this->form_validation->run() == FALSE) {
			//View tambah artikel
			/*$this->load->view('blogger/header');*/
			/*$this->load->view('blogger/header');*/
			$this->load->view('blogger/create',$data);
			/*$this->load->view('blogger/footer');*/
			// $this->load->view('create'); 
			// $this->load->view('blogger/footer');
		} else {
			if ( ! $this->upload->do_upload('gambar')){
                $data['upload_error'] = $this->upload->display_errors();

                $this->load->view('blogger/header');
    	            $this->load->view('blogger/create',$data);
    	            $this->load->view('blogger/footer');
                } else {
					$data = array('upload_data' => $this->upload->data());
                 $data['input'] = array(
                 	'judul' => $this->input->post('judul'),
 					'tanggal' => date("Y-m-d H:i:s"),
 					'author' => $this->input->post('author'),
					'kategori' => $this->input->post('cat_id'),
					'cat_id' => $this->input->post('cat_id'),
 					'konten' => $this->input->post('konten'),
 					'image' => $this->upload->data('file_name')
 				);
                 $dataa = array (
                 	'cat_name' => $this->input->post('cat_name'),
                 	'cat_description' => $this->input->post('cat_description'),
                 	'date_created' => date("d-m-Y"),
                 	);
                $this->categories->tambah_kategori($dataa);
                 $this->Artikel->set_kategori(0,$dataa['input']);
				 //kembali ke home
				 redirect('blogger');
			
			/*$config['upload_path'] = 'assets/img/';
			$config['allowed_types'] = 'jpg|png|jpeg';*/

			/*$this->load->library('upload', $config);

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
				redirect('blogger');*/
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
		/*$data['show_article'] = $this->Artikel->get_article_by_id($id);*/

$data['dropdown'] = $this->categories->dropdown();
		$data['show_article'] = $this->Artikel->get_article_by_id($id);
		$data['id'] = $data['show_article']['id'];
		$data['judul'] = $data['show_article']['title'];
		$data['konten'] = $data['show_article']['konten'];

		//Jika validasi belum berjalam
		if ($this->form_validation->run() == FALSE) {
			//Meload View tambah artikel
			/*$this->load->view('blogger/header');*/
			$this->load->view('blogger/edit',$data);
			/*$this->load->view('blogger/footer');*/
		} else {
			$data['input'] = array(
                 	'judul' => $this->input->post('judul'),
 					'tanggal' => date("Y-m-d H:i:s"),
 					'author' => $this->input->post('author'),
					'kategori' => $this->input->post('cat_id'),
					'cat_id' => $this->input->post('cat_id'),
 					'konten' => $this->input->post('konten'),
 					'image' => $this->upload->data('file_name')
 				);

			/*//Cek kondisi upload
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
					
				);*/
				
				$this->Artikel->set_article($id,$data['input']);
				//kembali ke home
				redirect('blogger');
			}
		}

		public function delete(){
		$id = $this->uri->segment(3);
		$this->Artikel->delete_article($id);
		redirect('blogger','refresh');
	}

	public function kategori(){

		$limit_per_page = 3;

			$start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;

			$total_records = $this->model_kategori->get_total();

			if ($total_records > 0) {
				$data["categories"] = $this->model_kategori->get_all_categories($limit_per_page, $start_index);
				
				$config['base_url'] = base_url() . 'blogger/kategori';
				$config['total_rows'] = $total_records;
				$config['per_page'] = $limit_per_page;
				$config["uri_segment"] = 3;
				
				$this->pagination->initialize($config);
					
				$data["category"] = $this->pagination->create_category();
			}

			/*$this->load->view('header');*/
			$this->load->view('blog', $data);
			/*$this->load->view('footer');*/
	}
}
