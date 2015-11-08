<?php

Class UsuarioModel extends CI_Model
{
 function login()
 {
   $this ->db->where('email', $this->input->post('email'));
   $this ->db->where('senha', $this->input->post('senha'));
   $this ->db->limit(1);

   $query = $this->db->get('usuario');
   if($query->num_rows() == 1)
   {
     return $query;
   }
 
 }
 
 function logado(){
	$logged = $this->session->userdata('logged');
        if (!isset($logged) || $logged != true) {
            echo 'Voce nao tem permissao para entrar nessa pagina. <a href="#">Efetuar Login</a>';
            die();
        }
 }
 function listar(){
	 
	 $query = $this->db->query("SELECT * FROM usuario WHERE id >2 order by id");
	 return $query;
 }
 
 function inserir($nome, $email, $senha){
	 $dados = array(
				'nome'   => $nome,
				'email'  => $email,
				'senha'  => $senha,
				'status' =>1
	 );
	 
	 $this->db->insert('usuario', $dados); 
	 //echo $this->db->affected_rows();
 }
 
 function buscar($id){
    $query = $this->db->query("SELECT * FROM usuario WHERE id = ".$id);
    return $query;
 }
 
 function excluir($id){
	 $this->db->delete('usuario', array('id' => $id)); 
 }
 
 function atualizar($id, $nome, $email, $senha, $status){
	$dados = array(
				'nome'   => $nome,
				'email'  => $email,
				'senha'  => $senha,
				'status' => $status
	 );
	 $this->db->where('id', $id);
	 $this->db->update('usuario', $dados);
 }
}
?>
