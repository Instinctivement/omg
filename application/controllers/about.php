<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
    public function index() {
        $this->accueil();
        
    }

    public function accueil()
	{
        $data["title"] = "A propos | OpenxTech";

        $this->load->view('sections/header', $data);
        $this->load->view('sections/about');
        $this->load->view('sections/footer');
	}
}

