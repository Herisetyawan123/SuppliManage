<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->model("product");
        $this->load->library('form_validation');
        if(!$this->user_model->current_user()){
			redirect('/auth');
		}
    }

    public function index()
    {
        $products = $this->product->get_product_with_stock();
        $this->load->view('features/product/index', [
            'products' => $products,
        ]);
    }

    public function add()
    {
        $this->load->view('features/product/add');
    } 
    
    public function edit($id)
    {
        $product = $this->product->getById($id);
        $this->load->view('features/product/edit', [
            'product' => $product,
        ]);
    } 

    public function update()
    {
        $this->product->update();
        redirect('/products');
    }

    public function store()
    {
        $this->product->insert();
        redirect('/products');
    }

    public function delete($product_code)
    {
        $this->product->delete($product_code);
        redirect('/products');
    }
}