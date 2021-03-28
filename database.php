<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<?php 

	


    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST['fname'])){
             $FirstNameErr = "please fill up correct info"; 
        }
        else{
    
            $FirstName = $_POST['fname'];
    
        }
            if(empty($_POST['lname'])){
            $LastNameErr = "please fill up correct info"; 
        }
        else{
    
            $LastName = $_POST['lname'];
    
        }
            if(empty($_POST['gender'])){
            $GenderErr = "please fill up correct info"; 
        }
        else{
    
            $Gender = $_POST['gender'];
    
        }
            if(empty($_POST['email'])){
            $EmailErr = "please fill up correct info"; 
        }
        else{
    
            $Email = $_POST['email'];
    
        }
            if(empty($_POST['username'])){
            $UserNameErr = "please fill up correct info"; 
        }
        else{
    
            $UserName = $_POST['username'];
    
        }
            if(empty($_POST['password'])){
            $PasswordErr = "please fill up correct info"; 
        }
        else{
    
            $Password = $_POST['password'];
    
        }
            if(empty($_POST['remail'])){
            $RecoveryEmailErr = "please fill up correct info"; 
        }
        else{
    
            $RecoveryEmail = $_POST['remail'];
    
        }

        $host = "localhost";
	    $user = "surove;
	    $pass = "123";
	     $db = "task";
    

	// Mysqli object-oriented
	$conn1 = new mysqli($host, $user, $pass, $db);

	if($conn1->connect_error) {
		echo "Database Connection Failed!";
		echo "<br>";
		echo $conn1->connect_error;
	}
	else {
		echo "Database Connection Successful!";

		
	}

	$conn1->close();


	// Mysqli procedural
	$conn2 = mysqli_connect($host, $user, $pass, $db);

	if(mysqli_connect_error()) {
		echo "Database Connection Failed!";
		echo "<br>";
		echo $conn2 -> connect_error;
	}
	else {
		echo "Database Connection Successful!";

		$stmt2 = mysqli_prepare($conn2, 'update users set password=? where id=?');
		mysqli_stmt_bind_param($stmt2, 'si', $p3, $p4);
		$p3 = "100";
		$p4 = 4;
		mysqli_stmt_execute($stmt2);
	}
	mysqli_close($conn2);

	?>
</body>
</html>
