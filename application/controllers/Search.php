<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index()
	{
		if (isset($_GET['searchText']) && !empty($_GET['searchText'])) {
			$word = htmlentities($_GET['searchText'], ENT_QUOTES);
			$this->load->model('search_model');
			$data['data'] = $this->search_model->search($word);
			$data['res'] = $this->search_model->count_res($word);
			$data['sess'] = $_SESSION['type'];
		} else {
			$data['data'] = '';
		}
		$this->load->view('Search_view', $data);
	}
}
?>