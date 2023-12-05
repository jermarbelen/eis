<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_connection14 = "localhost";
$database_connection14 = "database";
$username_connection14 = "root";
$password_connection14 = "";
$connection14 = mysql_pconnect($hostname_connection14, $username_connection14, $password_connection14) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
