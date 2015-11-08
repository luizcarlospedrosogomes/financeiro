<?php
	
class Usuario extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->model('categoriaModel', 'categoria');
		$this->load->model('usuarioModel', 'usuario');
		$this->load->model('receitaModel', 'receita');
		$this->load->model('despesaModel', 'despesa');
        $this->usuario->logado();
    }
	
	function index(){
		$data['listar_receita']             = $this->receita->listar($this->session->userdata('id_usuario'));
		$data['listar_despesa']             = $this->despesa->listar($this->session->userdata('id_usuario'));
		$data['categoria_receita']          = $this->categoria->listarReceita($this->session->userdata('id_usuario'));
		$data['categoria_despesa']          = $this->categoria->listarDespesa($this->session->userdata('id_usuario'));
		$data['usuario']       				= $this->session->userdata('username');
		$data['usuario_id']     			= $this->session->userdata('id_usuario');
		$data['usuario_email']  			= $this->session->userdata('email');
		$this->load->view('usuario/index_view', $data);
	}
	
}
?>