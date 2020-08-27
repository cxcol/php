<?php  
    include 'header.php';
?>
        
        <h1>Página de contato</h1>

        <p>Aqui vamos fazer o formulário</p>

        <?php
            if($_POST){
               print_r($_POST) ;
               echo "<p>meu nome é {$_POST['nome']}</p>";
            }else{
                echo "<p>Formulário em branco!</p>";
            }
        ?>

        <form method="post" action="">

            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" /><br/>

            <label for="assunto">Assunto</label>
            <select name="assunto" id="assunto">
                <option value="agendamento">Agendamento</option>
                <option value="duvida">Dúvida</option>
                <option value="sugestao">Sugestão</option>
            </select>
            <br/>

            <label for="mensagem">Mensagem</label>
            <textarea name="mensagem" id="mensagem"></textarea>

            <br/>

            <input type="submit" value="Enviar" />

        </form>
<?php  
    include 'footer.php';
?>