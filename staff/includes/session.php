<?php
	include '../includes/conn.php';
	session_start();

	if(!isset($_SESSION['staff']) || trim($_SESSION['staff']) == ''){
		header('location: ../index.php');
		exit();
	}

	$conn = $pdo->open();

	$stmt = $conn->prepare("SELECT * FROM users WHERE id=:id");
	$stmt->execute(['id'=>$_SESSION['staff']]);
	$staff = $stmt->fetch();

	$pdo->close();

?>