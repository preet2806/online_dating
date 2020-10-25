<?php
    include("connect.php");
    session_start();
    var_dump($_POST);        
    $myusername = $_POST['userEmail'];
    $mypassword = mysqli_real_escape_string($con,$_POST['userPassword']); 
        
    $sql = "select user_id from Login_table where email_id = '$myusername' and user_password = '$mypassword'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
        $id=$row['user_id'];
        var_dump($row); 
        if($count == 1){
            $_SESSION['login_user'] = $id;
            /*echo '<script type="text/javascript">';
            echo 'localStorage.setItem("loggedin","'.$_SESSION['login_user'].'")';  //not showing an alert box.
            echo '</script>';*/
            header("Location: account.php");
        }  
        else{
            echo '<script type="text/javascript">';
            echo ' alert("Login failed. Invalid username or password")';  //not showing an alert box.
            echo '</script>';
            
        }
        
?>