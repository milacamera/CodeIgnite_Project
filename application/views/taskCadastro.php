<h1> Adicione uma tarefa ao TO-DO List </h1>
        <?php echo form_open('task/inserir'); ?> <!-- criando um form a partir do método inserir dentro da classe controller task-->
            <input type="text" name="task_name" required placeholder="Adicione sua task aqui..."/>
            <br><br>
            <input type="date" name="open_date" required/>
            <br><br>

            <input type="submit" name="add" value="Add">
            <input type="reset" name="limpar" value="Limpar">
        <!--<?php echo form_close(); ?> fechando forms-->

        <h2> Tarefas Abertas </h2>
                <table>
                    <thead>
                        <tr>
                            <th>Id</th> <th>Tarefa</th> <th>Funções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tasks as $t): ?>
                            <tr>
                                <td> <?php echo $t->id; ?> </td>
                                <td> <?php echo $t->task_name; ?> </td>
                                <td>
                                    <a href="<?php echo base_url() .
                                            'task/concluir/' .
                                            $t->id;?>"> Concluir </a>  | 
                                    <a href="<?php echo base_url() .
                                            'task/deletar/' .
                                            $t->id;?>"> Deletar </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <br><br>

        <h2> Tarefas Concluidas </h2>
        <table>
            <thead>
                <tr>
                    <th>Id</th> <th>Tarefa</th> <th>Data de Conclusão</th> <th>Funções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tasks as $ta): ?>
                    <tr>
                        <td> <?php echo $ta->id; ?> </td>
                        <td> <?php echo $ta->task_name; ?> </td>
                        <td> 
                            <a href="<?php echo base_url() .
                                    'task/deletar/' .
                                    $ta->id;?>"> Deletar </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>