<?php

class biodata extends CI_Model {
	public function get_biodata() {
		//this->load->database();

		$this->db->get('biodata');

		return $data;

	}
}

