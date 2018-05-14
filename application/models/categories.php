<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class categories extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function get_data_category(){
		return $this->db->get('categories');
	}
	public function dropdown(){
		$data = $this->db->select('cat_id, cat_name')->from('categories')->get();
		$data_select[''] = "Pilih kategori";
		foreach ($data->result() as $row) {
			$data_select[$row->cat_id] = $row->cat_name;
		}
		return $data_select;
	}
	public function tambah_kategori($data){
		return $this->db->insert('categories', $data);
	}

}