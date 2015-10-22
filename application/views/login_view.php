<!DOCTYPE html>
<html>
    <head>
        <title>Área Restrita</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style type="text/css">
            body {background: #FFF; font-family: Verdana; font-size: 9pt; }
            #form_login { width: 500px; margin: 0 auto; padding: 20px; background: #F2F2F2; border: 1px solid #B7B7B7; }
            label { display: block; margin-bottom: 0.3em; }
            input[type=text], input[type=password] { border: 1px solid #666; display: block; margin-bottom: 1em; padding: 2px; width: 100%; }
            input[type=text], input[type=password] { display: block; }
            h1 { margin: 0 0 1em 0; text-align: center; }
            .error { background: none repeat scroll 0 0 #FBE6F2; border: 1px solid #D893A1; padding: 5px; }
        </style>
    </head>
    <body>

        <h1>Tela de Login</h1>
        <div id="form_login">
            <?php echo validation_errors(); ?>
            <?php
            echo form_open();

            echo form_label('Email', 'email');
            echo form_input('email', '');

            echo form_label('Senha', 'senha');
            echo form_password('senha', '');

            echo form_submit('submit', 'Login');
            ?>
            <?php form_close(); ?>
        </div>
    </body>
</html>