<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Model
{
    private $_table = "supplier";
    public $id;
    public $code_product;
    public $name;


    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $this->db->trans_start();

        $this->db->insert('supplier', [
            'name' => $this->input->post('name'),
        ]);

        $supplier_id = $this->db->insert_id();
        $supplier_code = 'PROD-' . str_pad($supplier_id, 4, '0', STR_PAD_LEFT);
        $this->db->where('id', $supplier_id);
        $this->db->update('supplier', array('supplier_code' => $supplier_code));

        $this->db->trans_complete();
    }

    public function update()
    {
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('supplier', [
            'name' => $this->input->post('name'),
        ]);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->_table);
    }
}