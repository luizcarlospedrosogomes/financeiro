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
		$query = $this->db->query("SELECT r.valor, r.receita, r.data, r.id, c.categoria FROM receita r INNER JOIN categoria c ON r.categoria = c.id WHERE  c.tipo = 1 AND r.usuario = ".$usuario." GROUP BY r.id ORDER BY r.data");
	    return $query;
	}
  function buscar($id){
    $query = $this->db->query("SELECT * FROM receita WHERE id = ".$id);
    return $query;
 }
 function atualizar($id, $categoria, $receita, $valor, $data){
	$dados = array(
				'receita'   => $receita,
				'data'      => $data,
				'valor'     => $valor,
				'categoria' => $categoria
	 );
	 $this->db->where('id', $id);
	 $this->db->update('receita', $dados);
 }
 function excluir($id){
	$this->db->delete('receita', array('id' => $id));
  }
}
?>