<?php
$msg = "Hay apa kabar";

$msg = wordwrap($msg,70);

// send email
mail("bayugentapermana@gmail.com","judul",$msg);
?>