<?php
	
class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->model('UsuarioModel', 'usuario');
        //$this->load->model('UsuarioModel', 'usuario');

    }
    function index() {
		  // VALIDATION RULES
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('senha', 'senha', 'required');
        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');

        $query = $this->usuario->login();
		
        if (($this->form_validation->run() == FALSE) || ($query == NULL)) {
	            $this->load->view('login_view');
        } else {
			   	$qr = $query->row();
				
	           if ($qr->email =='admin@admin.com') { // VERIFICA LOGIN E SENHA
                $data = array(
                    'username'   => $qr->nome,
					'id_usuario' => $qr->id,
					'email'	     => $qr->email,
                    'logged' 	 => true
                );
                $this->session->set_userdata($data);
                redirect('admin');
            } elseif($qr->status == 1) {
                $data = array(
                    'username'          => $qr->nome,
					'id_usuario'	    => $qr->id,
					'email'	            => $qr->email,
					'logged'            => true
                );
                $this->session->set_userdata($data);
                redirect('usuario');
            }else
				redirect('login/index');
        }
    }
	
	public function logout(){
		$this->session->unset_userdata('data_one');
		$this->session->unset_userdata('data_two');
		$this->session->unset_userdata('data_three');
		$this->session->unset_userdata('data_one');
		$this->session->sess_destroy();
		redirect('login/index','refresh');
	}
}
