<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_control extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('page/signup');
        $this->load->view('templates/footer');
	}

    public function signup()
	{
        $this->load->view('templates/header');
		$this->load->view('page/signup');
        $this->load->view('templates/footer');

	}

    public function login_page()
	{
        $this->load->view('templates/header');
		$this->load->view('page/login');
        $this->load->view('templates/footer');

	}

    public function regular_user()
	{
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
	
	/*load Model*/
	$this->load->model('Figma_m');
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

    public function login()
    {
        if($this->input->post('login'))
        {
            $email=$this->input->post('email');
            $password=$this->input->post('password');
            $que=$this->db->query("select * from users where email='$email' and password='$password'");
            $row = $que->num_rows();
            if(count($row)>0)
            {
            redirect('Main_control/regular_user');
            }
            else
            {
            $data['error']="<h3 style='color:red'>Invalid userid or password !</h3>";
            }
        }
            $this->load->view('login',@$data);
    }
            


}