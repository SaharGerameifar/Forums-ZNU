<?php
session_start();
include_once 'public/include/config.php';
$vc=$_GET['vc'];
$sql = $pdo->prepare(" UPDATE user_tbl SET status=? , vc=? WHERE vc=? ");
$sql->bindValue(1,'1');
$sql->bindValue(2,'');
$sql->bindValue(3,$vc);
$sql->execute();
