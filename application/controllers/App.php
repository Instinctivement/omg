<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {
    public function index() {
        $this->accueil();
        
    }

    public function accueil()
	{
        $this->load->view('sections/header');
        $this->load->view('app');
        $this->load->view('sections/footer');
	}
}