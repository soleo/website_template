<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
   {
      echo "It works";
		$this->load->view('welcome_message');
	}
}

/* End of file index.php */
/* Location: ./application/controllers/home.php */
