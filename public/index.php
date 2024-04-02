<?php

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

$servername = '127.0.0.1';
$dbname = 'worker';
$tablename = 'user';
$password = 'password';
$username = 'root';

$pdo = new PDO("mysql:dbname=$dbname;host=$servername", $username, $password);

$choice = htmlspecialchars($_GET['user']);
$id = htmlspecialchars($_GET['id']);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if ($choice === 'one' && $id !== null) {
        get($pdo, $tablename, $id);
    }
    if ($choice === 'all') {
        getUsers($pdo, $tablename);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $json_data = file_get_contents('php://input');
    $data = json_decode($json_data, true);

    if ($data == null) {
        echo "data is empty\n";
    }
    
    $fname = htmlspecialchars($data['fname']);
    $fname = htmlspecialchars($data['lname']);
    $fname = htmlspecialchars($data['account']);


    insert($pdo, $tablename, $fname, $lname, $account);

    echo 'successfully';
}

function getUsers(object $pdo, string $tablename)
{
    $result = $pdo->query("select * from $tablename")->fetchAll();
    echo json_encode($result);
}

function get(object $pdo, string $tablename, string $id)
{
    $result = $pdo->query("select * from $tablename where id = $id")->fetch();
    echo json_encode($result);
}


function insert(object $pdo, string $tablename, string $fname, string $lname, int $account)
{
    $pdo->prepare("INSERT INTO $tablename (fname, lname, account) values (:fname, :lname, :account)");
    $pdo->bindParam(':fname', $fname);
    $pdo->bindParam(':lname', $lname);
    $pdo->bindParam(':account', $account);
    $pdo->execute();
}
