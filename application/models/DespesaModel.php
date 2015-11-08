<?php

Class DespesaModel extends CI_Model
{
 function inserir($categoria, $valor, $usuario, $despesa, $data){
	 $dados = array(
				'categoria'   => $categoria,
				'valor'       => $valor,
				'usuario'     => $usuario,
				'data'        => $data,
				'despesa'     => $despesa,
				'status'      => 1
	 );
	 
	 $this->db->insert('despesas', $dados); 
	// echo $this->db->affected_rows();
	 }
 function listar($usuario){
		$query = $this->db->query("SELECT d.valor, d.despesa, d.data, d.id, c.categoria FROM despesas d INNER JOIN categoria c ON d.categoria = c.id WHERE  c.tipo = 2 AND d.usuario = ".$usuario." GROUP BY d.id ORDER BY d.data");	    
		return $query;
 }
  function buscar($id){
    $query = $this->db->query("SELECT * FROM despesas WHERE id = ".$id);
    return $query;
 }
 function atualizar($id, $categoria, $despesa, $valor, $data){
	$dados = array(
				'despesa'   => $despesa,
				'data'      => $data,
				'valor'     => $valor,
				'categoria' => $categoria
	 );
	 $this->db->where('id', $id);
	 $this->db->update('despesas', $dados);
 }
  function excluir($id){
	$this->db->delete('despesas', array('id' => $id));
  }
}
?>