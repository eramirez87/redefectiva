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
    public function getGrados(){
        return $this->db
            ->select("grado c_grado, COUNT(*) AS total")
            ->select("( SELECT COUNT(*) AS bajas FROM {$this->table} WHERE grado = c_grado AND estatus = 0 ) AS bajas")
            ->group_by('grado')
            ->get($this->table)
            ->result();
    }
    public function getreport($grado){
        $r['resume'] = $this->db
            ->select("grado c_grado, COUNT(*) AS total")
            ->select("( SELECT COUNT(*) AS bajas FROM {$this->table} WHERE grado = c_grado AND estatus = 0 ) AS bajas")
            ->group_by('grado')
            ->having("c_grado",$grado)
            ->get($this->table)
            ->result();
        $r['rows'] = $this->db
            ->where('grado',$grado)
            ->where('estatus',1)
            ->order_by('apat,amat,nombre')
            ->get($this->table)
            ->result();
        return $r;
    }

}