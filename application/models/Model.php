<?php
class Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($table, $data = array())
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    public function update($table, $where = array(), $data = array())
    {
        return $this->db->where($where)->update($table, $data);
    }

    public function getGeneral($table, $where = array())
    {
        $this->db->where($where);
        return $this->db->get($table)->row();
    }
   
    public function getAllGeneral($table, $where = array(), $start = "", $stop="", $column = "", $order = "", $sql = "")
    {
        if ($column != "" and $order != "") $this->db->order_by($column, $order);
        if ($start != "")  $this->db->limit($stop,$start);

        if ($sql != "")  $this->db->where($sql);
        else $this->db->where($where);
        return $this->db->get($table)->result();
    }

    function deleteGeneral($table, $where = array())
    {
        return $this->db->where($where)->delete($table);
    }

    function get_random($table, $limit)
    {
        $this->db->order_by('rand()');
        $this->db->limit($limit);
        return $this->db->get($table)->result();
    }
}
