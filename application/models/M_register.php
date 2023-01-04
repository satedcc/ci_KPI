<?php

class M_register extends CI_Model
{
    private $table = "tb_user";
    function get()
    {
        return $this->db->query("SELECT * FROM tb_user");
    }
    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
    }
    public function cekEmail($id)
    {
        return $this->db->get_where($this->table, ["email" => $id])->num_rows();
    }
    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }
    public function update($data, $id)
    {
        return $this->db->update($this->table, $data, array('id' => $id));
    }
    public function updateByEmail($data, $id)
    {
        return $this->db->update($this->table, $data, array('email' => $id));
    }
    public function cekToken($id)
    {
        return $this->db->get_where($this->table, ["token_id" => $id])->num_rows();
    }
}
