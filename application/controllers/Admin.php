<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('usuario', 'usuario');
        $this->usuario->logado();
    }
    
    public function index() {
	//cadastrar usuario
	$this->load->library('form_validation');
	$this->form_validation->set_rules('nome', 'Nome', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('senha', 'senha', 'required');
        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
		
<<<<<<< HEAD
		//carregar model
		$this->load->model('usuarioModel', 'usuario');
		
		$nome  = $this->input->post('nome');
		$email = $this->input->post('email');
		$senha = $this->input->post('senha');
		if ($this->form_validation->run() == FALSE) {
=======
	$nome  = $this->input->post('nome');
	$email = $this->input->post('email');
	$senha = $this->input->post('senha');
	if ($this->form_validation->run() == FALSE) {
>>>>>>> origin/master
	           // echo "Erro ao insirir dados	";
        } else {
		$this->usuario->inserir($nome, $email, $senha);
		redirect('admin');
		}
	//listar usuario
        $data['query'] = $this->usuario->listar();
	$this->load->view('admin_view', $data);
        
    }
	public function excluir(){
		
		$this->load->model('Usuario', 'usuario');
		$id = $this->uri->segment(3);
		$this->usuario->excluir($id);
		redirect('admin');
	}
	public function buscar(){
		$id    = $this->uri->segment(3);
		$data['query'] = $this->usuario->buscar($id);
		$this->load->view('admin-editar_view', $data);
	}
	
	public function editar(){
		$this->load->model('Usuario', 'usuario');
		$id     = $this->input->post('id');
		$nome   = $this->input->post('nome');
		$email  = $this->input->post('email');
		$senha  = $this->input->post('senha');		
		$status = $this->input->post('status');
		$this->usuario->update($id, $nome, $email, $senha, $status);
	}
	
}			
