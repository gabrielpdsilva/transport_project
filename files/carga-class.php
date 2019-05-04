<?php

    # esta é a classe Carga
    # responsável por representar as 'cargas' que serão criadas, removidas e atualizadas
    # no site
    class Carga{
        var $id;    # id da carga
        var $data_inicio;   # data de inicio da carga
        var $data_fim;  # data final da carga
        var $descricao; # descrição básica da carga (resumão)

        # construtor do objeto Carga
        function Carga($_id, $_data_inicio, $_data_fim, $_descricao){
            $this->set_id($_id);    # define o id da carga
            $this->set_data_inicio($_data_inicio);  # define a data de inicio da carga
            $this->set_data_fim($_data_fim);    # define a data final da carga
            $this->set_descricao($_descricao);  # define a descrição básica da carga
        }

        # método responsável por definir o ID da carga
        function set_id($new_id){
            # caso o ID da carga não seja null
            if($new_id != null && $new_id != '\0')
                $this->id = $new_id;    # define o novo ID da carga
        }

        # método responsável por retornar o ID da carga
        function get_id(){
            return $this->id;   # retorna o ID da carga
        }

        # método responsável por definir a data de inicio da carga
        function set_data_inicio($new_data){
            # caso a nova data não seja null
            if($new_data != null && $new_data != '\0')
                $this->data_inicio = $new_data; # define a nova data
        }

        # método responsável por retornar a data de inicio da carga
        function get_data_inicio(){
            return $this->data_inicio;  # retorna a data de inicio da carga
        }

        # método responsável por definir a data final da carga
        function set_data_fim($new_data){
            # caso a nova data não seja null
            if($new_data != null && $new_data != '\0')
                $this->data_fim = $new_data;    # define a nova data
        }

        # método responsável por retornar a data final da carga
        function get_data_fim(){
            return $this->data_fim; # retorna a data final da carga
        }

        # método responsável por definir a descrição básica da carga
        function set_descricao($new_descricao){
            # caso a nova descrição não seja null
            if($new_descricao != null && $new_descricao != '\0')
                $this->descricao = $new_descricao;  # define a nova descrição
        }

        # método responsável por retornar a descrição básica da carga
        function get_descricao(){
            return $this->descricao;    # retorna a descrição básica da carga
        }

    }
?>