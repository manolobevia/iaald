<?php
#Local
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_iaald = "localhost";
$database_iaald = "iaald";
$username_iaald = "iaald_user";
$password_iaald = "KQUnzCeqBdY45rPL";
$iaald = mysql_pconnect($hostname_iaald, $username_iaald, $password_iaald) or trigger_error(mysql_error(),E_USER_ERROR);
 



#Remote
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
/*
$hostname_iaald = "localhost";
$database_iaald = "iaald";
$username_iaald = "iaald_user";
$password_iaald = "CMk8nd5i[";
$iaald = mysql_pconnect($hostname_iaald, $username_iaald, $password_iaald) or trigger_error(mysql_error(),E_USER_ERROR); 
*/
?>
