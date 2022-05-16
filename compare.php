<?php
function login(){ 
  $user_login=array(

  'email'=>$this->input->post('email'),
  'password'=>$this->input->post('password')

    ); 
//$user_login['user_email'],$user_login['user_password']
    $data['users']=$this->user_model->login_user();
    //  if($data)
      //{
		  
        $this->session->set_userdata('user_id',$data['users'][0]['user_id']);
        $this->session->set_userdata('email',$data['users'][0]['email']);
        $this->session->set_userdata('name',$data['users'][0]['name']);
		echo $this->session->set_userdata('user_id'); 
        $this->load->view('regular.php',$data);

    //  }
    //  else{
     //   $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
     //   $this->load->view("login.php");

     // }


}
