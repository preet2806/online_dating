<?php
session_start();
include("connect.php");
$userin=$_SESSION["login_user"];
$sql="SELECT DISTINCT c.user_name as 'matchuser' ,p.picture, a.match_id from match_table a
JOIN message_table b ON (a.match_id = b.match_id)
JOIN user_table c ON (a.User_2 = c.user_id)
JOIN picture_table p ON (c.user_id = p.user_id)
WHERE a.User_1='$userin'
UNION
SELECT DISTINCT c.user_name as 'matchuser', p.picture, a.match_id from match_table a
JOIN message_table b ON (a.match_id = b.match_id)
JOIN user_table c ON (a.User_1 = c.user_id)
JOIN picture_table p ON (c.user_id = p.user_id)
WHERE a.User_2='$userin'";
$result = mysqli_query($con, $sql);
$dbdata = array();
while ( $row = $result->fetch_assoc())  {
    $dbdata[]=$row;
}
echo json_encode($dbdata);
?>