<?php
    include("connect.php");
    var_dump($_POST);
    var_dump($_POST['dp']);
    $myusername = $_POST['userEmail'];
    $myuserid = $_POST['userid'];
    $mypassword = $_POST['userPassword'];
    $myname = $_POST['firstname'];
    $mydateofbirth = $_POST['age'];
    $mygender = $_POST['gender'];
    $mylocation = $_POST['location'];
    $mybio = $_POST['bio'];
    $mypref_location = $_POST['pref_location']; 
    $mypref_age = $_POST['pref_age'];
    $mypref_gender = $_POST['pref_gender'];   
    $mydpurl = $_POST['dpurl'];
    $sql = "select user_id from Login_table where email_id = '$myusername'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
        //$id=$row['user_id'];
        var_dump($row); 
        if($count == 0){ 
            $sql2=" INSERT into `preference_table` VALUES (default,'$mypref_location','$mypref_age','$mypref_gender') ";
            if($con->query($sql2)==true){
                echo 'succesfully inserted1 ';
                $sql3="SELECT MAX(pref_id) FROM `preference_table`";
                $result3= mysqli_query($con,$sql3);
                $row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC);
                $pref=$row3["MAX(pref_id)"];
                //$_SESSION['login_user'] = $id;
                $sql4="INSERT into `user_table` VALUES ('$myuserid','$myname','$mydateofbirth','$mygender','$mylocation','$mybio','$pref')";
                if($con->query($sql4)==true){
                    echo 'succesfully inserted2 ';
                    $sql5="INSERT into `login_table` VALUES ('$myuserid','$myusername','$mypassword')";
                    if($con->query($sql5)==true){
                        echo 'succesfully inserted3 ';
                        $sql6="INSERT into `picture_table` VALUES (default,'$myuserid','$mydpurl')";
                        if($con->query($sql6)==true){
                            $sql = "select user_id from Login_table where email_id = '$myusername'";
                            $result = mysqli_query($con, $sql);
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);
                            /*$id=$row['user_id'];
                            $_SESSION['login_user'] = $id;
                            var_dump($_SESSION);
                            */
                            
                            echo '<script type="text/javascript">';
                            echo ' alert("account created")';  //not showing an alert box.
                            echo '</script>';
                            header("Location: index.php");
                        }
                        
                        
                    }
                    else{
                        echo "ERROR: $sql2 <br> $con->error";
                    }
                    
                }
                else{
                    echo "ERROR: $sql2 <br> $con->error";
                }
            }
            else{
                echo "ERROR: $sql2 <br> $con->error";
            }
            
        }  
        else{
            echo '<script type="text/javascript">';
            echo ' alert("account with that email id already exists")';  //not showing an alert box.
            echo '</script>';            
        }
        
?>