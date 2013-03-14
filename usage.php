<?php
include "IMAP_Login.php";

$if="if09062";
$password="mypassword";

$imap = new IMAP_Login("students.del.ac.id");

if ($imap->is_login($if, $passwd)){
	echo "Successfully login";
} else {
	echo "You are not authorized";
}
?>