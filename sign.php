<html>
<head>
</head>
<body>
<?php

if(isset($_POST['submitSt']) || isset($_POST['submitT'])){

echo "submit is clicked";
echo "</br>";

$con = mysqli_connect("localhost", "Ilaha", "password");

if(!$con){
	die("cannot connect" .  mysqli_error());
}

mysqli_select_db($con, "MIT_GSL");

$sql = "insert into User (name, surname, email, password, search_active) 
values('$_POST[firstName]',
'$_POST[lastName]',
'$_POST[email]',
'$_POST[password]',
0)";

//$last_id = $con->insert_id;
//echo "$last_id";


if ($con->query($sql) === TRUE) {
    $last_id = $con->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
	echo "</br>";
} 

$sql2 = "insert into Details (id, verified, gender, p_picture, p_video, expertise, education,
experience, bio, methodology, phone, location, rating_count, rating_sum, price_hour)
values ('$last_id', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)";

$sql3 = "insert into image_table (id, folder, upload_image)
values ('$last_id', NULL, NULL)";

$result2 = mysqli_query($con, $sql2);
$result3 = mysqli_query($con, $sql3);

mysqli_close($con);
}
?>  
</body>
</html>
