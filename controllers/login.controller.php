<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $validacao = Validacao::validar([
        'usuario' => ['required'],
        'senha' => ['required'],
    ], $_POST);

    if($validacao->naoPassou('login')){
        header('location: /login');
        exit();
    }

    $usuario = $database->query("SELECT * FROM usuarios WHERE usuario = :usuario",
    class: Usuario::class,
    params: compact('usuario')
    )->fetch();

    if($usuario){
        if(!password_verify($senha, $usuario->senha)){
            flash()->push('validacoes_login', ["Usuario ou senha estão incorretos"]);
            header('location: /login');
            exit();
        }
    }

    $_SESSION['auth'] = $usuario;
    flash()->push('mensagem', 'Seja bem vindo, '. $usuario->usuario . '!');
    header('location: /');
    exit();
}


view('login');