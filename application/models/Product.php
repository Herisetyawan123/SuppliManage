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

    public function update($product_code, $qty)
    {
        $this->db->where('product_code', $product_code);
        $this->db->update('qty', $qty);
        return $this->db->affected_rows();
    }
}