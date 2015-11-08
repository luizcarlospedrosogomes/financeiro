<?php
class  Despesa extends CI_Controller {
	
   function __construct() {
        parent::__construct();
		$this->load->model('usuarioModel', 'usuario');
		$this->load->model('despesaModel','despesa');
		$this->load->model('categoriaModel','categoria');
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
	
	function listar(){
		$this->despesa->listar($this->session->userdata('id_usuario'));
	}
	public function editar(){
        if(!$this->input->post()){
			$id         = $this->uri->segment(3);
			$query      = $this->despesa->buscar($id);
			$data['qr'] = $query->row();
			$data['categoria_despesa']  = $this->categoria->listarDespesa($this->session->userdata('id_usuario'));
			$this->load->view('despesa_editar_view', $data);
		}
		if($this->input->post()){
			$id        = $this->input->post('id');
			$categoria = $this->input->post('categoria');
			$despesa   = $this->input->post('despesa');
			$valor     = $this->input->post('valor');
			$data      = $this->input->post('data');
		    $this->despesa->atualizar($id,  $categoria, $despesa, $valor, $data);
			$dados['msg'] = "Receita ".$despesa." editada com sucesso";
			$this->load->view('sucesso',$dados);
		}
	}
	public function excluir(){
		$id = $this->uri->segment(3);
		$this->despesa->excluir($id);
		redirect('usuario');
	}
}
?>