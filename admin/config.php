<?php
$user_host="localhost";
$user="root";
$password="";
$database="ravitulsan";
$a=@mysql_connect($user_host,$user,$password) or die('not running');
@mysql_select_db($database) or die('not running');

?>