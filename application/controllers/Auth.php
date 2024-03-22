<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->library('form_validation');
    }

	public function index()
	{
		if($this->user_model->current_user()){
			redirect('/dashboard');
		}
		$this->load->view('layouts/auth/header');
		$this->load->view('auth/signin');
		$this->load->view('layouts/auth/footer');
	}

	public function signup()
	{
		if($this->user_model->current_user()){
			redirect('/dashboard');
		}
		$this->load->view('layouts/auth/header');
		$this->load->view('auth/signup');
		$this->load->view('layouts/auth/footer');
	}

	public function register()
	{
		$user = $this->user_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

		if($user->checkEmail($_POST["email"])){
			redirect('/auth/register');
		}else{
			$user->save();
			redirect('/auth');
		}
	}

	public function login()
	{
		$user = $this->user_model;
		if($user->login()){
			redirect('/dashboard');
		}else{
			redirect('/auth');
		}
	}

	public function logout()
	{
		$this->user_model->logout();
	}
}
