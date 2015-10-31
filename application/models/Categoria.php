<?php

Class Categoria extends CI_Model
{
 function listarReceita($usuario){
	 
	 $query = $this->db->query("SELECT * FROM categoria WHERE tipo =1 ORDER BY categoria");
	 return $query;
 }
 
  function listarDespesa$usuario){
	 
	 $query = $this->db->query("SELECT * FROM categoria WHERE tipo =2 ORDER BY categoria");
	 return $query;
 }
 
 function inserir($categoria, $tipo, $usuario){
	 $dados = array(
				'categoria'   => $categoria,
				'tipo'  => $tipo,
				'usuario'  => $usuario,
				'data' =>date("d/m/y")
	 );
	 
	 $this->db->insert('categoria', $dados); 
	// echo $this->db->affected_rows();
	 
 }
}
 ?>