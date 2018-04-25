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

     public function delete_article($id){
     		$this->db->where('id', $id);
     		return $this->db->delete('artikel');
     }
}
/* End of file database_test.php */
/* Location: ./application/models/database_test.php */
?>