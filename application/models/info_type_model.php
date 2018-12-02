<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_type_model extends CI_Model {
	public function index() {
		if (!isset($_SESSION['type']))
			$type = 'uzb';
	}
}