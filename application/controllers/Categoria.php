<?php
class Categoria extends CI_Controller {
	
   function __construct() {
        parent::__construct();
		$this->load->model('usuarioModel', 'usuario');
		$this->load->model('categoriaModel', 'categoria');
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
			
			//redirect('usuario', 'refresh:3');
		}else
		{
			//tratar
		}
			
	}

	public function editar(){
        if(!$this->input->post()){
			$id         = $this->uri->segment(3);
			$query      = $this->categoria->buscar($id);
			$data['qr'] = $query->row();
			$this->load->view('cat_editar_view', $data);
		}
		if($this->input->post()){
			$id        = $this->input->post('id');
			$categoria = $this->input->post('categoria');
		    $this->categoria->atualizar($id,  $categoria);
			$data['msg'] = "Categoria ".$categoria." editada com sucesso";
			$this->load->view('sucesso',$data);
		}
		
	}
	public function excluir(){
		
		$id = $this->uri->segment(3);
		$this->categoria->excluir($id);
		redirect('usuario');
	}
}
?>