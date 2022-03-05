<?php

class Contact_model extends CI_Model
{
	private $table = 'contacts';
	
	public function ajouter_commentaire($name, $email, $sujet, $message)
	{
        
        $this->load->model('contact_model', 'contactManager');

		if(!is_string($name) OR !is_string($name) OR empty($email) OR empty($email) OR empty($sujet) OR empty($sujet) OR empty($message) OR empty($message))
		{
			return false;
		}

        return $this->db->set(array('contactName' => $name,'contactEmail' => $email, 'contactSujet' => $sujet, 'contactContent' => $message))
        ->set('contactCreatedAt', 'NOW()', false)
        ->insert($this->table);
	}
	

	public function count()
	{
		return $this->db->count_all($this->table);
	}

    public function get_messages($nb, $debut = 0)
	{
		if(!is_integer($nb) OR $nb < 1 OR !is_integer($debut) OR $debut < 0)
		{
			return false;
		}
		
		return $this->db->select('`contactId`, `contactName`, `contactEmail`, `contactSujet`, `contactContent`, DATE_FORMAT(`contactCreatedAt`,\'%d/%m/%Y &agrave; %H:%i:%s\') AS \'contactCreatedAt\'', false)
				->from($this->table)
				->order_by('contactId', 'desc')
				->limit($nb, $debut)
				->get()
				->result();
	}
}


