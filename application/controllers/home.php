<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
   {
		if (!file_exists('application/views/static/home.php'))
		{
			show_404();
		}
		
		$data['title'] = "home";
		$this->load->view('static/home', $data);
	}
}

/* End of file index.php */
/* Location: ./application/controllers/home.php */
