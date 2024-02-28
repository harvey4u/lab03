<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['password'])
    && isset($_POST['First_name']) && isset($_POST['confirm_password'])
	&& isset($_POST['Email']) && isset($_POST['Middle_name'])
	&& isset($_POST['Lastname'])) 
{
	
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$password = validate($_POST['password']);
	$confirm_password = validate($_POST['confirm_password']);
	$First_name = validate($_POST['First_name']);
	$Middle_name = validate($_POST['Middle_name']);
	$Lastname = validate($_POST['Lastname']);
	$Email = validate($_POST['Email']);

	$user_data =
	 'username='. $username.
	 '&First_name='. $First_name.
	 '&Middle_name='. $Middle_name.
	 '&Lastname='. $Lastname.
	 '&Email='. $Email.
	 '&password='. $password.
	 '&confirm_password='. $confirm_password;



	if (empty($username)) {
		header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($password)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($confirm_password)){
        header("Location: signup.php?error=Confirm your Password&$user_data");
	    exit();
	}
	else if(empty($Email)){
        header("Location: signup.php?error=Email is required&$user_data");
	    exit();
	}
	else if(empty($First_name)){
        header("Location: signup.php?error=First Name is required&$user_data");
	    exit();
	}
	else if(empty($Middle_name)){
        header("Location: signup.php?error=Middle Name is required&$user_data");
	    exit();
	}
	else if(empty($Lastname)){
        header("Location: signup.php?error=Last Name is required&$user_data");
	    exit();
	}

	else if($password !== $confirm_password){
        header("Location: signup.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

        $password = md5($password);

	    $sql = "SELECT * FROM user WHERE username='$username' AND password ='$password' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO user(username, Email, password, First_name, Middle_name, Lastname) VALUES('$username', '$Email', '$password', '$Middle_name','$Lastname' ,'$First_name')";
        
		   $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Your account has been created successfully&$user_data");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	$_SESSION['error'] = "User Name is required";
header("Location: signup.php");

	exit();
}