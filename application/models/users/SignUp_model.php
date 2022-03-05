<?php

class SignUp_model extends CI_Model
{
	private $table = 'users';
	
	public function inscription($name, $pseudo, $email, $birthday, $gender, $phone, $password)
	{
		if(!is_string($name) OR !is_string($name) OR empty($pseudo) OR empty($pseudo))
		{
			return false;
		}
        if(!is_string($email) OR !is_string($email) OR empty($birthday) OR empty($birthday))
		{
			return false;
		}
        if(!is_string($gender) OR !is_string($gender) OR empty($phone) OR empty($phone))
		{
			return false;
		}
        if(!is_string($password) OR !is_string($password) )
		{
			return false;
		}
		
		return $this->db->set(array(
            'userName' => $name,
			'userPseudo' => $pseudo,
            'userEmail' => $email,
            'userPassword' => $password,
            'userPhone' => $phone,
            'userGender' => $gender,
            'userBirthday' => $birthday,
            'userStatus' => 1,
            'isUser' => 1,
            'isAdmin' => 0,),)
			->set('userSignUpAt', 'NOW()', false)
			->insert($this->table);
	}
	
	public function count()
	{
		return $this->db->count_all($this->table);
	}

    function login(array $array) {
        $this->load->helper("form");

        $login = $array["email"];
        $password = $array["password"];
        $request = $this->db->query("SELECT * FROM users WHERE userEmail='{$login}'");
    
        if (mysqli_num_rows($request) == 0) {
        header("location:index.php?views/users/login.php&conn&faux=1&email=" . $array['email']);
        } else {
    
            $result = mysqli_fetch_assoc($request);
    
    
                if ($result['userStatus'] == true) {
    
                    $_SESSION["user_id"] = $result["userId"];
                    $_SESSION["user_name"] = $result["userName"];
                    $_SESSION["user_pseudo"] = $result["userPseudo"];
                    $_SESSION["user_email"] = $result["userEmail"];
                    $_SESSION["user_phone"] = $result["userPhone"];
                    $_SESSION["user_gender"] = $result["userGender"];
                    $_SESSION["user_birthday"] = $result["userBirthday"];
                    $_SESSION["singned"] = $result["userSignUpAt"];
                    $_SESSION["user_status"] = $result["userStatus"];
                    $_SESSION["is_admin"] = $result["isAdmin"];
                    $_SESSION["is_user"] = $result["isUser"];
                    $_SESSION["is_student"] = $result["isStudent"];
                    $_SESSION["user_avatar"] = $result["userAvatar"];
                    $_SESSION["user_biographie"] = $result["userBiographie"];
     
                    if ($_SESSION["is_admin"] == true) {
                        $username = $this->input->post('username');
                        $password = $this->input->post('password');
                        $this->auth_user->login( $username, $password);
                        redirect('index');
                    } else{
                        $email = $this->input->post('email');
                        $password = $this->input->post('password');
                        $this->auth_user->login( $email, $password);
                        redirect('index');
                    }
                } else {
                    return false;
                }

        }
    }
    
    function deconnexion() {
        $this->auth_user->logout();
        redirect('index');
    }
	

    public function profil($id)
	{
		if(!is_integer($id) OR $id)
		{
			return false;
		}
		
		return $this->db->select('*')
				->from($this->table)
                ->where('userId', $id)
				->get()
				->result();
	}

}

/* End of file livreor_model.php */
/* Location: ./application/models/livreor_model.php */