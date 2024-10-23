<?php

    //captura de variaveis
    $hddCodigo = $_GET['hddCodigo'];
    $strCodigo = $_GET['txtCodigo'];
    $strNome = trim($_GET['txtNome']); //trim = tira os espaços vazios

    $strEmail = 'Email n&atilde;o informado';
    if(isset($_GET['txtEmail'])){//isset checa se a variavel existe na url
        $strEmail = trim($_GET['txtEmail']);
    }

    $strSenha = 'Senha n&atilde;o informada';
    if (isset($_GET['txtSenha'])){ 
        $strSenha = $_GET['txtSenha'];
    }
    

    //exibicao de variaveis
    echo 'C&oacute;digo escondido: ' . $hddCodigo . '<br />';
    echo 'C&oacute;digo: ' . $strCodigo . '<br />';

    if (empty($strNome)){
        echo 'Nome n&atilde;o informado <br />';
    } else {
        echo 'Nome: ' . $strNome . '<br />';
    }
    

    echo 'Senha: ' . $strSenha . '<br />';
    echo 'Email: ' . $strEmail . '<br />';

    

?>