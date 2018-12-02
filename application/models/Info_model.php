<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_model extends CI_Model {
	public function find($id) {
		$data = array();
		$id = htmlentities($id, ENT_QUOTES);
		$query = $this->db->query("SELECT * FROM finder WHERE id = '$id'");

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
		} else {
			return "Something went wrong!";
		}
	}

	public function info() {
		$data = array();
		$type = $_SESSION['type'];
		$query = $this->db->query("SELECT $type FROM info");
		if ($query) {
			foreach ($query->result_array() as $row) {
				$data[] = $row[$type];
			}
		}
		return $data;
	}
}