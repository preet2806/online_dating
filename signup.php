<?php
    include("connect.php");
    session_start();      
    $myusername = $_POST['userEmail'];
        
    $sql = "select user_id from Login_table where email_id = '$myusername'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
        $id=$row['user_id'];
        var_dump($row); 
        if($count == 0){ 
            header("Location: signup.html");
            $_SESSION['login_user'] = $id;
        }  
        else{
            echo '<script type="text/javascript">';
            echo ' alert("account with that email id already exists")';  //not showing an alert box.
            echo '</script>';
            
        }
        
?>