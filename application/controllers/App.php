<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {
    public function index() {
        $this->accueil();
        
    }

    public function accueil()
	{
        $data["title"] = "OmgBlog | OpenxTech";

        $this->load->view('sections/header', $data);
        $this->load->view('app');
        $this->load->view('sections/footer');
	}
}

