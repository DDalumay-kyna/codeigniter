<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_control extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Sign up';
        $this->load->view('templates/header',$data);
		$this->load->view('page/signup');
        $this->load->view('templates/footer');
	}

    public function signup()
	{
        $data['title'] = 'Sign Up';
        $this->load->view('templates/header',$data);
		$this->load->view('page/signup');
        $this->load->view('templates/footer');

	}

    public function login_page()
	{
		$data['title'] = 'login page';
        $this->load->view('templates/header',$data);
		$this->load->view('page/login');
        $this->load->view('templates/footer');

	}

    public function regular_user()
	{
		$data['title'] = 'Regular user';
        $this->load->view('templates/header',$data);
        $this->load->view('templates/header');
		$this->load->view('page/regular');
        $this->load->view('templates/footer');

	}

    public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();
	
	/*load database libray manually*/
	$this->load->database();

	/* load helper */
	$this->load->helper('url');
	
	/*load Model*/
	$this->load->model('Figma_m');

	$this->load->library('session');


	}
        /*Insert*/
	public function savedata()
	{
		/*load registration view form*/
		$this->load->view('page/signup');
	
		/*Check submit button */
		if($this->input->post('save'))
		{
		    $data['first_name']=$this->input->post('first_name');
			$data['last_name']=$this->input->post('last_name');
			$data['email']=$this->input->post('email');
            $data['password']=$this->input->post('password');
			$response=$this->Figma_m->saverecords($data);
			if($response==true){
                redirect('Main_control/login_page');
			}
			else{
					show_404();
			}
		}
	}

	function login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run())
		{
			//true
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			//model
			$this->load->model('main_model');
			if($this->figmain->can_login($email, $password))
			{
				$session_data = array(
					'email' => $email
				);
				$this->session->set_userdata($session_data);
				redirect(base_url() . 'Main_control/enter');
			}
			else
			{
				$this->session->set_flashdata('error','Invalid email and password');
				redirect(base_url() . 'Main_controler/login_page');
			}
		}
		else
		{
			//false
			$this->login_page;
		}
	}

	function enter()
	{
		if($this->session->userdata('email') != '')
		{
			echo '<h2> Welcom - '.$this->session->userdata('email');' </2>';
			echo '<a href="'.base_url().'Main_control/logout">logout</a>';
		}
		else
		{
			redirect(base_url() . 'Main_controler/login_page');
		}
	}

	function logout()
	{
		$this->session->unset_userdata('email');
		redirect(base_url() . 'Main_control/login_page');
	}
}