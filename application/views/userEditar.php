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
            <input type="hidden" name="idusuario" required value="<?php echo $user[0]->idusuario; ?>"/>
            <br><br>
            <input type="text" name="nomeUsuario" required value="<?php echo $user[0]->nomeUsuario; ?>"/>
            <br><br>
            <input type="text" name="user" required value="<?php echo $user[0]->user; ?>"/>
            <br><br>
            <input type="radio" name="perfilAcesso" value="admin" 
                <?php if($user[0]->perfilAcesso == 'admin') { echo 'checked';} ?> />Admin
            <input type="radio" name="perfilAcesso" value="user" 
                <?php if($user[0]->perfilAcesso == 'user') { echo 'checked';} ?> />User
            <br><br>
            <input type="password" name="senha" required value="<?php echo $user[0]->senha; ?>"/>
            <br><br>

            <input type="submit" name="salvarPF" value="Salvar">
        <!--<?php echo form_close(); ?> fechando forms-->
    </body>
</html>
