<?php
class  Despesa extends CI_Controller {
	
   function __construct() {
        parent::__construct();
		$this->load->model('usuarioModel', 'usuario');
		$this->load->model('despesaModel','despesa');
		$this->usuario->logado();
    }
	
	function cadastrar(){
		
		//post categoria receita
		$categoria  = $this->input->post('categoria');
		$usuario    = $this->input->post('usuario');
		$valor      = $this->input->post('valor');
		$data       = $this->input->post('data');
		$despesa    = $this->input->post('despesa');
		
		echo $usuario." - ".$categoria;
		//validar form
		if($despesa != ''){
			$this->despesa->inserir($categoria, $valor, $usuario, $despesa, $data);
			redirect('usuario');
		}else
		{
			echo "<h4>Erro ao cadastrar ".$despesa.".</h4>";
		}
	}
	
	public function excluir(){
		$id = $this->uri->segment(3);
		$this->receita->excluir($id);
		redirect('usuario');
	}
}
?>