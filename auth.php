<?php
    session_start();

    $servername = "localhost";
    $uname = "root";
    $pword = "";

    $email = $_POST["email"];
    $password = $_POST["password"];

    // connection establishment
    $conn = mysqli_connect($servername,$uname,$pword) or die("Connection failed");

    // selecting database
	$db = mysqli_select_db($conn,"foodiespalaca");
    
    // query execution
	$query = "SELECT * from registration where email='$email' and password='$password' ";
	$res = mysqli_query($conn,$query);

    if(mysqli_num_rows($res) > 0)
	{
        $query = "select username from registration where email='$email'";
	    $res = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($res))
    {
        $uname=$row['username'];
        $_SESSION['uname']=$uname;
    }
        
		header("Location: http://localhost:8080/recipes/index.html");
	}
    else
    {
        $query = "SELECT * from registration where email='$email'";
	    $res = mysqli_query($conn,$query);

        if(mysqli_num_rows($res) == 0)
        {
            header("Location: http://localhost:8080/recipes/signup.html");
        }
        else
        {
            echo "Login credentails are invalid!";
        }

        
    }

    // close connection
    mysqli_close($conn);
				  


?>
