<?php
require_once '../../database/connectionDB.php';
$selectAllUser = $conn->prepare("SELECT a.* from tbl_credentials a order by a.dateTimeAdded");
$selectAllUser->execute([]);
$selectAllUser_ = $selectAllUser->fetchAll();

var_dump($selectAllUser_);
