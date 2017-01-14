<?php
//ReceiptSession
session_start();
//$_SESSION['recptsession'] = $track;
$remID=$_SESSION['recptsession'];
//header('Location: receiptremit.php');
echo "$remID";
?>