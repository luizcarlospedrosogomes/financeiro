<!DOCTYPE html>
<html>
    <head>
        <title>Financiro | <?php echo $usuario;?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/.css');?>">
    </head>
	
    <body>
	<?php // var_dump($categoria_receita);?>
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
					<?php
					foreach ($categoria_receita->result_array() as $cat)
					{?>
					
					<option value="<?php echo $cat['id'];?>"><?php echo $cat['categoria'];?></option>
					<?php }?>
				</select>
				<input type="button" value="Adicionar Categoria"/>
				<button type="submit" value="Cadastrar">Cadastrar</button>
				<input type="hidden" value="<?php echo $usuario_email ;?>"/>
			</form>
		</div>
		
		<h3>Cadastrar Receita/Categoria</h2>
		<div id="form_cadastrar_receita">
			<form method="post" action="usuario/categoriaReceita">
				<label for="cat_receita">Categoria Receita</label>
				<input type="text" name="cat_receita" id="receita"/>
			    <button type="submit" value="Cadastrar Categoria Receita">Cadastrar Categoria Receita</button>
				<input type="hidden" name="usuario" value="<?php echo $usuario_email ;?>"/>
				<input type="hidden" name="tipo" value="1"/>
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
					<?php
					foreach ($categoria_despesa->result_array() as $cat_des)
					{?>
					
					<option value="<?php echo $cat_des['id'];?>"><?php echo $cat_des['categoria'];?></option>
					<?php }?>
				</select>
				<input type="button" value="Adicionar Categoria"/>
				<button type="submit" value="Cadastrar">Cadastrar</button>
				<input type="hidden" value="<?php echo $usuario_email;?>"/>
			</form>
		</div>
		<h3>Cadastrar Despesa/Categoria</h2>
		<div id="form_cadastrar_receita">
			<form method="post" action="usuario/categoriaDespesa">
				<label for="cat_receita">Categoria Despesa</label>
				<input type="text" name="cat_receita" id="receita"/>
			    <button type="submit" value="Cadastrar Categoria Receita">Cadastrar Categoria Despesa</button>
				<input type="hidden" name="usuario" value="<?php echo $usuario_email ;?>"/>
				<input type="hidden" name="tipo" value="2"/>
			</form>
		</div>
		
		<h3>Receita/Despesas</h3>
		<div id="listar_receita_despesas">
			
		</div>
    </body>
</html>