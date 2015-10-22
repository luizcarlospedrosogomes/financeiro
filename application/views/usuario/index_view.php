<!DOCTYPE html>
<html>
    <head>
        <title>Financiro | <usuario></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/.css');?>">
    </head>
	
    <body>]
		<h1>Financeiro</h1>
		<div id="logout">
			<a href="login/logout">Sair</a>
	    </div>
		
		<h2>Cadastrar Receita</h2>
		<div id="form_cadastrar_receita">
			<form method="post" action="usuario/receita">
				<label for="receita">Receita</label>
				<input type="text" name="receita" id="receita"/>
				<label for="valor">Valor</label>
				<input type="text" name="valor" id="valor"/>
				<label for="data">Data</label>
				<input type="text" name="data" id="data">
				<select>Categoria
					<option value="banco">Banco</option>
					 <option value="salario">Salario</option>
				</select>
				<input type="button" value="Adicionar Categoria"/>
				<input type="button" Value="Cadastrar Receita"/>
			</form>
		</div>
		
		<h2>Cadastrar Despesa</h2>	
		<div id="form_cadastrar_despesa">
			<form method="post" action="usuario/despesa">
				<label for="despesa">Despesa</label>
				<input type="text" name="despesa" id="despesa"/>
				<label for="valor">Valor</label>
				<input type="text" name="valor" id="valor"/>
				<label for="data">Data</label>
				<input type="text" name="data" id="data">
				<select>Categoria
					<option value="banco">Banco</option>
					 <option value="salario">Salario</option>
				</select>
				<input type="button" value="Adicionar Categoria"/>
				<input type="button" Value="Cadastrar Despesa"/>
			</form>
		</div>
		
		<h3>Receita/Despesas</h3>
		<div id="listar_receita_despesas">
			
		</div>
    </body>
</html>