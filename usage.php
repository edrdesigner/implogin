<?php
include "IMAP_Login.php";

$if="eduardo@weber.eti.br";
$password="eduardo123";

$imap = new IMAP_Login("wg2.webgenium.com.br");

if ($imap->is_login($if, $passwd)){
	echo "Successfully login";
} else {
	echo "You are not authorized";
}
?>