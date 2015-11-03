<?php
Class ReceitaModel extends CI_Model{
	
 function inserir($categoria, $valor, $usuario, $receita, $data){
	 $dados = array(
				'categoria'   => $categoria,
				'valor'       => $valor,
				'usuario'     => $usuario,
				'data'        => $data,
				'receita'     => $receita,
				'status'      => 1
	 );
	 
	 $this->db->insert('receita', $dados); 
	// echo $this->db->affected_rows();
	 }
 function listar($usuario){
		$query = $this->db->query("SELECT r.valor, r.receita, r.data, r.id, c.categoria FROM receita r INNER JOIN categoria c ON r.id = c.tipo WHERE  c.tipo = 1 AND r.usuario = ".$usuario." ORDER BY r.data");
	    return $query;
	}
}
?>