<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- reconhecimento e adaptação automática ao tamanho do dispositivo -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">

        <!-- Data Tables 
        <link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/datatables/datatables.min.css'); ?>"/>
        -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.6.0/jszip-2.5.0/dt-1.11.4/b-2.2.2/b-html5-2.2.2/b-print-2.2.2/r-2.2.9/sb-1.3.1/sp-1.4.0/datatables.min.css"/>
        
        <title> Home </title>
    </head>

    <body>
            <div class="text-center">
                <!-- estrutura para criar destaque em alguma informação -->
                <h1> <?php if($this->session->userdata('estou_logado')) { ?>
                        <?php echo 'Bem vindo(a), '. $this->session->userdata('logado')->username;
                    } else { ?>   </h1>
                <p> Faça seu login </p> <?php } ?>
            </div>

        <div class="row">
            <!--Responsivo para smartphone, tablet e PC-->
            <div class="col-xs-1 col-sm-1 col-lg-3"></div>
                <div class="col-xs-10 col-sm-10 col-lg-6">
                    <p class="text-center">Selecione a opção de cadastro desejada.</p>
                </div>
            <div class="col-xs-1 col-sm-1 col-lg-3"></div>
        </div>

        <div class="jumbotron text-center">

        <div class="container"> 
            <?php if($this->session->userdata('estou_logado')) { ?>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item">
                            <a class="navbar-brand" href="<?php echo base_url(); ?>user">Home</a>
                            <button class="navbar-toggler active" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button> 
                        </li>

                        <li class="nav-item">
                            <a class="navbar-brand" href="<?php echo base_url(); ?>user">Cadastrar Usuário</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button> 
                        </li>

                        <li class="nav-item">
                            <a class="navbar-brand" href="<?php echo base_url(); ?>task">Adicionar Tarefa</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button> 
                        </li>

                        </ul>
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="navbar-brand" href="<?php echo base_url();?>login/sair">Sair</a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </li>
                        </ul>
                </nav>
            <?php } ?>

     
    

            
