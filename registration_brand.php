 
<?php
$servername="localhost";
$username="root";
$password="";
$database="influencermania";

$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
	die("Connection Failed: ".$conn->connect_error);
}
echo "Connected successfully";
$username=$_POST['name'];
if($_POST['pass']==$_POST['c_pass']){
	$password=$_POST['pass'];
}else{
        echo "Re-enter password";
}
$email=$_POST['email'];
$query= "INSERT into brand_login (Name,email,Password) values ('$username','$email','$password')";

        $result   = mysqli_query($conn, $query);
        if($result){
        	header("Location: login_signup_brand.html");

        }
        else
        {
        	echo "Incorrect query"; 
        }


?>