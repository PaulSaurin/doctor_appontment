<?php
class Form extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');  //default constructor
		$this->load->database(); //manual database connection
		//Loading url helper

		// $this->load->model('Hello_Model'); //Model import
	}
	

	public function savedata()
	{
		$this->load->view('Registration');
		// if($this->input->post('save'))
		// {
		// 	$n=$this->input->post('name');
		// 	$e=$this->input->post('email');
		// 	$m=$this->input->post('mobile');
		// 	$this->Hello_Model->saverecords($n,$e,$m);
		// 	redirect("Form/display");
		// }
	}

	public function login()
	{
		$this->load->view('patientlogin');
		// if($this->input->post('save'))
		// {
		// 	$n=$this->input->post('name');
		// 	$e=$this->input->post('email');
		// 	$m=$this->input->post('mobile');
		// 	$this->Hello_Model->saverecords($n,$e,$m);
		// 	redirect("Form/display");
		// }
	}
}