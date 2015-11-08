<?php
class Receita extends CI_Controller {
	
   function __construct() {
        parent::__construct();
		$this->load->model('usuarioModel', 'usuario');
		$this->load->model('receitaModel', 'receita');
		$this->load->model('categoriaModel', 'categoria');
        $this->usuario->logado();
    }
	
	function cadastrar(){
		//post categoria receita
		$categoria  = $this->input->post('categoria');
		$usuario    = $this->input->post('usuario');
		$valor      = $this->input->post('valor');
		$data       = $this->input->post('data');
		$receita    = $this->input->post('receita');
		
		if($receita != ''){
			$this->receita->inserir($categoria, $valor, $usuario, $receita, $data);
			echo "Cadastro realizado com sucesso.";
			redirect('usuario', 'refresh',3);
		}else
		{
			echo "Ocorreu um erro ao grava a receita ".$receita.".<p>Você será redicionado para a pagina inicial em 5s ou pode voltar ao <a href='javascript:history.back()'>cadastro</a></p>";
			redirect('usuario','refresh',5);	
		}
	}
	
	function listar(){
		$this->receita->listar($this->session->userdata('id_usuario'));
	}
	public function editar(){
        if(!$this->input->post()){
			$id         = $this->uri->segment(3);
			$query      = $this->receita->buscar($id);
			$data['qr'] = $query->row();
			$data['categoria_receita']  = $this->categoria->listarReceita($this->session->userdata('id_usuario'));
			$this->load->view('receita_editar_view', $data);
		}
		if($this->input->post()){
			$id        = $this->input->post('id');
			$categoria = $this->input->post('categoria');
			$receita   = $this->input->post('receita');
			$valor     = $this->input->post('valor');
			$data      = $this->input->post('data');
		    $this->receita->atualizar($id,  $categoria, $receita, $valor, $data);
			$dados['msg'] = "Receita ".$receita." editada com sucesso";
			$this->load->view('sucesso',$dados);
		}
	}
	
	function excluir(){
		
		$id = $this->uri->segment(3);
		$this->receita->excluir($id);
		redirect('usuario');
	}
}
?>