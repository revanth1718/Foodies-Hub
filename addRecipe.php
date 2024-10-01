<?php
    $servername = "localhost";
    $uname = "root";
    $pword = "";

    $username = $_REQUEST["username"];
    $title = $_REQUEST["title"];
    $url = $_REQUEST["video_url"];
    $desc = $_REQUEST["description"];
    $ingred = $_REQUEST["ingredients"];
    $steps = $_REQUEST["steps"];
    $phoneNum = $_REQUEST['phoneNum'];

     // connection establishment
     $conn = mysqli_connect($servername,$uname,$pword) or die("Connection failed");

     // selecting database
     $db = mysqli_select_db($conn,"foodiespalaca");
     
     // query execution
     $query = "insert into addreceipe(username,title,url,descp,ingred,steps) values ('$username','$title','$url','$desc','$ingred','$steps')";
     $res = mysqli_query($conn,$query);

     require __DIR__ . '/twilio-php-main/src/Twilio/autoload.php';
     use Twilio\Rest\Client;

     // Your Account SID and Auth Token from twilio.com/console
     $account_sid = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
     $auth_token = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
     // In production, these should be environment variables. E.g.:
     // $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

     // A Twilio number you own with SMS capabilities
     $twilio_number = "xxxxxxxxxxx";

     $client = new Client($account_sid, $auth_token);
     $client->messages->create(
        // Where to send a text message (your cell phone?)
        $phoneNum,
        array(
            'from' => $twilio_number,
            'body' => 'Congratulations !,Your recipe has been succesfully added !'
        )
    );

     header("Location: http://localhost:8080/recipes/recipes.php");

     // close connection
     mysqli_close($conn);
?>
