<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="<?php echo base_url() . 'user'; ?>"> Voltar </a>
        <h1> Editar Usuário </h1>
        <?php echo form_open('user/atualizar'); ?> <!-- criando um form a partir do método inserir dentro da classe controller pessoa-->
            <input type="hidden" name="id_user" required value="<?php echo $user[0]->id_user; ?>"/>
            <br><br>
            <input type="text" name="username" required value="<?php echo $user[0]->username; ?>"/>
            <br><br>
            <input type="radio" name="access" value="admin" 
                <?php if($user[0]->access == 'admin') { echo 'checked';} ?> />Admin
            <input type="radio" name="access" value="user" 
                <?php if($user[0]->access == 'user') { echo 'checked';} ?> />User
            <br><br>
            <input type="password" name="pas" required value="<?php echo $user[0]->pas; ?>"/>
            <br><br>

            <input type="submit" name="salvarPF" value="Salvar">
        <!--<?php echo form_close(); ?> fechando forms-->
    </body>
</html>
