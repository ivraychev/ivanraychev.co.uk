<?php

$conn=mysqli_connect("ivanraychev.co.uk.mysql", "ivanraychev_co_ukcontact_php", "Tony2018", "ivanraychev_co_ukcontact_php");
//now check the connection


if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $message = $_POST['message'];
	
	 $sql_query = "INSERT INTO database_form (name, email, message)
	 VALUES ('$name','$email','$message')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "Your message has been send!";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

	$to 			= "ivan@ivanraychev.co.uk";
	$subject 		= "Email from my website";
	$body 			= "Information Submitted:";
    
	$body .= "\r\n Name: " . $name;
	$body .= "\r\n Email: " . $email;
	$body .= "\r\n Message: " . $message;

	mail($to, $subject, $body);
	

	
?>