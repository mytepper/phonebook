<?php require_once('../class/Class_PDO.php');
$login = 'user'; 
$pass = '1234'; 

if(($_SERVER['PHP_AUTH_PW']!= $pass || $_SERVER['PHP_AUTH_USER'] != $login)|| !$_SERVER['PHP_AUTH_USER']) 
{ 
    header('WWW-Authenticate: Basic realm=" user : user | pass : 1234"'); 
    header('HTTP/1.0 401 Unauthorized'); 
    echo 'Auth failed'; 
    exit; 
} else{
	$rs = $db->select('tb_book', '*', 'id!=:c', array(':c'=>0), "id DESC", "0, 100000");
	print_r(json_encode($rs));
}
?>