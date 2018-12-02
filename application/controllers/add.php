<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {
	public function index() {
		if (isset($_POST['send'])) {
			$com_id = htmlentities($_POST['com_id'], ENT_QUOTES);
			$old_name = htmlentities($_POST['old_name'], ENT_QUOTES);
			$moljal = htmlentities($_POST['moljal'],ENT_QUOTES);
			$taxi = htmlentities($_POST['taxi'], ENT_QUOTES);

			$query = $this->db->query("SELECT * FROM tempqo WHERE com_id = '$com_id'");
			if ($query) {
				if ($query->num_rows() > 0) {
					foreach($query->result_array() as $row) {
						$old_name_2 = $row['manzil'];
						$moljal_2 = $row['moljal'];
						$taxi_2 = $row['taxi'];
					}
					if (!empty($old_name_2))
						$old_name = $old_name_2 . '<br/>' . $old_name;
					if (!empty($moljal_2))
						$moljal = $moljal_2 . '<br/>' . $moljal;
					if (!empty($taxi_2))
						$taxi = $taxi_2 . '<br/>' . $taxi;

					$query = $this->db->query("UPDATE tempqo SET manzil = '$old_name', moljal = '$moljal', taxi = '$taxi' WHERE com_id = '$com_id'");
				} else {
					$query = $this->db->query("INSERT INTO tempqo (com_id, manzil, moljal, taxi) VALUES ('$com_id','$old_name', '$moljal', '$taxi')");
				}
				if ($query) {
					redirect(base_url() . 'info/n/' . $com_id);
				} else {
					redirect(base_url() . 'info/n/' . $com_id);
				}
			}
		}
	}
}