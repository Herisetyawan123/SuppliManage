<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "user";
    public $id;
    public $email;
    public $password;
    public $is_login = false;
    const SESSION_KEY = 'id';

    public function __construct()
    {
        parent::__construct();
    }

    public function rules()
    {
        return [
            ['field' => 'email',
            'label' => 'email',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'password',
            'rules' => 'numeric'],
        ];
    }

    public function current_user()
	{
		if (!$this->session->has_userdata(self::SESSION_KEY)) {
			return null;
		}

		$user_id = $this->session->userdata(self::SESSION_KEY);
		$query = $this->db->get_where($this->_table, ['id' => $user_id]);
		return $query->row();
	}

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function checkEmail($email)
    {
        return $this->db->get_where($this->_table, ["email" => $email])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->email = $post["email"];
        $this->password = $post["password"];
        return $this->db->insert($this->_table, $this);
    }

    public function login()
    {
        $post = $this->input->post();
        $user = $this->checkEmail($post['email']);
        if($user){
            if($user->password == $post["password"]){
                return $this->session->set_userdata(self::SESSION_KEY, $user->id);
            }
        }else{
            return false;
        }
    }

    public function logout()
	{
		$this->session->unset_userdata(self::SESSION_KEY);
		return !$this->session->has_userdata(self::SESSION_KEY);
	}
}