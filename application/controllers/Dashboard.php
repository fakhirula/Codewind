<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('dashboard/index');
	}

	public function setnavbar()
	{
		$this->load->view('dashboard/setnavbar');
	}

	public function setheading()
	{
		$this->load->view('dashboard/setheading');
	}

	public function setsubheading()
	{
		$this->load->view('dashboard/setsubheading');
	}

	public function setbody()
	{
		$this->load->view('dashboard/setbody');
	}

	public function settestimonial()
	{
		$this->load->view('dashboard/settestimonial');
	}

	public function setfooter()
	{
		$this->load->view('dashboard/setfooter');
	}
}
