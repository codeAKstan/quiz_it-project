<?php 

if(isset($_POST['fname']) && 
   isset($_POST['uname']) && 
   isset($_POST['email']) &&
   isset($_POST['pass'])){

    include "../db_conn.php";

    $fname = $_POST['fname'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
	$email = $_POST['email'];

    $data = "fname=".$fname."&uname=".$uname;
	// making sure no field is empty   
    if (empty($fname)) {
    	$em = "Full name is required";
    	header("Location: ../register.php?error=$em&$data");
	    exit;
    }else if(empty($uname)){
    	$em = "User name is required";
    	header("Location: ../register.php?error=$em&$data");
	    exit;
    }else if(empty($pass)){
    	$em = "Password is required";
    	header("Location: ../register.php?error=$em&$data");
	    exit;
	} else if (empty($email)) {
		$em = "Email is required";
		header("Location: ../register.php?error=$em&$data");
		exit;
	} 
     else {
		// making email and username  unique
		$query = "SELECT * FROM users WHERE email = ?";
    	$stmt = $conn->prepare($query);
    	$stmt->execute([$email]);


		$sqlu = "SELECT * FROM users WHERE username = ?";
    	$stmtu = $conn->prepare($sqlu);
    	$stmtu->execute([$uname]);
		if ($stmt->rowCount() > 0) {
			$em = "email already exist";
    		header("Location: ../register.php?error=$em&$data");
	    	exit;
		}elseif($stmtu->rowCount() > 0){
			$em = "username already exist";
    		header("Location: ../register.php?error=$em&$data");
	    	exit;
		}
		 else {
			// hashing the password
			$pass = password_hash($pass, PASSWORD_DEFAULT);
			$sql = "INSERT INTO users(fname, username, password, email) 
    	        VALUES(?,?,?,?)";
			$stmt = $conn->prepare($sql);
			$stmt->execute([$fname, $uname, $pass, $email]);

			header("Location: ../register.php?success=Your account has been created successfully");
			exit;
		}
	}


}else {
	$em = "username already exist!";
	header("Location: ../register.php?error=$em");
	exit;
}
