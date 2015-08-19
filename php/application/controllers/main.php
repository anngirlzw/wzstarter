<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function index( $_page_id = "home" )
	{

		$this->load->view( 'index_view', array( "page_id"=>$_page_id ) );
	}

	public function template( $_page_id = "home" ){
		$this->load->view( 'pages/' . $_page_id . "_view" );
	}

	// public function send_email() {
	// 	$this->load->library("form_validation");
	// 	// echo 'i got this';

	// 	$this->form_validation->set_rules('full_name', 'Full Name', 'required');
	// 	$this->form_validation->set_rules('email', 'Email', 'required');
	// 	$this->form_validation->set_rules('message', 'Message', 'required');

	// 	if ($this->form_validation->run() == false ) {
	// 		$this->load->view( "pages/myform_view" );
	// 	}
	// }

	public function sendEmail() {
		$data = $this->input->post( "data" );
		print_r($data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */