<?php
	
class Usuario extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->model('categoria', 'categoria');
        //$this->usuario->logado();
    }
	
	function index(){
		$data['categoria_receita']          = $this->categoria->listarReceita($this->session->userdata('username'););
		$data['categoria_despesa']          = $this->categoria->listarDespesa($this->session->userdata('username'););
		$data['usuario']        = $this->session->userdata('username');
		$data['usaurio_id']     = $this->session->userdata('id');
		$data['usuario_email']  = $this->session->userdata('email');
		$this->load->view('usuario/index_view', $data);
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
}
?>