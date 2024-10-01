<?php
    $servername = "localhost";
    $uname = "root";
    $pword = "";

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $repassword = $_POST["confirm-password"];

    if($repassword != $password)
    {
        echo "<h1 style='color:red;'>Password didn't match</h1>";
    }
    else
    {
          // connection establishment
          $conn = mysqli_connect($servername,$uname,$pword) or die("Connection failed");

          // selecting database
          $db = mysqli_select_db($conn,"foodiespalaca");
  
          $queryn = "insert into registration values('$username', '$email','$password')";
          $rest = mysqli_query($conn,$queryn);
  
          header("Location: http://localhost:8080/recipes/login.html");
  
          // close connection
           mysqli_close($conn);
  
      }

      
  
    


?>