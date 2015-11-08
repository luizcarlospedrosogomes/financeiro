<!DOCTYPE html>
<html>
    <head>
        <title>Financiro | <?php echo "Editando...".$qr->categoria;?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/.css');?>">
    </head>
	<body>			
			<form method="post" action="">
				<label for="categoria">Categoria</label>
				<input type="text" name="categoria" id="categoria" value="<?php echo $qr->categoria;?>"/>
			    <button type="submit" value="Cadastrar Categoria Receita">Editar categoria</button>
				<input type="hidden" name="id" value="<?php echo $qr->id;?>"/>
			</form>
	
   </body>
</html>