<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Model {

    public function __construct()
     {
     	$this->load->database();
          $this->load->helper('url');
     } 
	
     public function get_article(){
     	$query = $this->db->get('artikel');
     	return $query;
     }

     public function get_article_by_id($id){
     	$query = $this->db->get_where('artikel', array('id' => $id));
     	return $query->row_array();
     }

     public function get_join(){

          $this->db->order_by('blog.tanggal', 'DESC');

          $this->db->join('kategori', 'kategori.id_kategori = blog.id_kategori');
       
          $query = $this->db->get('blog');

  return $query->result();
     }

     public function set_article($id = 0, $data){
     	$this->load->helper('url');
     	/*$object = array(
     		'title' => $this->input->post('title'),
     		'artikel' => $this->input->post('artikel')
     		);*/
     	//Membedakan untuk query create dan update*/
     	if($id == 0){
     		$this->db->insert('artikel', $data);
     	}else{
     		$this->db->where('id',$id);
     		return $this->db->update('artikel', $data);
     	}
     }


     public function set_kategori($id = 0, $data){
          $this->load->helper('url');
          /*$object = array(
               'title' => $this->input->post('title'),
               'artikel' => $this->input->post('artikel')
               );*/
          //Membedakan untuk query create dan update*/
          if($id == 0){
               $this->db->insert('categories', $data);
          }else{
               $this->db->where('cat_id',$id);
               return $this->db->update('categories', $data);
          }
     }

     public function delete_article($id){
     		$this->db->where('id', $id);
     		return $this->db->delete('artikel');
     }
}
/* End of file database_test.php */
/* Location: ./application/models/database_test.php */
?>