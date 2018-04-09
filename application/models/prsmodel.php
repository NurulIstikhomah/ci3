<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Prsmodel extends CI_Model {
	public function getInformation(){	
		$data = array(
			'name' => array('firstname' => "Nurul",'lastname'=> "Istikhomah"),
			'address' => "JL.Watugong Ketawanggede Lowokwaru Malang",
			'email' => "nurulistik5@gmail.com",
			'about' => "Nurul Istikhomah lahir di Sidoarjo pada tanggal 18 September 1997"
		);
		return $data;
	}
	
}

/* End of file person-model.php */
/* Location: ./application/models/person-model.php */