<?php
session_start();

$random_number = md5(rand(1,65536));

$id = substr($random_number, 0, rand(3,strlen($random_number)));

$_SESSION['id'] = $id;

header("Location: home.php?id=".$id);
?>