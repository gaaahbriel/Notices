<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $validacoes = Validacao::validar([
        'usuario' => ['required', 'unique:usuarios'],
        'senha' => ['required', 'confirmed', 'min:8', 'max:30', 'strong']
    ], $_POST);

    if($validacoes->naoPassou('registrar')){
        header('location: /registrar');
        exit();
    }


    $database->query(
        query: "INSERT INTO usuarios(usuario, senha) VALUES (:usuario, :senha)",
        params: [
            'usuario' =>$_POST['usuario'],
            'senha' => password_hash($_POST['senha'], PASSWORD_BCRYPT)
        ]
    );

    header('location: /registrar');
    exit();
}

view('registrar');