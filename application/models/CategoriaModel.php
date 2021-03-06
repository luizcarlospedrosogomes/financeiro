<?php

Class CategoriaModel extends CI_Model
{
 function listarReceita($usuario){
	 
	 $query = $this->db->query("SELECT * FROM categoria WHERE tipo = 1 and usuario = ".$usuario." ORDER BY categoria");
	 return $query;
 }
 
  function listarDespesa($usuario){
	 
	 $query = $this->db->query("SELECT * FROM categoria WHERE tipo = 2 and usuario = ".$usuario." ORDER BY categoria");
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
 
  function buscar($id){
    $query = $this->db->query("SELECT * FROM categoria WHERE id = ".$id);
    return $query;
 }
 
  function atualizar($id, $categoria){
	$dados = array(
				'categoria'   => $categoria
	 );
	 $this->db->where('id', $id);
	 $this->db->update('categoria', $dados);
 }
 
  function excluir($id){
	 $this->db->delete('categoria', array('id' => $id)); 
 }
  
}
 ?>