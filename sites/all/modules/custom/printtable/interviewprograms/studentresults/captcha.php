<?php
session_start();
$captcha_num = rand(1000, 9999);
$_SESSION['code'] = $captcha_num;
echo $_SESSION['code'];
?>