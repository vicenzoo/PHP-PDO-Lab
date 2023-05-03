<?php
use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$pathBD = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $pathBD);

$statemnet = $pdo->query('SELECT * FROM students;');
$studentDataList = $statemnet->fetchAll(PDO::FETCH_ASSOC);
$studentList = [];
foreach ($studentDataList as $studentData){
    $studentList[] = new Student(
    $studentData['id'],
    $studentData['name'], 
    new DateTimeImmutable($studentData['birth_date']
));
};

var_dump($studentList);
