<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Financeiro | Pessoal</title>
</head>
<body>

<div id="container">
	<h1>Bem vindo ao seu Gerenciador de Finanças -> Administrador 2</h1>
</div>
<div id="incluir_usuario">
	<p>
		<label for="nome">Nome</label>
		<input id="nome" name="nome" type="text"/>
	</p>
	
	<p>
		<label for="senha">Senha</label>
		<input id="senha" name="senha" type="text"/>
	</p>
	
	<p>
		<label for="senha_rpt">Repita a senha</label>
		<input id="senha_rpt" name="senha_rpt" type="text"/>
	</p>
	
	<input type="button" value="Criar"/>
</div>
<div id="listar_usuario">
<?php
	foreach ($usuario->result() as $row)
{
        echo $row->title;
}
?>
</div>
</body>
</html>