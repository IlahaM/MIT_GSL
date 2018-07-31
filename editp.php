<html>
<head>
</head>
<body>
<?php

if(isset($_POST['save'])){

$con = mysqli_connect("localhost", "Ilaha", "password");

if(!$con){
	die("cannot connect" .  mysqli_error($con));
}

mysqli_select_db($con, "MIT_GSL");

$gender = $_POST["gender"];
$expertise = $_POST["expertise"]; 
$experience = $_POST["experience"]; 
$bio = $_POST["bio"]; 
$education = $_POST["education"];

$met1 = $_POST["group"];
$met2 = $_POST["indiv"];

$location = $_POST["location"];
$phone = $_POST["phone"];
$price = $_POST["price"];

$email = $_POST["email"];
 
 if(($met1 == "on")&&($met2 == "on")){
        $met = "group&&individual";
 }
 else if($met1 == "on"){
	 $met = "group";
 }
 else if($met2 == "on"){
	 $met = "individual";	 
 }

 
echo $gender; 
echo "</br>";
echo $expertise;
echo "</br>";
echo $experience;
echo "</br>";
echo $bio;
echo "</br>";
echo $education;
echo "</br>";
echo $location;
echo "</br>";
echo $phone;
echo "</br>";
echo $price;
echo "</br>";
echo $met;	
echo "</br>";
echo $email; 
echo "</br>";

$sel = "select id from User where email='$email'";
$result = mysqli_query($con, $sel);
//echo "result is ".$result;
$row=mysqli_fetch_array($result,MYSQLI_NUM);
echo $row[0];

$sql = "update Details set gender='$gender', expertise='$expertise', 
experience='$experience', bio='$bio', education='$education', 
location='$location', phone='$phone', price_hour='$price', methodology='$met' where id='$row[0]'";


if ($con->query($sql) === TRUE) {
    echo "updated ";
}
else echo "cannot update" .  mysqli_error($con);
	 
mysqli_close($con);
}
?>  
</body>
</html>