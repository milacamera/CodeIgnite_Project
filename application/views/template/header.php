<!doctype html>
<html lang="pt-br">
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    
        <title> Projeto CI3 + BS4</title>

    </head>
    <body>
        <div class="container">
            <?php if($this->session->userdata('estou_logado')) { ?>
            <?php echo $this->session->userdata('logado')->nomeUsuario; ?>  
            <br><br>
            <a class="btn btn-primary" href="<?php echo base_url();?>login/sair">Sair</a>
            <br><br>
            <a class="btn btn-primary" href="<?php echo base_url(); ?>pessoa">Cadastro Pessoa</a> 
            <br><br>
            <a class="btn btn-primary" href="<?php echo base_url(); ?>user">Cadastro Usuário</a> 
            <?php } ?>