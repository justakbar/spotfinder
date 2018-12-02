<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_model extends CI_Model {
	public function find($id) {
		$data = array();
		$id = htmlentities($id, ENT_QUOTES);
		$query = $this->db->query("SELECT * FROM finder WHERE id = '$id'");

		if ($query) {
			if ($query->num_rows() > 0) {
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
			}
		} else {
			return "Something went wrong!";
		}
		return $data;
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

	public function user_added_data($id) {
		$query = $this->db->query("SELECT * FROM `tempqo` WHERE com_id = '$id'");
		if ($query) {
			if ($query->num_rows() > 0) {
				foreach ($query->result_array() as $row) {
					$data = array(
						'com_id' => $row['com_id'],
						'manzil' => $row['manzil'],
						'moljal' => $row['moljal'],
						'taxi' => $row['taxi']
					);
				}
			} else {
				$data = array(
					'com_id' => '',
					'manzil' => '',
					'moljal' => '',
					'taxi' => ''
				);
			}
			return $data;
		}
	}
}