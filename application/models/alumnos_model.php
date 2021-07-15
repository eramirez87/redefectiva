<?php
class Alumnos_model extends CI_Model{
    private $table = 'alumnos';
    public function __construct(){
        parent::__construct();
    }
    public function save($data){
        $this->db->insert($this->table,$data);
        return $this->db->insert_id();
    }
    public function update($data){
        $this->db->where('matricula',$data['matricula']);
        return $this->db->update($this->table,$data);
    }
    public function delete($matricula){
        $this->db->where('matricula',$matricula);
        return $this->db->delete($this->table);
    }
    public function get_all(){
        $this->db->where('estatus',1);
        return $this->db->get($this->table)->result();
    }
    public function get($id){
        $this->db->where('matricula',$id);
        return $this->db->get($this->table)->row();
    }

}