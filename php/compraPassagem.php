<?php

    if(isset($_POST["nome"])){
        $nome = $_POST["nome"];
        echo 'Nome: '.$nome.'</br>' ;
    }

    if(isset($_POST["cpf"])){
        $cpf = $_POST["cpf"];
        echo 'Cpf: '.$cpf.'</br>' ;
    }

    if(isset($_POST["data"])){
        $data = $_POST["data"];
        echo 'Data: '.$data.'</br>' ;
    }

    if(isset($_POST["horario"])){
        $pagamento = $_POST["horario"];
        echo 'Horario: '.$pagamento.'</br>' ;
    }

    if(isset($_POST["optradio"])){
        $optradio = $_POST["optradio"];

        echo 'Tipo de Passagem: '.TipoPassagem($optradio).'</br>' ;
    }

    if(isset($_POST["formaPagamento"])){
        $formaPagamento = $_POST["formaPagamento"];
        echo 'Forma de Pagamento: '.TipoPagamento($formaPagamento).'</br>' ;
    }

    if(isset($_POST["observacao"])){
        $observacao = $_POST["observacao"];
        echo 'Observação: '.$observacao;
    }


    function TipoPassagem($input){
        if($input == '1'){
            return 'Primeira Classe';
        }else{
            return 'Classe Econômica';
        }
    }

    function TipoPagamento($input){
        switch($input){
            case 1:
                return 'Cartão de Débito';
                break;
            case 2:
                return 'Cartão de Crédito';
                break;
            case 3:
                return 'Boleto';
                break;

        }
    }

?>