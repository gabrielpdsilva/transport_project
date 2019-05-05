<html>
    <head>
        <title> Cargas </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>

    <body>
        <?php require "carga-class.php" ?>

        <?php

        session_start();    # captura os dados da sessão atual
        if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true){
            echo "<a href=\"logout.php\" class=\"a-menus-links\"> logout</a>";
            # simulação do banco de dados
            $cargas = array();
            $cargas[0] = new Carga("1", "04/05/2019", "19/05/2019", "carga 1");
            $cargas[1] = new Carga("2", "04/05/2019", "25/07/2019", "carga 2");
            $cargas[2] = new Carga("3", "04/05/2019", "05/06/2019", "carga 3");

            echo "<table>";    # inicio do bloco de tabelas

            echo "<tr> 
                    <th>ID</th>
                    <th>Data de Inicio</th>
                    <th>Data de Fim</th>
                    <th> Descrição da Carga</th>
                </tr>";
            
            for($i = 0; $i < 3; $i++){  # percorre o vetor de cargas

                # imprime o conteúdo do vetor em forma de lista
                echo "<tr>
                        <td>{$cargas[$i]->get_id()}</td>
                        <td>{$cargas[$i]->get_data_inicio()}</td>
                        <td>{$cargas[$i]->get_data_fim()}</td>
                        <td>{$cargas[$i]->get_descricao()}</td>
                    </tr>";
                
            }
            echo "</table>";    # fim do bloco de tabelas
        }

        else {
            # informa ao usuário atual que este não está logado no sistema
            echo "<p style=\"color: white;\"> Você precisa estar logado para efetuar alguma ação. </p>";
    
            # redireciona o usuário atual para a tela de login
            echo "<meta http-equiv=\"refresh\" content=\".4; url=login.php\"/> ";
        }
        ?>
    </body>
</html>