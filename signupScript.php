<?php
 include('database/dbConfig.php');
		
if(isset($_POST['registerBtn'])) 
{
	$firstName = $_POST['firstName']; 
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cPassword = $_POST['cPassword'];

/*	$emailQuery = "SELECT * FROM `register` WHERE `email`='$email' ";
	$run = mysqli_query($conn, $emailQuery);

	$emailCount = mysqli_num_rows($run);
        if($emailCount>0){	
            echo "email aready exist";
		}  */		
		
	if($password == $cPassword)
	{	
		$query = "INSERT INTO `register`(`firstName`, `lastName`, `email`, `password`) VALUES ('$firstName','$lastName','$email','$password')";
		$run = mysqli_query($conn, $query);
		
		if($run)
		{
		echo  "<div class='alert alert-success'>
			User Added successfully..!
			</div>"; 
        /* $_SESSION['status'] = "User added successfully.";
        $_SESSION['status_code'] = "success"; */
		header('Location: signup.php');
		}
		else
		{		
		$_SESSION['status'] = "User Not added !!!";
		$_SESSION['status_code'] = "error";
		header('Location: signup.php');
		}
	}
		else
		{
		$_SESSION['status'] = "Password and confirm password does not match !";
		$_SESSION['status_code'] = "warning";
		header('Location: signup.php');
		}
}

// ###################################################################----------->

?>