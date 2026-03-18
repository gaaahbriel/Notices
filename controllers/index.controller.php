<?php
$pesquisar = $_REQUEST['pesquisar'] ?? '';

$noticias = $database->query(query:"SELECT * FROM noticias WHERE nomeDoEvento like :pesquisar",
class:Noticia::class,
params: ['pesquisar' => "%$pesquisar%"]
)->fetchAll();


view('index', compact('noticias'));