<?php
session_start();
include("connect.php");

$userin=$_SESSION["login_user"];
$sql="SELECT distinct p.picture,c.user_id,c.user_name,c.age,c.gender,c.location,c.bio FROM preference_table a
JOIN user_table b ON (a.pref_id = b.pref_id)
JOIN user_table c ON (c.age = a.pref_age AND c.gender = a.pref_gender AND c.location = a.pref_location AND c.user_id != b.user_id)
JOIN like_table e ON (e.User_1 = b.user_id AND e.User_2 = c.user_id)
JOIN picture_table p ON (c.user_id = p.user_id)
where b.user_id = '$userin' AND e.Like_12=0
UNION
SELECT distinct p.picture,c.user_id,c.user_name,c.age,c.gender,c.location,c.bio FROM preference_table a
JOIN user_table b ON (a.pref_id = b.pref_id)
JOIN user_table c ON (c.age = a.pref_age AND c.gender = a.pref_gender AND c.location = a.pref_location AND c.user_id != b.user_id)
JOIN like_table e ON (e.User_2 = b.user_id AND e.User_1 = c.user_id)
JOIN picture_table p ON (c.user_id = p.user_id)
where b.user_id = '$userin' AND e.Like_21=0
UNION
SELECT distinct p.picture,c.user_id,c.user_name,c.age,c.gender,c.location,c.bio FROM preference_table a
JOIN user_table b ON (a.pref_id = b.pref_id)
JOIN user_table c ON (c.age = a.pref_age AND c.gender = a.pref_gender AND c.location = a.pref_location AND c.user_id != b.user_id)
JOIN picture_table p ON (c.user_id = p.user_id)
where b.user_id = '$userin' AND c.user_id NOT IN (SELECT user_2 FROM like_table WHERE user_1='$userin') AND c.user_id NOT IN (SELECT user_1 FROM like_table WHERE user_2='$userin');";
$result = mysqli_query($con, $sql);
$dbdata = array();
while ( $row = $result->fetch_assoc())  {
    $dbdata[]=$row;
}
echo json_encode($dbdata);
?>