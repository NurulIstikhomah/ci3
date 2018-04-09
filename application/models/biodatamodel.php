<?php

	class biodata_Model extends CI_Model {

		public function get_biodata() {

			 //this->load->database();

			$query = $this->db->get('biodata',);

			//$this->db->get('biodata');

			//$data = $this->query->result();

			return $query->result();
		}
	}

?>