<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


    public function index(){
        $data["title"] = "OmgBlog | Profile";

        $this->load->view('sections/header', $data);
        $this->load->view('sections/user/profil');
        $this->load->view('sections/footer');
	}

    public function connexion() {
        $this->load->helper("form");
        $this->load->library('form_validation');

        $data["title"] = "Identification | OpenxTech";

   
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->auth_user->login( $email, $password);
            if($this->auth_user->is_connected) {
                redirect('app');
                
            } else {
                $data['login_error'] = "Échec de l'authentification";
                $this->load->view('sections/header', $data);
                $this->load->view('sections/user/login', $data);
                $this->load->view('sections/footer',);
        }

    }

    function deconnexion() {
        $this->auth_user->logout();
        redirect('app');
    }
}

