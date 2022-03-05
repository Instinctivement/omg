<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignUp extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		
		//	Chargement des ressources pour tout le contrôleur
		$this->load->model('users/SignUp_model', 'userManager');
	}


    public function index() {
        $this->accueil();
        
    }

    public function accueil()
	{
        $data["title"] = "OmgBlog | OpenxTech";

        $this->load->view('sections/header', $data);
        $this->load->view('sections/user/register');
        $this->load->view('sections/footer');
	}

    // ------------------------------------------------------------------------
	
public function ecrire()
{
	$this->load->library('form_validation');
	
	//	Cette méthode permet de changer les délimiteurs par défaut des messages d'erreur (<p></p>).
	$this->form_validation->set_error_delimiters('<p class="form_erreur">', '</p>');
	
	//	Mise en place des règles de validation du formulaire
	//	Nombre de caractères : [3,25] pour le pseudo et [3,3000] pour le commentaire
	//	Uniquement des caractères alphanumériques, des tirets et des underscores pour le pseudo
	$this->form_validation->set_rules('name',  '"contactName"',  'trim|required|min_length[3]|max_length[25]|alpha_dash');
	$this->form_validation->set_rules('email', '"contactEmail"', 'trim|required|min_length[3]|max_length[3000]');
  $this->form_validation->set_rules('sujet',  '"contactSujet"',  'trim|required|min_length[3]|max_length[25]|alpha_dash');
	$this->form_validation->set_rules('message', '"contactContent"', 'trim|required|min_length[3]|max_length[3000]');
	

		//	Nous disposons d'un pseudo et d'un commentaire sous une bonne forme
		
		//	Sauvegarde du commentaire dans la base de données
		$this->userManager->inscription($this->input->post('name'),
							   $this->input->post('pseudo'),
                               $this->input->post('email'),

                               $this->input->post('birthday'),
                               $this->input->post('gender'),
                 $this->input->post('phone'),
                 $this->input->post('password'),);
		
		//	Affichage de la confirmation
    $data["title"] = "Connexion";
		 $this->load->view('sections/header', $data);
  $this->load->view('app');
  $this->load->view('sections/footer');

	

}
	
}

