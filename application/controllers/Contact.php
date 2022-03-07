<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

  const NB_MESSAGE_PAR_PAGE = 6;
	
	public function __construct()
	{
		parent::__construct();
		
		//	Chargement des ressources pour tout le contrôleur
		$this->load->model('Contact_model', 'contactManager');
	}

  // ------------------------------------------------------------------------
	
	public function index($g_nb_message = 1)
	{
		$this->voir($g_nb_message);
	}
	
// ------------------------------------------------------------------------
	
public function voir($g_nb_message = 1)
{
	$this->load->library('pagination');
	
	$data = array();
	
	//	Récupération du nombre total de messages sauvegardés dans la base de données
	$nb_message_total = $this->contactManager->count();
	
	//	On vérifie la cohérence de la variable $_GET
	if($g_nb_message > 1)
	{
		//	La variable $_GET semblent être correcte. On doit maintenant
		//	vérifier s'il y a bien assez de messages dans la base de données.
		if($g_nb_message <= $nb_message_total)
		{
			//	Il y a assez de messages dans la base de données.
			//	La variable $_GET est donc cohérente.
			
			$nb_message = intval($g_nb_message);
		}
		else
		{
			//	Il n'y pas assez de messages dans la base de données.
			
			$nb_message = 1;
		}
	}
	else
	{
		//	La variable $_GET "nb_message" est erronée. On lui donne une
		//	valeur par défaut.
		
		$nb_message = 1;
	}
	
	//	Mise en place de la pagination
	$this->pagination->initialize(array('base_url' => base_url() . 'index.php/contact/voir/',
					    'total_rows' => $nb_message_total,
					    'per_page' => self::NB_MESSAGE_PAR_PAGE)); 
	
	$data['pagination'] = $this->pagination->create_links();
	$data['nb_messages'] = $nb_message_total;
	
	//	Maintenant que l'on connaît le numéro du message, on peut lancer
	//	la requête récupérant les messages dans la base de données.
	$data['messages'] = $this->contactManager->get_messages(self::NB_MESSAGE_PAR_PAGE, $nb_message-1);
	
	//	On charge la vue
  $data["title"] = "Contact";

  
  $this->load->view('sections/header', $data);
  $this->load->view('sections/contact', $data);
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
	
	if($this->form_validation->run())
	{
		//	Nous disposons d'un pseudo et d'un commentaire sous une bonne forme
		
		//	Sauvegarde du commentaire dans la base de données
		$this->contactManager->ajouter_commentaire($this->input->post('name'),
							   $this->input->post('email'),
                 $this->input->post('sujet'),
                 $this->input->post('message'),);
		
		//	Affichage de la confirmation
    	$data["title"] = "Contact";
		 $this->load->view('sections/header', $data);
		$this->load->view('sections/contact/confirm');
		$this->load->view('sections/footer');

	}
	else
	{
		$data["title"] = "Ajout | Contact";
		$this->load->view('sections/header', $data);
		$this->load->view('sections/fcontact', $data);
		$this->load->view('sections/footer');
  
	}
}
	


}