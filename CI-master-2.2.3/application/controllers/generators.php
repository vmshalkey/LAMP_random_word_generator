<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Generators extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->output->enable_profiler();
	}
	public function index() {
		$counter = $this->session->userdata("counter");
		$random = $this->session->userdata("random");
		$this->load->view("main", array("random" => $random, "counter" => $counter));
	}
	public function create_word() {
		if($this->session->userdata("counter") == null) {
			$this->session->set_userdata("counter", 1);
		} else {
			$counter = $this->session->userdata("counter");
			$counter++;
			$this->session->set_userdata("counter", $counter);
		}
		$word = $this->generateRandomString();
		$this->session->set_userdata("random", $word);
		$random = $this->session->userdata("random");
		redirect('/');
	}
	function generateRandomString($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
    	return $randomString;
	}
}

/* End of file generator.php */
/* Location: ./application/controllers/generator.php */