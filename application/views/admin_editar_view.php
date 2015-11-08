<!DOCTYPE html>
<html>
    <head>
        <title>Financiro | <?php echo "Editando...".$qr->nome;?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/.css');?>">
    </head>
	<body>
	<div id="form_editar">
		<form action="" method="post" accept-charset="utf-8">
		<label for="nome">Nome</label>
		<input type="text" name="nome" value="<?php echo $qr->nome;?>"/>
		<label for="email">Email</label>
		<input type="text" name="email" value="<?php echo $qr->email;?>"  />
		<label for="senha">Senha</label>
		<input type="text" name="senha" value="<?php echo $qr->senha;?>"  />
		<input type="hidden" name="id" value="<?php echo $qr->id;?>"  />
		<select name="status">Status
			<option value="1">Ativo</option>
			<option value="2">Inativo</option>
		</select>
		<input type="submit" name="submit" value="Editar"  />
    </div>

   </body>
</html>