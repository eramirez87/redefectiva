<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Alumnos_model','alumnos');
	}
	public function index(){
		$param['head'] = $this->load->view('template/head',false,true);
		$param['nav'] = $this->load->view('template/nav',false,true);
		$param['alumnos'] = $this->alumnos->get_all();
		$this->load->view('list',$param);
	}
	public function create(){
		$param['head'] = $this->load->view('template/head',false,true);
		$param['nav'] = $this->load->view('template/nav',false,true);
		$param['title'] = "Nuevo Alumno";
		$param['action'] = base_url('alumnos/store');
		$this->load->view('form',$param);
	}
	public function edit($id){
		$param['head'] = $this->load->view('template/head',false,true);
		$param['nav'] = $this->load->view('template/nav',false,true);
		$param['alumno'] = $this->alumnos->get($id);
		$param['title'] = "Editar Alumno";
		$param['action'] = base_url('alumnos/update/'.$id);
		$this->load->view('form',$param);
	}
}
