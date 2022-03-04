    <h1> Cadastro de Usuário </h1>
        <?php echo form_open('user/inserir'); ?> <!-- criando um form a partir do método inserir dentro da classe controller user-->
            <input type="text" name="username" required placeholder="Nome aqui..."/>
            <br><br>
            <input type="radio" name="access" value="admin">Admin
            <input type="radio" name="access" value="user">User
            <br><br>
            <input type="password" name="pas" minlength="6" required placeholder="Senha aqui..."/>
            <br><br>

            <input type="submit" name="salvarPF" value="Salvar">
            <input type="reset" name="limpar" value="Limpar">
        <!--<?php echo form_close(); ?> fechando forms-->

        <div class="row">
            <div class="col-xs-1 col-sm-1 col-lg-2"></div>
            <div class="col-xs-10 col-sm-10 col-lg-8">
                <h2> Lista de Usuários </h2>
                <table id="lista" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nickname</th> <th>Perfil</th> <th>Funções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $u): ?>
                            <tr>
                                <td> <?php echo $u->username; ?> </td>
                                <td> <?php echo $u->access; ?> </td>
                                <td>
                                    <a href="<?php echo base_url() .
                                            'user/editar/' .
                                            $u->id_user;?>"> Editar </a>  | 
                                    <?php if($u->username != $this->session->userdata('logado')->username){ ?>
                                    <a href="<?php echo base_url() .
                                            'user/deletar/' .
                                            $u->id_user;?>"> Deletar </a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-1 col-sm-1 col-lg-2"></div>
        </div>
