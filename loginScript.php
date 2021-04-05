<?php
session_start();
 

$conn = new mysqli('localhost', 'root','','nehsan_local_db');

 if(isset($_POST['login_btn'])) 
    {
        $email_login = $_POST['email'];
        $password_login = $_POST['password'];

        /*$query = "SELECT * FROM `register` WHERE `email`='$email_login' AND `password`='$password_login'";
        $Execute_query = mysqli_query($conn, $query);       */

        $email_search = "SELECT * FROM `register` WHERE `email`='$email_login' AND `password`='$password_login'";
	    $run_email_search = mysqli_query($conn, $email_search);
        $email_Count = mysqli_num_rows($run_email_search); // counting number of rows for list of emails
        
        
       if($email_Count) // if all email are checked with linked entered password is match then only login
       {	
           $email_linked_pswd = mysqli_fetch_assoc($run_email_search);
           $db_password =  $email_linked_pswd['password'];
           $_SESSION['username'] = $email_linked_pswd['firstName']; // storing the firstName's value to "username" for the session

           if($db_password)
             {  
               
            $_SESSION['status'] = "Login successfull";
            $_SESSION['status_code'] = "success";
               /* echo "Login successfull";*/ 
            header('Location: index.php');
                ?>
          
                  
               
             <?php
             } else
                {
                 echo "Password incorrect"; 
                }
        } else 
            {
             echo "Invalid Email entered";
             header('Location: signin.php'); // changed from adminHome to login
            }

        /*
        if(mysqli_fetch_array($run_email_search))
        { 
            $_SESSION['email'] = $email_login;
            header('Location: index.php');
        }
         else
            {
                $_SESSION['status'] = "Email id or Password is invalid !";
                header('Location: login.php');
            }
        */        

	}
?>