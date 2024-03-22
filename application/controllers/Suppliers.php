<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suppliers extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->library('form_validation');
        if(!$this->user_model->current_user()){
			redirect('/auth');
		}
    }
    
    public function index()
    {
        $this->load->view('features/supplier/index');
    }
}