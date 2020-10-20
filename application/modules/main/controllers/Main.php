<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$data = array(
				'title' 		=> 	'Dashboard'
		);
		$this->load->view('tpl_admin', $data);
	}

}

/* End of file main.php */
/* Location: ./application/modules/main/controllers/main.php */