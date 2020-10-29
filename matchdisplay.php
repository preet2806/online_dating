<?php
session_start();
include("connect.php");
$userin=$_SESSION["login_user"];
$sql="SELECT * FROM user_table a
JOIN match_table b ON (a.user_id = b.User_2)
JOIN picture_table p ON (p.user_id = a.user_id)
WHERE b.User_1='$userin'
UNION
SELECT * FROM user_table a
JOIN match_table b ON (a.user_id = b.User_1)
JOIN picture_table p ON (p.user_id = a.user_id)
WHERE b.User_2='$userin';";
$result = mysqli_query($con, $sql);
$dbdata = array();
while ( $row = $result->fetch_assoc())  {
    $dbdata[]=$row;
}
echo json_encode($dbdata);
?>