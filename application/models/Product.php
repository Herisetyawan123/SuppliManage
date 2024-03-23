<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model
{
    private $_table = "product";
    public $id;
    public $code_product;
    public $name;
    public $unit;
    public $qty;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function getByProductCode($product_code)
    {
        return $this->db->get_where($this->_table, ["product_code" => $product_code])->row();
    }

    public function insert()
    {
        $this->db->trans_start();
        $product_code = uniqid('PROD-');
        $this->db->insert('product', [
            'product_code' => $product_code,
            'name' => $this->input->post('name'),
            'unit' => $this->input->post('unit'),
            'price' => $this->input->post('price'),
        ]);
        $this->db->insert('stock', [
            'product_code' => $product_code,
            'qty' => $this->input->post('qty'),
        ]);
        $this->db->trans_complete();
    }

    public function update($product_code, $qty)
    {
        $this->db->where('product_code', $product_code);
        $this->db->update('qty', $qty);
        return $this->db->affected_rows();
    }

    public function get_product_with_stock() {
        $this->db->select('product.*, stock.qty');
        $this->db->from('product');
        $this->db->join('stock', 'product.product_code = stock.product_code', 'left');
        $query = $this->db->get();
        return $query->result();
    }
}