<?php
session_start();
if(!isset($_SESSION['username']) || $_SESSION['role'] != "admin"){
	header("location:loginnisha.php");
}
?>
<h1>Hello :<?= $_SESSION['username'] ?></h1>
<h2> You are a : <?= $_SESSION['role'] ?></h2>
<a href="logout1.php">logout</a>