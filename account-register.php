<?php

$password = $_POST['password'];
$name = $_POST['name'];
$email = $_POST['email'];
// $phoneNumber = $_POST['phone'];
$content = "\n{$password},{$email},{$name}";

$getComfirm = file_put_contents('db/accounts.csv', $content, FILE_APPEND);

if($getComfirm)  {
    header('Location:accounts.php', true, 301);
    exit;
} else  {
    header('Location:signin-screen.php', true, 301);
    exit;
}
