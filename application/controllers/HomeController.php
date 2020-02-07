<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller{
	 public function __construct()
     {
          parent::__construct();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->database('cts');
          $this->load->library('form_validation');
          //load the login model
          $this->load->model('HomeModel');
     }

	public function index(){
		$this->load->model('HomeModel');
		$data['records'] = $this->HomeModel->driver_info();
		$this->load->view('HomeView', $data);

		if ($this->input->post('save') == "Save"){
			

			
		}
	}
}

?>