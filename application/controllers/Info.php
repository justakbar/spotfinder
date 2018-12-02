<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {

	public function n($id)
	{
		$this->load->model('Info_model');
		$data['data'] = $this->Info_model->find($id);
		$data['info'] = $this->Info_model->info();
		$data['new'] = $this->Info_model->user_added_data($id);
		$this->load->view('Info_view', $data);
	}
}
