<php

$servername = '127.0.0.1';
$dbname = 'worker';
$tablename = 'clients';
$password = 'password';
$username = 'root';

$pdo = new PDO("mysql:dbname=$dbname;host=$servername", $username, $password);

// сообщение которое хотим всем отправить
$msg = "hello, evreone!";

/// соберем всех клиентов, возьмем их айдишники
$clients = [];
$ids = [];

$statement = $pdo->query("SELECT * FROM $tablename");
/// делаем ассоциативный массив
$statement->setFetchMode(PDO::FETCH_ASSOC);
$clients = $statement->fetchAll();

foreach ($clients as $c) {
    $ids[] = $c["id"];
}

///подготовим работу
$worker = $pdo->prepare("INSERT INTO messages (message, user_id) values (:message, :user_id)");

for ($i = 0; $i < count($ids); $i++) {
    $worker->bindParam(":message", $msg, PDO::PARAM_STR);
    $worker->bindParam(":user_id", $ids[$i], PDO::PARAM_INT);
    $worker->execute();
}
