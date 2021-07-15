<?php
class Alumnos extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model("Alumnos_model",'alumnos');
    }

    public function store(){
        $post = $this->input->post();
        $this->alumnos->save($post);
        header('location: '.base_url());
    }
    public function update($data){
        $post = $this->input->post();
        $this->alumnos->update($post);
        header('location: '.base_url());
    }
    public function delete(){
        $post = $this->input->post('matricula');
        $a = [
            'matricula'=> $post,
            'estatus' => 0
        ];
        $this->alumnos->update($a);
        echo json_encode(['success'=>true]);
    }
    public function getReport($grado){
        echo json_encode(
            $this->alumnos->getreport($grado)
        );
    }
}