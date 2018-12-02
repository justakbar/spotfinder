<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_model extends CI_Model {
	public function count_res($word) {
		$data = array();

		$query = $this->db->query("SELECT * FROM finder WHERE company_name LIKE '%$word%' OR pochta_kod LIKE '%$word%' OR telephone_number LIKE '%$word%' OR boss LIKE '%$word%' OR address LIKE '%$word%' OR region LIKE '%$word%' OR old_name LIKE '%$word%' OR mojal LIKE '%$word%' OR taxi LIKE '%$word%' ORDER BY id DESC");
		return $query->num_rows();
	}

	public function search ($word) {
		$data = array();

		$query = $this->db->query("SELECT * FROM finder WHERE company_name LIKE '%$word%' OR pochta_kod LIKE '%$word%' OR telephone_number LIKE '%$word%' OR boss LIKE '%$word%' OR address LIKE '%$word%' OR region LIKE '%$word%' OR old_name LIKE '%$word%' OR mojal LIKE '%$word%' OR taxi LIKE '%$word%' ORDER BY id DESC");
		if ($query) {
			foreach ($query->result_array() as $row) {
				$data[] = array(
					'id' => $row['id'],
					'company_name' => $row['company_name'],
					'pochta_kod' => $row['pochta_kod'],
					'telephone_number' => $row['telephone_number'],
					'email' => $row['email'],
					'boss' => $row['boss'],
					'address' => $row['address'],
					'region' => $row['region'],
					'old_name' => $row['old_name'],
					'moljal' => $row['mojal'],
					'taxi' => $row['taxi']
				);
			}
			return $data;
		} else return 'Something went wrong!';
	}
}
?>