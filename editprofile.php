<?php
    include("connect.php");
    session_start();
    //var_dump($_POST);        
    $myusername = $_POST['userEmail'];
    $myuserid = $_POST['userid'];
    $mypassword = $_POST['userPassword'];
    $myname = $_POST['firstname'];
    $myage = $_POST['age'];
    $mygender = $_POST['gender'];
    $mylocation = $_POST['location'];
    $mybio = $_POST['bio'];
    $mypref_location = $_POST['pref_location']; 
    $mypref_age = $_POST['pref_age'];
    $mypref_gender = $_POST['pref_gender'];
    $mypref=$_SESSION['mypref'];
    $mypicurl=$_POST['dpurl'];
    //var_dump($_SESSION);
    /*
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
    */
    header("Location: account.php");
    if($myusername!=$_SESSION['myusername']){
        //var_dump($_SESSION['myusername']);
        $sql = "select * from Login_table where email_id = '$myusername'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
        //var_dump($row); 
        $count = mysqli_num_rows($result);
        if($count==1){
            echo '<script type="text/javascript">';
            echo ' alert("an account with that emailid already exists")';  //not showing an alert box.
            echo '</script>';
        }
        else{
            $sql= "UPDATE `login_table` SET `email_id` = '$myusername' WHERE `login_table`.`user_id` = '$myuserid';";
            if ($con->query($sql) === TRUE) {
            //echo "New record created successfully";
            } else {
            echo "Error: " . $sql . "<br>" . $con->error;
            }
        }
    }
    if($myuserid!=$_SESSION['myuserid']){
        echo '<script type="text/javascript">';
        echo ' alert("cannot change userid")';  //not showing an alert box.
        echo '</script>';    
    }
    if($mypassword!=$_SESSION['mypassword']){
        $sql= "UPDATE `login_table` SET `user_password` = '$mypassword' WHERE `login_table`.`email_id` = '$myusername';";
        if ($con->query($sql) === TRUE) {
            //echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
    if($myname!=$_SESSION['myname']){
        $sql= "UPDATE `user_table` SET `user_name` = '$myname' WHERE `user_table`.`user_id` = '$myuserid';";
        if ($con->query($sql) === TRUE) {
            //echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
    if($mybio!=$_SESSION['$mybio']){
        $sql= "UPDATE `user_table` SET `bio` = '$mybio' WHERE `user_table`.`user_id` = '$myuserid';";
        if ($con->query($sql) === TRUE) {
            //echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
    if($myage!=$_SESSION['$myage']){
        $sql= "UPDATE `user_table` SET `age` = '$myage' WHERE `user_table`.`user_id` = '$myuserid';";
        if ($con->query($sql) === TRUE) {
            //echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
    if($mylocation!=$_SESSION['$mylocation']){
        $sql= "UPDATE `user_table` SET `location` = '$mylocation' WHERE `user_table`.`user_id` = '$myuserid';";
        if ($con->query($sql) === TRUE) {
            //echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
    if($mygender!=$_SESSION['$mygender']){
        $sql= "UPDATE `user_table` SET `gender` = '$mygender' WHERE `user_table`.`user_id` = '$myuserid';";
        if ($con->query($sql) === TRUE) {
            //echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
    if($mypref_age!=$_SESSION['$mypref_age']){
        $sql= "UPDATE `preference_table` SET `pref_age` = '$mypref_age' WHERE `preference_table`.`pref_id` = '$mypref';";
        if ($con->query($sql) === TRUE) {
            //echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
    if($mypref_location!=$_SESSION['$mypref_location']){
        $sql= "UPDATE `preference_table` SET `pref_location` = '$mypref_location' WHERE `preference_table`.`pref_id` = '$mypref';";
        if ($con->query($sql) === TRUE) {
            //echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
    if($mypref_gender!=$_SESSION['$mypref_gender']){
        $sql= "UPDATE `preference_table` SET `pref_gender` = '$mypref_gender' WHERE `preference_table`.`pref_id` = '$mypref';";
        if ($con->query($sql) === TRUE) {
            //echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
    if($mypicurl!=$_SESSION['$mypicurl']){
        $sql= "UPDATE `picture_table` SET `picture` = '$mypicurl' WHERE `picture_table`.`user_id` = '$myuserid';";
        if ($con->query($sql) === TRUE) {
            //echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
    $sql2="SELECT * FROM login_table a
    JOIN user_table b ON (a.user_id = b.user_id)
    JOIN preference_table c ON (c.pref_id = b.pref_id)
    JOIN picture_table p ON (p.user_id = b.user_id)  
    WHERE a.user_id = '$myuserid';";
    $result2 = mysqli_query($con, $sql2);  
    $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
    //var_dump($row2);
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
?>