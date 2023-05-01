<?php
include "qrcode/qrlib.php";
$product = $_GET['text'];
QRcode::png($product);
?>