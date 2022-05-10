<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_control extends CI_Controller {

	public function index()
	{
		$this->load->view('signup');
	}

    function signup ()
    {
        $this->load->view('signup');
    }
}
