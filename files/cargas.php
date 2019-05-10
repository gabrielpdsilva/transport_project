<html>
    <head>
        <title> Cargas </title>
        <meta charset="UTF-8">
        <!--<link rel="stylesheet" type="text/css" href="login.css">        -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>

            body{
                background: url(https://images.pexels.com/photos/169647/pexels-photo-169647.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260) no-repeat;
            }

            ul {
              list-style-type: none;
              margin: 0;
              padding: 0;
              overflow: hidden;
              background-color: #371f42;
            }

            li {
              float: left;
              border-right:1px solid #bbb;
            }

            li:last-child {
              border-right: none;
            }

            li a {
              display: block;
              color: white;
              text-align: center;
              padding: 14px 16px;
              text-decoration: none;
            }

            li a:hover:not(.active) {
              background-color: #111; /*#111*/
            }

            .active {
              background-color: #59c5e0; /*4CAf50*/
            }

            table, th, td {
              border: 1px solid black;
              border-collapse: collapse;
              background: white;
            }

            th, td {
              padding: 15px;
              text-align: left;
            }

            footer{
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: black;
            color: white;
            text-align: center;
            }

        </style>

    </head>

    <body>
        <?php require "carga-class.php" ?>
        <ul>
          <li><a class="active" href="#home">Home</a></li>
          <li><a href="#sobrenos">Sobre nós</a></li>
          <li style="float:right"><a href="logout.php" class=a-menu-links>Logout</a></li>
        </ul>


       <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
          <h3 class="w3-bar-item">Menu</h3>
          <a href="#vicargas" class="w3-bar-item w3-button">Visualizar cargas</a></li>
          <a href="#cadcargas" class="w3-bar-item w3-button">Cadastrar cargas</a></li>
          <a href="#viusuarios" class="w3-bar-item w3-button">Visualizar usuários</a></li>
          <a href="cadastro.php" class="w3-bar-item w3-button">Cadastrar usuários</a></li>
        </div>

        <div style="margin-left:25%">

        <?php

         

        session_start();    # captura os dados da sessão atual
        if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true){
            #echo "<a href=\"logout.php\" class=\"a-menus-links\"> logout</a>";
            echo "<br><br><br>";
            # simulação do banco de dados
            $cargas = array();
            $cargas[0] = new Carga("1", "04/05/2019", "19/05/2019", "carga 1");
            $cargas[1] = new Carga("2", "04/05/2019", "25/07/2019", "carga 2");
            $cargas[2] = new Carga("3", "04/05/2019", "05/06/2019", "carga 3");

            echo "<table align=center>";    # inicio do bloco de tabelas

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

        <footer>
        <div id='contact'>
                <p><strong>email:</strong> seutransporte.com | <strong>telefone:</strong> 917-555-1098 | Todos os direitos reservados ©</p></div>
        </footer>


    </body>
</html>