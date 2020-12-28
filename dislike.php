<?php
    var_dump($_POST);
    include("connect.php");
    session_start();
    var_dump(file_get_contents('php://input'));
    $touser = $_POST['to_user']; 
    $fromuser = $_SESSION['login_user'];  
    $sql = "SELECT * FROM `like_table` WHERE (user_1='$touser' and user_2='$fromuser') or (user_2='$touser' and user_1='$fromuser')";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
        //$id=$row['user_id'];
        //var_dump($row["User_1"]); 
        //var_dump($_SESSION['login_user']);
        if($count != 0){
            if($row["User_1"]===$fromuser){
                echo "yes";
                $sql2="UPDATE `like_table` SET `Like_12` = '-1' WHERE `like_table`.`User_1` = '$fromuser' AND `like_table`.`User_2` = '$touser'";
            }
            else{
                $sql2="UPDATE `like_table` SET `Like_21` = '-1' WHERE `like_table`.`User_2` = '$fromuser' AND `like_table`.`User_1` = '$touser'";
            }
            //var_dump($sql2);
            if ($con->query($sql2) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql2 . "<br>" . $con->error;
            }          
        }
        else{
            $sql2="INSERT INTO `like_table` (`User_1`, `User_2`, `Like_12`, `Like_21`) VALUES ('$_SESSION[login_user]', '$touser', '-1', '0')";
            if ($con->query($sql2) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql2 . "<br>" . $con->error;
            }
        }
        //header("Location: account.php");
        echo json_encode('Yes, it works!');
?>