<html>
<head>
</head>
<body>

<?php

$con = mysqli_connect("localhost", "Ilaha", "password");

if(!$con){
	die("cannot connect" .  mysqli_error());
}

mysqli_select_db($con, "MIT_GSL");

//$sql = "drop table Review_Rating";


/*$sql = "create table User(
id int  AUTO_INCREMENT,
name varchar(255),
surname varchar(255),
email varchar(255),
password varchar(255),
search_active boolean,
primary key (id)
)";*/


/*$sql = "create table Details(
id integer not null,
verified boolean,
gender varchar(5),
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


/*$sql = "create table Review_Rating(
id integer not null,
review text,
rating integer,
date date,
time time,
foreign key (id) references User(id)
)";*/


/*$sql = "create table Post(
id integer not null,
content_text text,
content_photo text,
date date,
time time,
foreign key (id) references User(id)
)";*/

/*$sql = "ALTER TABLE Details
MODIFY COLUMN gender varchar(10);";*/


/*$sql = "create table image_table(
id int not null,
folder varchar(255),
upload_image varchar(255),
foreign key (id) references User(id)
)";*/


mysqli_query($con, $sql);


/*if(mysqli_query($con, "CREATE DATABASE MIT_GSL")){
	echo "succesful db creation";
}*/

mysqli_close($con);
?>

</body>
</html>



