<!DOCTYPE html>
<html>
	<head>
		<title>Projeto</title>
	</head>
	<body>
            <?php echo $this->session->userdata('logado')->nomeUsuario; ?>  |  
            <a class="btn btn-primary" href="<?php echo base_url();?>login/sair">Sair</a>
		<h1>Home</h1>
		<p>Olá mundo!</p>
                <a href="<?php echo base_url(); ?>pessoa">Cadastro Pessoa</a>  |  
                <a href="<?php echo base_url(); ?>user">Cadastro Usuário</a>  |  
                <a class="btn btn-primary" href="<?php echo base_url();?>login/sair">Sair</a>
	</body>
</html>
