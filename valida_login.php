<?php
    session_start();

    $usuario_autenticado = false;

    //usuarios do sistema;
    $usuarios_app = array(
        array('email' => 'adm@teste.com.br', 'senha' => '123456'),
        array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
    );

    foreach($usuarios_app as $usuario){
        if($usuario['email'] == $_POST['email'] && $usuario['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
            break;
        }
    }

    if($usuario_autenticado){
        $_SESSION['autenticado'] = 'SIM';
        header('Location: home.php');

    }else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }
    /*
    print_r($_GET);
    echo '<br>';

    echo $_GET['email'];
    echo '<br>';
    echo $_GET['senha'];
    */
    
    // print_r($_POST);

    // echo '<br>';

    // echo $_POST['email'];
    // echo '<br>';
    // echo $_POST['senha'];


?>