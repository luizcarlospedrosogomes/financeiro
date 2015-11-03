<?php
class Receita extends CI_Controller {
	
   function __construct() {
        parent::__construct();
		$this->load->model('usuarioModel', 'usuario');
		$this->load->model('receitaModel', 'receita');
        $this->usuario->logado();
    }
	
	function cadastrar(){
		//post categoria receita
		$categoria  = $this->input->post('categoria');
		$usuario    = $this->input->post('usuario');
		$valor      = $this->input->post('valor');
		$data       = $this->input->post('data');
		$receita    = $this->input->post('receita');
		
		echo $usuario." - ".$categoria;
		//validar form
		if($receita != ''){
			$this->receita->inserir($categoria, $valor, $usuario, $receita, $data);
			redirect('usuario');
		}else
		{
			echo "Erro ao cadastrar ".$receita;
		}
	}
	
	function listar(){
		$this->receita->listar($this->session->userdata('id_usuario'));
	}
	function excluir(){
		
		$id = $this->uri->segment(3);
		$this->receita->excluir($id);
		redirect('usuario');
	}
}
?>