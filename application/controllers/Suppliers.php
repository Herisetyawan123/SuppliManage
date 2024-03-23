<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suppliers extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->model("supplier");
        $this->load->library('form_validation');
        if(!$this->user_model->current_user()){
			redirect('/auth');
		}
    }
    
    public function index()
    {
        $suppliers = $this->supplier->getAll();
        $this->load->view('features/supplier/index', [
            'suppliers' => $suppliers,
        ]);
    }

    public function add()
    {
        $this->load->view('features/supplier/add');
    }

    public function edit($id)
    {
        $supplier = $this->supplier->getById($id);
        $this->load->view('features/supplier/edit', ['supplier' => $supplier]);
    }

    public function store()
    {
        $this->supplier->save();
        redirect('/suppliers');
    }

    public function update()
    {
        $this->supplier->update();
        redirect('/suppliers');
    }

    public function delete($id)
    {
        $this->supplier->delete($id);
        redirect('/suppliers');
    }
}