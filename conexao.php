<?php


$pathBD = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $pathBD);

echo 'Conectado';

$pdo->exec('CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT ); ');