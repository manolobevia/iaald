<?php require_once('Connections/iaald.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_iaald, $iaald);
$query_rs_update_emails = "SELECT * FROM email_updates ORDER BY DateOfSuscription ASC";
$rs_update_emails = mysql_query($query_rs_update_emails, $iaald) or die(mysql_error());
$row_rs_update_emails = mysql_fetch_assoc($rs_update_emails);
$totalRows_rs_update_emails = mysql_num_rows($rs_update_emails);mysql_select_db($database_iaald, $iaald);
$query_rs_update_emails = "SELECT * FROM email_updates ORDER BY DateOfSuscription ASC";
$rs_update_emails = mysql_query($query_rs_update_emails, $iaald) or die(mysql_error());
$row_rs_update_emails = mysql_fetch_assoc($rs_update_emails);
$totalRows_rs_update_emails = mysql_num_rows($rs_update_emails);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title></title>
<meta name="robots" content="noindex, nofollow" />
</head>

<body>
<ul>
<?php do { ?>
	<li>
    <?php echo $row_rs_update_emails['id_email']; ?> 
	</li>
<?php } while ($row_rs_update_emails = mysql_fetch_assoc($rs_update_emails)); ?>
</ul>
</body>
</html>
<?php
mysql_free_result($rs_update_emails);
?>
