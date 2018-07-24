<html>
<head>
</head>
<body>
<?php

if(isset($_POST['login'])){

echo "login is clicked";

$con = mysqli_connect("localhost", "Ilaha", "password");

if(!$con){
	die("cannot connect" .  mysqli_error());
}

mysqli_select_db($con, "MIT_GSL");

 $name = $_POST["email"]; 
 $password = $_POST["password"]; 
 
 echo $name;
 echo $password;

 $result1 = mysqli_query($con,"SELECT email, password FROM User WHERE email = '$name' AND  password = '$password'");

//$pass = "select password from User where email='$_POST[email]'";

//$result = mysqli_query($con, $pass);

 if(mysqli_num_rows($result1) > 0 )
        { 
            $_SESSION["logged_in"] = true; 
            $_SESSION["naam"] = $name; 
        }
        else
        {
            echo 'The username or password are incorrect!';
        }



mysqli_close($con);
}
?>  
</body>
</html>