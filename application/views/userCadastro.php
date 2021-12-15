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
        <a href="<?php echo base_url() . 'home'; ?>"> Home </a>
        <h1> Cadastro de Usuário </h1>
        <?php echo form_open('user/inserir'); ?> <!-- criando um form a partir do método inserir dentro da classe controller user-->
            <input type="text" name="nomeUsuario" required placeholder="Nome aqui..."/>
            <br><br>
            <input type="text" name="user" required placeholder="Nickname de usuário aqui..."/>
            <br><br>
            <input type="radio" name="perfilAcesso" value="admin">Admin
            <input type="radio" name="perfilAcesso" value="user">User
            <br><br>
            <input type="password" name="senha" minlength="6" required placeholder="Senha aqui..."/>
            <br><br>

            <input type="submit" name="salvarPF" value="Salvar">
            <input type="reset" name="limpar" value="Limpar">
        <!--<?php echo form_close(); ?> fechando forms-->

        <h2> Lista de Usuários </h2>
        <table>
            <thead>
                <tr>
                    <th>Nome</th> <th>Nickname</th> <th>Perfil</th> <th>Funções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $u): ?>
                    <tr>
                        <td> <?php echo $u->nomeUsuario; ?> </td>
                        <td> <?php echo $u->user; ?> </td>
                        <td> <?php echo $u->perfilAcesso; ?> </td>
                        <td>
                            <a href="<?php echo base_url() .
                                    'user/editar/' .
                                    $u->idusuario;?>"> Editar </a>  | 
                            <?php if($u->user != $this->session->userdata('logado')->user){ ?>
                            <a href="<?php echo base_url() .
                                    'user/deletar/' .
                                    $u->idusuario;?>"> Deletar </a>
                            <?php } ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>
