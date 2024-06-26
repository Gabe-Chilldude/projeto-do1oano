<?php 
require 'build-account-table.php';

$email = $_POST['email'];
$password = $_POST['password'];

$users = csvToArray('db/accounts.csv');

echo '<pre>';

var_dump($_POST);

foreach($users as $user)  {

    print_r($user);

}

foreach($users as $user)  {

    if($user[1] == $email)  {
        echo ':/';
        if($user[0] == $password)  {
            header('Location:accounts.php', true, 301);
            return '';
        }
    }

}

header('Location:login-screen.php', true, 301);