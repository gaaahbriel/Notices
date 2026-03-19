<?php


if($_SERVER['REQUEST_METHOD'] == 'POST'){


    $database->query(
        "INSERT INTO noticia(usuario, senha) VALUES (:usuario, :senha)",
        [
            'nome' =>$_POST['usuario'],
            'senha' => password_hash($_POST['senha'], PASSWORD_BCRYPT)
        ]
    );
}

header('location: /login');
exit();
view('registrar');