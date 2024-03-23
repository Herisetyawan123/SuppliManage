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
        $this->db->select('product.*, stock.qty');
        $this->db->from('product');
        $this->db->join('stock', 'product.product_code = stock.product_code', 'left');
        $this->db->where('product.id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function getByProductCode($product_code)
    {
        return $this->db->get_where($this->_table, ["product_code" => $product_code])->row();
    }

    public function insert()
    {
        $this->db->trans_start();

        $this->db->insert('product', [
            'name' => $this->input->post('name'),
            'unit' => $this->input->post('unit'),
            'price' => $this->input->post('price'),
        ]);

        $product_id = $this->db->insert_id();
        $product_code = 'PROD-' . str_pad($product_id, 4, '0', STR_PAD_LEFT);
        $this->db->where('id', $product_id);
        $this->db->update('product', array('product_code' => $product_code));


        $this->db->insert('stock', [
            'product_code' => $product_code,
            'qty' => $this->input->post('qty'),
        ]);
        $this->db->trans_complete();
    }

    public function update()
    {
        $this->db->trans_start();

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('product', [
            'name' => $this->input->post('name'),
            'unit' => $this->input->post('unit'),
            'price' => $this->input->post('price'),
        ]);
        
        $this->db->where('product_code', $this->input->post('product_code'));
        $this->db->update('stock', [
            'qty' => $this->input->post('qty'),
        ]);

        // Selesaikan transaksi database
        $this->db->trans_complete();

        // Kembalikan status transaksi
        return $this->db->trans_status();
    }

    public function get_product_with_stock() {
        $this->db->select('product.*, stock.qty');
        $this->db->from('product');
        $this->db->join('stock', 'product.product_code = stock.product_code', 'left');
        $query = $this->db->get();
        return $query->result();
    }

    public function delete($product_code)
    {
        $this->db->trans_start();
        // delete product
        $this->db->where('product_code', $product_code);
        $this->db->delete('product');

        // delete stock
        $this->db->where('product_code', $product_code);
        $this->db->delete('stock');
        $this->db->trans_complete();

        return $this->db->affected_rows();
    }
}