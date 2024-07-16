<?php

require_once '../../../database/connectionDB.php';
$username_ = $_POST['username'];
$password_ = $_POST['password'];
$selectSpecificUser = $conn->prepare("SELECT count(a.user_id) as countExist from tbl_credentials a
    where username=? and password=?");
$selectSpecificUser->execute([$username_, $password_]);
$selectSpecificUser_ = $selectSpecificUser->fetch();
if ($selectSpecificUser_['countExist'] > 0) {
    echo 'Logged in successfully';
} else {
    echo 'Account does not exist';
}
