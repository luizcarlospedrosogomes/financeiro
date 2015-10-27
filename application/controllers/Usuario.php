<?php
	
class Usuario extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->model('categoria', 'categoria');
        //$this->usuario->logado();
    }
	
	function index(){
		$data['query']   = $this->categoria->listar();
		$data['usuario'] = $this->session->userdata('username');
		$this->load->view('usuario/index_view', $data);
	}
	
}
?>