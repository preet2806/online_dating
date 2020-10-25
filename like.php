<?php
    $touser = $_POST['to_user'];   
    $sql = "SELECT * FROM like_table WHERE user_1='$touser';";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
        //$id=$row['user_id'];
        var_dump($row); 
        if($count != 0){ 
            $sql2=" INSERT into `preference_table` VALUES (default,'$mypref_location',$mypref_age,'$mypref_gender') ";
        }
        else{
            INSERT INTO `like_table` (`User_1`, `User_2`, `Like_12`, `Like_21`) VALUES ("'.$_SESSION[login_user].'", "'$touser'", '1', '0');
        }
?>