<?php 
$host = 'localhost';

$dbName = 'To-Do';

$username = 'admin';

$password = 'Abcd1234';

$dbCon = new PDO("mysql:host=".$host.";dbname=".$dbName, $username, $password);

$sql = 'SELECT `post-text` FROM list';

$stmt = $dbCon -> prepare($sql);

$stmt -> execute();

$sql = 'INSERT INTO list(`post-id`,`post-text`) VALUES(?,?)';

$stmt = $dbCon->prepare($sql);

$stmt->execute(array(NULL,""));

?>