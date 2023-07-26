<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="sampledb";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['first_name']))
{	
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 $gender = $_POST['gender'];
	 $home_address = $_POST['home_address'];
	 $email = $_POST['email'];
	 $pincode = $_POST['pincode'];

	 $sql_query = "INSERT INTO students (first_name, last_name, gender, home_address, email, pincode)
	 VALUES ('$first_name', '$last_name', '$gender', '$home_address', '$email', '$pincode')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		header("Location: data_display.html");
		exit();
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>