
<?php 
    require "usuario-class.php";

    session_start();
    #$usuario_atual = new Usuario(); # instancia um usuário que irá representar a máquina atual

    # verifica se o usuário está realmente logado
    if(isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true){
        echo "loading, please waiting...";  # informa ao usuário para aguardar
        session_destroy();
        echo "<meta http-equiv=\"refresh\" content=\".4; url=login.php\"/> ";
    }

    else {
        # informa ao usuário atual que este não está logado no sistema
        echo "you are not logged.";

        # redireciona o usuário atual para a tela de login
        echo "<meta http-equiv=\"refresh\" content=\".4; url=login.php\"/> ";
    }

?>