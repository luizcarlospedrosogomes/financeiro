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
		$query = $this->db->query("SELECT r.valor, r.receita, r.data, r.id, c.categoria FROM receita r INNER JOIN categoria c ON r.id = c.tipo WHERE  c.tipo = 2 AND r.usuario = ".$usuario." ORDER BY r.data");
	    return $query;
 }
}
?>