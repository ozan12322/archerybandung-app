<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getMenuById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                  FROM `user_sub_menu` JOIN `user_menu`
                  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                ";
        return $this->db->query($query)->result_array();
    }
    public function delete_menu($where, $table){
        $this->db->where($where);
		$this->db->delete($table);
    }
    public function delete_sub_menu($where, $table){
        $this->db->where($where);
		$this->db->delete($table);
    }
    public function edit_menu($where, $table){
        return $this->db->get_where($table, $where);
    }
    public function update_menu($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function edit_sub_menu($where, $table){
        return $this->db->get_where($table, $where);
    }
    public function update_sub_menu($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
