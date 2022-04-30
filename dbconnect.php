<?php
//外部から読み込み
require_once __DIR__ . '/../env.php';
function connect()
{
//エラー出ているが接続は可能
    $host = DB_HOST;
    $db = DB_NAME;
    $user = DB_USER;
    $pass = DB_PASS;
    try{
        $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
        
        $pdo = new PDO($dsn, $user, $pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
       return $pdo;
    } catch(PDOException $e){
        echo 'エラー発生: ' . htmlspecialchars($e->getMessage(), ENT_QUOTES) . '<br>';
        exit;
    }
    $dbh = null;

}
?>
