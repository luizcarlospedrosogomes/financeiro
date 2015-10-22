<?php
	
class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
		  // VALIDATION RULES
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('senha', 'senha', 'required');
        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');


        // MODELO 
        $this->load->model('Usuario', 'usuario');
        $query = $this->usuario->login();
		
		
		///$row = $query->row();
		
        if ($this->form_validation->run() == FALSE) {
	            $this->load->view('login_view');
        } else {
	           if ($query == 1) { // VERIFICA LOGIN E SENHA
                $data = array(
                    'username' => $this->input->post('email'),
					//'id'	   
                    'logged' => true
                );
                $this->session->set_userdata($data);
                redirect('admin');
            } elseif(isset($row)) {
                $data = array(
                    'username' => $this->nome,
					'id'	   => $this->id,
					'email'	   => $this->email,
					'logged'   => true
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
