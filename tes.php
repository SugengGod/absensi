<?php

include("users_class.php");

$user = new Users();

$id = '1022';
$pw = '1000';

$user->set_login_data($id, $pw);

$user_id = $user->get_user_id();
$password = $user->get_password();

echo $user_id;

?>