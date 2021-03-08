<?php
define('dsn', 'mysql:host=sql306.b6b.ir;dbname=b6bi_27939675_messages;charset=utf8');
define('user', 'b6bi_27939675');
define('pass', '123amir2013');
$pdo = new  PDO(dsn, user, pass);
$pdo->exec('set names utf8');
?>