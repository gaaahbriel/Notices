<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $validacao = Validacao::validar([
        'usuario' => ['required', 'unique:usuarios'],
        'senha' => ['required', 'confirmed', 'min:8', 'max:30', 'strong']
    ], $_POST);

    if($validacao->naoPassou('registrar')){
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

    flash()->push('mensagem', 'Registrado com sucesso!');
    header('location: /registrar');
    exit();
}
view('registrar');