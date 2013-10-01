<?php
class Charisma extends CI_Controller{
	public function view ($page='index'){
		
		$data["title"] = $page." - Change me on application/controllers/charisma.php";
		
		$this->load->helper ( 'url' );
		
		$this->load->view('charisma/header',$data);
		$this->load->view('charisma/'.$page,$data);
		$this->load->view('charisma/footer',$data);
	}
}
