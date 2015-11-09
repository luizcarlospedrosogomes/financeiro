<?php
class Relatorio extends CI_Controller {
	
   function __construct() {
        parent::__construct();
		$this->load->model('usuarioModel', 'usuario');
		$this->usuario->logado();
		$this->load->library('fpdf/fpdf', 'fpdf');
		$this->load->model('despesaModel', 'despesa');
		$this->load->model('receitaModel', 'receita');
		
   }
    function receita(){
	  	$data['listar_receita']             = $this->receita->listar($this->session->userdata('id_usuario'));
		$data['usuario']       				= $this->session->userdata('username');
		$data['usuario_id']     			= $this->session->userdata('id_usuario');
		$data['usuario_email']  			= $this->session->userdata('email');
	    $this->load->view('relatorio/receita', $data);
   }
   function despesa(){
	  	$data['listar_despesa']             = $this->despesa->listar($this->session->userdata('id_usuario'));
		$data['usuario']       				= $this->session->userdata('username');
		$data['usuario_id']     			= $this->session->userdata('id_usuario');
		$data['usuario_email']  			= $this->session->userdata('email');
	    $this->load->view('relatorio/despesa', $data);
   }
  
}
?>