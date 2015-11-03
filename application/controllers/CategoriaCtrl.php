<?php
class CategoriaCtrl extends CI_Controller {
	
   function __construct() {
        parent::__construct();
		$this->load->model('usuarioModel', 'usuario');
		$this->load->model('categoria', 'categoria');
        $this->usuario->logado();
    }
	
	function categoriaReceita(){
		//post categoria receita
		$categoria  = $this->input->post('cat_receita');
		$usuario = $this->input->post('usuario');
		$tipo = $this->input->post('tipo');
		
		//validar form
		if($categoria != ''){
			$this->categoria->inserir($categoria, $tipo, $usuario);
			redirect('usuario');
		}else
		{
			//tratar
		}
	}
	
	function categoriaDespesa(){
		//post categoria receita
		$categoria  = $this->input->post('cat_receita');
		$usuario = $this->input->post('usuario');
		$tipo = $this->input->post('tipo');
		
		//validar form
		if($categoria != ''){
			$this->categoria->inserir($categoria, $tipo, $usuario);
			redirect('usuario');
		}else
		{
			//tratar
		}
			
	}
	
	public function excluir(){
		
		$id = $this->uri->segment(3);
		$this->categoria->excluir($id);
		redirect('usuario');
	}
}
?>