<?php
use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$pathBD = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $pathBD);

$student = new Student(
    null,
    "gustav',''); DROP TABLE students; -- pao de batata", 
    new \DateTimeImmutable('1997-10-15'));

$sqlInsert = "INSERT INTO students (name,birth_date) VALUES (?,?);";

$statement = $pdo-> prepare($sqlInsert);
$statement-> bindValue(1,$student->name());
$statement-> bindValue(2,$student->birthDate()->format('Y-m-d'));

if ($statement->execute()){
    echo "Registro Incluido";
}
exit;
//echo $sqlInsert; exit;


$pdo->exec($sqlInsert);