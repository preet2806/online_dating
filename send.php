<?php
    var_dump($_POST);
    include("connect.php");
    session_start();
    $match_id=$_POST['match_id'];
    $message=$_POST['message'];
    $userin=$_SESSION["login_user"];
    $sql= "INSERT INTO `message_table` (`Message_id`, `match_id`, `From_user`, `message`, `message_time`) VALUES (default, '$match_id', '$userin', '$message', current_timestamp());";
    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
    //header("Location: account.php");
    echo json_encode('Yes, it works!');
?>