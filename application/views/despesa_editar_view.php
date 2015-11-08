<!DOCTYPE html>
<html>
    <head>
        <title>Financeiro</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/.css');?>">
    </head>
	<body>
	<form method="post" action="">
				<label for="receita">Despes</label>
				<input type="text" name="despesa" id="receita" value="<?php echo $qr->despesa;?>"/>
				<label for="valor">Valor</label>
				<input type="text" name="valor" id="valor" value="<?php echo $qr->valor;?>"/>
				<label for="data">Data</label>
				<input type="text" name="data" id="data" value="<?php echo $qr->data;?>">
				<select name="categoria">Categoria
					<?php
					foreach ($categoria_despesa->result_array() as $cat)
					{?>
						<option value="<?php echo $cat['id'];?>" name="categoria"><?php echo $cat['categoria'];?></option>
					<?php }?>
				</select>
				<button type="submit" value="Editar">Editar</button>
				<input type="hidden" value="<?php echo $qr->id;?>" name="id"/>
			</form>
 </body>
</html>