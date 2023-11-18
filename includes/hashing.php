<?php
$pwd = "aymane";
$options = ['cost' => 12];

$hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

$pwdLogin = "aymane";
if(password_verify($pwdLogin, $hashedPwd)){
    echo "they are the same";
}else{
    echo "they are not the same !!!";
}
?> 