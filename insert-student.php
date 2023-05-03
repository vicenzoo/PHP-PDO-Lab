<?php
use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$pathBD = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $pathBD);

$student = new Student(
    null,
    "Vinicius Dias", 
    new \DateTimeImmutable('1997-10-15'));

$sqlInsert = "INSERT INTO students (name,birth_date) VALUES ('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}');";
//echo $sqlInsert; exit;


$pdo->exec($sqlInsert);