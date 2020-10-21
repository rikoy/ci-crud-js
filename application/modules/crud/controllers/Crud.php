<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends MY_Controller {

	
	public function __construct()
	{
		parent::__construct();

		
		$this->load->model('crud_model');
		

		$this->app_name = $this->config->item('app_name');
	}
	

	public function index()
	{
		$data = array(
			'content' 		=> 'main'
			, 'title'		=> 'CRUD'
			, 'sub_title'	=> 'CRUD'
		);
		$this->load->view($data['content'], $data);
	}

	public function list_data()
	{
		$data = array(
			'content' 		=> 	'list'
		);

		$this->load->view($data['content'],$data);
	}

	public function input()
	{
		$data = array(
			'content' 		=> 	'input'
		);

		$this->load->view($data['content'], $data);
	}
}
