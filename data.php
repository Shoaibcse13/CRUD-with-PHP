<?php require('dbconfig.php');

	if ($_SERVER["REQUEST_METHOD"]=="POST"){

		$name = $_POST["name"];
		$email = $_POST["email"];
		$dept = $_POST["dept"];
		$reg = $_POST["reg"];
		// echo $name;
		// echo $email;
		// echo $dept;
		// echo $reg;

		$sql = "INSERT INTO info (name,email,dept,reg)
		VALUES ('$name','$email','dept','reg')";

		if ($conn->query($sql) ===TRUE) {
			$message = "Your Data has been created Succesfully";
			header('Location: form.php?meg='.$message);
		}

		else {
			$message = "Something went worng";
			header('Location: form.php?meg='.$message);
		}

		$conn->close();
	} 



 ?>