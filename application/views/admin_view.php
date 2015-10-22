<!DOCTYPE html>
<html>
    <head>
        <title>Área Restrita</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/admin.css');?>">
    </head>
    <body>
	<h1>Área Restrita</h1>
	<div id="logout">
		<a href="login/logout">Sair</a>
   </div>
	<h2>Cadastrar</h2>	
	<div id="form_cadastrar">
		<?php //echo validation_errors(); ?>
        <?php
         echo form_open();
         echo form_label('Nome', 'nome');
         echo form_input('nome', '');
         echo form_label('Email', 'email');
         echo form_input('email', '');
         echo form_label('Senha', 'senha');
         echo form_password('senha', '');
         echo form_submit('submit', 'Cadastrar	');
        ?>
       <?php form_close(); ?>
        </div>
	</div>
			
	<table  style="width:40%" border="1px" id="tab_usuario_cadastrados">
	<caption>Usuarios Cadastrados</caption>
			<tr>
				<th>Numero</th>
				<th>Nome</th>
				<th>Email</th>
				<th>Ativo</th>
				<th>Editar</th>	
			    <th>Excluir</th>	 
			</tr>
			
	<?php
		foreach ($query->result_array() as $user)
		{?>
			<tr>
				<td><?php echo $user['id'];?></td>
				<td><?php echo $user['nome'];?></td>
				<td><?php echo $user['email'];?></td>
				<td><?php if($user['status'] == 1)?><img src="<?php echo base_url('public/img/ativo.png');?>" width="32"/></td>	
				<td><a href="admin/editar/<?php echo $user['id'];?>"><img src="<?php echo base_url('public/img/editar.png');?>" width="32"/></a></td>
				<td><a href="admin/excluir/<?php echo $user['id'];?>"><img src="<?php echo base_url('public/img/excluir.png');?>" width="32"/></a></td>
			</tr>
	<?php }?>
			
			
	</table>

		
    </body>
</html>