<html>
<head>
</head>
<body>
<?php

if(isset($_POST['submit'])){

echo "submit is clicked";

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
} 

$sql2 = "insert into Details (id, verified, p_picture, p_video, expertise, education,
experience, bio, methodology, phone, location, rating_count, rating_sum, price_hour)
values ('$last_id', '0', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '1', '1', '1' )";


//$result = mysqli_query($con, $sql);
$result2 = mysqli_query($con, $sql2);

/*$sql = "create table Details(
id integer not null,
verified boolean,
p_picture text,
p_video text,
expertise text,
education text,
experience text,
bio text,
methodology varchar(255),
phone varchar(255),
location text,
rating_count integer,
rating_sum integer,
price_hour integer,
foreign key (id) references User(id)
)";*/

mysqli_close($con);
}
?>  
</body>
</html>