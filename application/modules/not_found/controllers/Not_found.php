<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Not_found extends MY_Controller {

	
	public function __construct()
	{
		parent::__construct();

		$this->app_name = $this->config->item('app_name');
	}
	

	public function index()
	{
		$data['title'] = $this->app_name;
		$this->load->view('main', $data);
	}
}
