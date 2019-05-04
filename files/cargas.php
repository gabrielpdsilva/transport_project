<html>
    <head>
        <title> Cargas </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>

    <body>
        <?php require "carga-class.php" ?>
        <h1>Foi pra pagina correta cacete</h1>

        <div>
        <?php

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

        ?>
        <div>
    </body>
</html>