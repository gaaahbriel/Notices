<?php

$noticia = $database->query("SELECT * FROM noticia WHERE id = :id",
Noticia::class,
['id' => $_GET['id']]
)->fetch();

view('noticia', compact('noticia'));