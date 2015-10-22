<?php

Class Categoria extends CI_Model
{
 function listar(){
	 
	 $query = $this->db->query("SELECT * FROM categoria  order by categoria");
	 return $query;
 }
}
 ?>