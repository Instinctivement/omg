<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_user extends CI_Model {

    public $_email;
    public $_id;
    public $_name;

    public function __construct() {
        parent::__construct();
        $this->load_from_session();
    }

    public function __get( $key) {
        $method_name = 'get_property_' . $key;
        if (method_exists($this, $method_name)) {
            return $this->$method_name();
        } else {
            return parent::__get( $key);
        }
    }

    protected function clear_data() {
        $this->_id = NULL;
        $this->_email = NULL;
        $this->_name = NULL;
    }

    protected function clear_session() {
        $this->session->auth_user = NULL;
    }

    protected function get_property_id() {
        return $this->_id;
    }

    protected function get_property_is_connected() {
        return $this->_id !== NULL;
    }

    protected function get_property_email() {
        return $this->_email;
    }

    protected function get_property_name() {
        return $this->_name;
    }

    protected function load_from_session() {
        if ($this->session->auth_user) {
            $this->_id = $this->session->auth_user['id'];
            $this->_email = $this->session->auth_user['email'];
           $this->_name = $this->session->auth_user['user_name'];
        //    var_dump($this->session->auth_user['user_name']);
        //    die();
        } else {
            $this->clear_data();
        }
    }

    protected function load_user( $email) {
        return $this->db
                    ->select('*')
                    ->from('users')
                    ->where('userEmail', $email)
                    ->where('userStatus', '1')
                    ->get()
                    ->first_row();
    }

    public function login( $email, $password) {
        $user = $this->load_user( $email);
        // if (( $user !== NULL) && password_verify($password, $user->userPassword)) {
            $this->_id = $user->userId;
            $this->_email = $user->userEmail;
            $this->_name = $user->userName;
            $this->save_session($email);
        // } else {
        //     $this->logout();
        // }
    }

    public function logout() {
        $this->clear_data();
        $this->clear_session();
    }

    protected function save_session($email) {
        $user = $this->load_user($email);
        $this->session->auth_user = [
            'id' => $this->_id,
            'email' => $this->_email,
            'email' => $this->_name,

            'user_id' => $user->userId,
            'user_name' => $user->userName,
            'user_pseudo' => $user->userPseudo,
            'user_email' => $user->userEmail,
            'user_phone' => $user->userPhone,
            'user_gender' => $user->userGender,
            'user_birthday' => $user->userBirthday,
            'singned' => $user->userSignUpAt,
            'user_status' => $user->userStatus,
            'is_admin' => $user->isAdmin,
            'is_user' => $user->isUser,
            'user_avatar' => $user->userAvatar,
            'user_biographie' => $user->userBiographie
        ];
    }
}