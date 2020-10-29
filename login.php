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
            
            $sql2="SELECT * FROM login_table a
            JOIN user_table b ON (a.user_id = b.user_id)
            JOIN preference_table c ON (c.pref_id = b.pref_id)
            JOIN picture_table p ON (p.user_id = b.user_id)            
            WHERE a.user_id = '$id';";
            $result2 = mysqli_query($con, $sql2);  
            $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
            var_dump($row2);
            $_SESSION['myusername'] = $row2['email_id'];
            $_SESSION['myuserid'] = $row2['user_id'];
            $_SESSION['mypassword'] = $row2['user_password'];
            $_SESSION['myname'] = $row2['user_name'];
            $_SESSION['myage'] = $row2['age'];
            $_SESSION['mygender'] = $row2['gender'];
            $_SESSION['mylocation'] = $row2['location'];
            $_SESSION['mybio'] = $row2['bio'];
            $_SESSION['mypref'] = $row2['pref_id']; 
            $_SESSION['mypref_location'] = $row2['pref_location']; 
            $_SESSION['mypref_age'] = $row2['pref_age'];
            $_SESSION['mypref_gender'] = $row2['pref_gender']; 
            $_SESSION['mypicurl'] = $row2['picture'];
            $sql= "UPDATE `like_table` SET `like_21` = '0' WHERE `like_table`.`like_21` = '-1';";
            if ($con->query($sql) === TRUE) {
            //echo "New record created successfully";
            } else {
            echo "Error: " . $sql . "<br>" . $con->error;
            }
            $sql2= "UPDATE `like_table` SET `like_12` = '0' WHERE `like_table`.`like_12` = '-1';";
            if ($con->query($sql2) === TRUE) {
            //echo "New record created successfully";
            } else {
            echo "Error: " . $sql2 . "<br>" . $con->error;
            }
            header("Location: account.php");
            
        }  
        else{
            echo '<script type="text/javascript">';
            echo ' alert("Login failed. Invalid username or password")';  //not showing an alert box.
            echo '</script>';
            
        }
        
?>