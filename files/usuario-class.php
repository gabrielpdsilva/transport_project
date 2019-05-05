<?php

    # classe Usuário, responsável por representar os usuários que irão utilizar deste sistema
    class Usuario{
        var $nome;  # nome do usuário
        var $cnh;   # CNH do usuário
        var $email;

        # método responsável por definir o nome do usuário
        function set_nome($new_nome){
            # caso o novo nome não seja null
            if($new_nome != null && $new_nome != '\0')
                $this->nome = $new_nome;    # define o novo nome
        }

        # método responsável por retornar o nome do usuário
        function get_nome(){
            return $this->nome; # retorna o nome do usuário
        }

        # método responsável por definir o CNH do usuário
        function set_cnh($new_cnh){
            # caso o novo CNH não seja null
            if($new_cnh != null && $new_cnh != '\0')
                $this->cnh = $new_cnh;  # define o novo CNH
        }

        # método responsável por retornar o CNH do usuário
        function get_cnh(){
            return $this->cnh;  # retorna o CNH do usuário
        }

        # método responsável por definir o email do usuário
        function set_email($new_email){
            # caso o novo email não seja null
            if($new_email != null && $new_email != '\0')
                $this->email = $new_email;    # define o novo email
        }

        # método responsável por retornar o email do usuário
        function get_email(){
            return $this->email; # retorna o email do usuário
        }
    }
?>