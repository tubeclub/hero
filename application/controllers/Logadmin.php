<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logadmin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	$this->load->model('model_user');

	}
	  


 
	public function index()
	{
	

  	    $this->form_validation->set_rules('email2', 'email', 'email');
		$this->form_validation->set_rules('password', 'Password', 'required');
	

        
	if (($this->form_validation->run() == FALSE))

		{

		$this->load->view('login');
	}
	else {

   	//verifier dans la BD
    $email = set_value('email');
    $pass = set_value('password');


          $pos = $this->model_user->get_pos();



$password = $pos->password;

    $cryptKey  = 'qJB0rGtIn5UB452jkhk65KMV61xG03efyCp';

    $Decoded  = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $password ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
$hash = password_hash($pass, PASSWORD_DEFAULT);



if (password_verify($Decoded, $hash)) {






# login & pass existe
	// teste argoub pass-> bachir
         $this->session->set_userdata('email',$email);
             
                redirect('sqadmin/');
}
               
             else {
//login & pass non valide

	$this->session->set_flashdata('error','Robot verification failed, please try again');
	redirect('logadmin');
       }
}
	}
	public function logout(){
$this->session->sess_destroy();
redirect('fb/index');
	}
}