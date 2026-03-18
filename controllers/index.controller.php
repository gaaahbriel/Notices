<?php
$pesquisar = $_REQUEST['pesquisar'] ?? '';

$noticias = $database->query(query:"SELECT * FROM noticia WHERE nomeDoEvento like :pesquisar",
class:Noticia::class,
params: ['pesquisar' => "%$pesquisar%"]
)->fetchAll();

view('index', compact('noticias'));