<!DOCTYPE html>
<html>
    <head>
        <title>Financeiro | <?php echo $usuario;?></title>
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
			<form method="post" action="receita/cadastrar">
				<label for="receita">Receita</label>
				<input type="text" name="receita" id="receita"/>
				<label for="valor">Valor</label>
				<input type="text" name="valor" id="valor"/>
				<label for="data">Data</label>
				<input type="text" name="data" id="data">
				<select name="categoria">Categoria
					<?php
					foreach ($categoria_receita->result_array() as $cat)
					{?>
						<option value="<?php echo $cat['id'];?>" name="categoria"><?php echo $cat['categoria'];?></option>
					<?php }?>
				</select>
				<input type="button" value="Adicionar Categoria"/>
				<button type="submit" value="Cadastrar">Cadastrar</button>
				<input type="hidden" value="<?php echo $usuario_id;?>" name="usuario"/>
			</form>
			
			<a href="relatorio/receita">Imprimir Receita</a>	
			
			<table  style="width:40%" id="tab_cat_receita">
			<caption>Receita Cadastradas</caption>
					<tr>
						<th>Data</th>
						<th>Receita</th>
						<th>Valor(R$)</th>
						<th>Categoria</th>
						<th>Editar</th>	
						<th>Excluir</th>	 
					</tr>
					
			<?php
				foreach ($listar_receita->result_array() as $receita_list)
				{?>
					<tr>
						<td><?php echo $receita_list['data'];?></td>
						<td><?php echo $receita_list['receita'];?></td>
						<td><?php echo $receita_list['valor'];?></td>
						<td><?php echo $receita_list['categoria'];?></td>
						<td><a href="receita/editar/<?php echo $receita_list['id'];?>">Editar</a></td>
						<td><a href="receita/excluir/<?php echo $receita_list['id'];?>">Excluir</a></td>
					</tr>
			<?php }?>
					
					
			</table>
		</div>
		
		<h3>Cadastrar Receita/Categoria</h2>
		<div id="categoria_receita">
			<form method="post" action="categoria/categoriaReceita">
				<label for="cat_receita">Categoria Receita</label>
				<input type="text" name="cat_receita" id="receita"/>
			    <button type="submit" value="Cadastrar Categoria Receita">Cadastrar Categoria Receita</button>
				<input type="hidden" name="usuario" value="<?php echo $usuario_id;?>"/>
				<input type="hidden" name="tipo" value="1"/>
			</form>
				
			<table  style="width:40%" id="tab_cat_receita">
			<caption>Categoria Receita Cadastradas</caption>
					<tr>
						<th>Categoria</th>
						<th>Editar</th>	
						<th>Excluir</th>	 
					</tr>
					
			<?php
				foreach ($categoria_receita->result_array() as $cat_receita_list)
				{?>
					<tr>
						<td><?php echo $cat_receita_list['categoria'];?></td>
						<td><a href="categoria/editar/<?php echo $cat_receita_list['id'];?>">Editar</a></td>
						<td><a href="categoria/excluir/<?php echo $cat_receita_list['id'];?>">Excluir</a></td>
					</tr>
			<?php }?>
					
					
			</table>
				</div>
		
		<h2>Cadastrar Despesa</h2>	
		<div id="form_cadastrar_despesa">
			<form method="post" action="despesa/cadastrar">
				<label for="despesa">Despesa</label>
				<input type="text" name="despesa" id="despesa"/>
				<label for="valor">Valor</label>
				<input type="text" name="valor" id="valor"/>
				<label for="data">Data</label>
				<input type="text" name="data" id="data">
				<select name="categoria">Categoria
					<?php
					foreach ($categoria_despesa->result_array() as $cat_des)
					{?>
						<option value="<?php echo $cat_des['id'];?>"><?php echo $cat_des['categoria'];?></option>
					<?php }?>
				</select>
				<input type="button" value="Adicionar Categoria"/>
				<button type="submit" value="Cadastrar">Cadastrar</button>
				<input type="hidden" value="<?php echo $usuario_id;?>" name="usuario"/>
			</form>
			
			<a href="relatorio/despesa">Imprimir Despesa</a>		
			
			<table  style="width:40%" id="tab_cat_receita">
			<caption>Depesas Cadastradas</caption>
					<tr>
						<th>Data</th>
						<th>Receita</th>
						<th>Valor(R$)</th>
						<th>Categoria</th>
						<th>Editar</th>	
						<th>Excluir</th>	 
					</tr>	
			<?php
				foreach ($listar_despesa->result_array() as $despesas_list)
				{?> 
					
					<tr>
						<td><?php echo $despesas_list['data'];?></td>
						<td><?php echo $despesas_list['despesa'];?></td>
						<td><?php echo $despesas_list['valor'];?></td>
						<td><?php echo $despesas_list['categoria'];?></td>
						<td><a href="despesa/editar/<?php echo $despesas_list['id'];?>">Editar</a></td>
						<td><a href="despesa/excluir/<?php echo $despesas_list['id'];?>">Excluir</a></td>
					</tr>
			<?php }?>				
			</table>
		</div>
		<h3>Cadastrar Despesa/Categoria</h2>
		<div id="form_cadastrar_receita">
			<form method="post" action="categoria/categoriaDespesa">
				<label for="cat_receita">Categoria Despesa</label>
				<input type="text" name="cat_receita" id="receita"/>
			    <button type="submit" value="Cadastrar Categoria Receita">Cadastrar Categoria Despesa</button>
				<input type="hidden" name="usuario" value="<?php echo $usuario_id;?>"/>
				<input type="hidden" name="tipo" value="2"/>
			</form>
			<table  style="width:40%" id="tab_cat_despesa">
			<caption>Categoria Receita Cadastradas</caption>
					<tr>
						<th>Categoria</th>
						<th>Editar</th>	
						<th>Excluir</th>	 
					</tr>
			<?php
				foreach ($categoria_despesa->result_array() as $cat_des_list)
				{?>
					<tr>
						<td><?php echo $cat_des_list['categoria'];?></td>
						<td><a href="categoria/editar/<?php echo $cat_des_list['id'];?>">Editar</a></td>
						<td><a href="categoria/excluir/<?php echo $cat_des_list['id'];?>">Excluir</a></td>
					</tr>
			<?php }?>					
			</table>
		</div>

    </body>
</html>