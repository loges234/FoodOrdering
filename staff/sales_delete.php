<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM sales WHERE id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Sales Cancelled Successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select Sales to Cancel first';
	}

	header('location: sales.php'); 
	
?>