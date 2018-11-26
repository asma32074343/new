<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class library extends CI_Controller {
	function __construct() {
    parent::__construct();
	  $this->load->model('data');
  }


	public function index()
	{
		$this->load->view('homepage');
	}
  public function first()
  {
  	$this->load->view('page1');
  }
  public function second()
  {
    $this->load->view('page2');
  }
  public function thired()
  {
    $this->load->view('page3');
  }
  public function fourth()
  {
    $this->load->view('page4');
  }
  public function five()
  {
    $this->load->view('page5');
  }

  public function seven()
  {
    $this->load->view('page7');
  }
  public function eight()
  {
    $this->load->view('page8');
  }

  }
