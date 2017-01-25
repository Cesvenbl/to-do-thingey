<?php 
$host = 'localhost';

$textinsert = $_GET['task'];

$dbName = 'To-Do';

$username = 'admin';

$password = 'Abcd1234';

$textinsert = '';

$dbCon = new PDO("mysql:host=".$host.";dbname=".$dbName, $username, $password);
public function viewdb(){
$sql = 'SELECT `post-text` FROM list';	

$stmt = $dbCon -> prepare($sql);

$stmt -> execute();
}
public function insertdb(){
$sql = 'INSERT INTO list(`post-id`,`post-text`) VALUES(?,?)';

$stmt = $dbCon->prepare($sql);

$stmt->execute(array(NULL,$textinsert));
}
?>