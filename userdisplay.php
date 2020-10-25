<?php
session_start();
include("connect.php");
$sql="SELECT distinct c.user_id,c.user_name,c.age,c.gender,c.location,c.bio FROM preference_table a
JOIN user_table b ON (a.pref_id = b.pref_id)
JOIN user_table c ON (c.age = a.pref_age AND c.gender = a.pref_gender AND c.location = a.pref_location)
where b.user_id = '$_SESSION[login_user]';";
$result = mysqli_query($con, $sql);
$dbdata = array();
while ( $row = $result->fetch_assoc())  {
    $dbdata[]=$row;
}
echo json_encode($dbdata);
?>