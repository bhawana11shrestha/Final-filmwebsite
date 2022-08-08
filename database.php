<?php
session_start();
?>

<?php
$conn = mysqli_connect('localhost','root','root');
if($conn){
	echo "connection successful";
}
else{
	echo"not connected".mysqli_error();
}

mysqli_select_db($conn,'user_info');
$user_name = $_POST['user_name'];
$email= $_POST['email'];
$phoneno= $_POST['phoneno'];
$comments= $_POST['comments'];

$query = "insert into user_info (user_name,email,phoneno,comments)
values('$user_name','$email','$phoneno','$comments')";

mysqli_query($conn,$query);

if ($conn->query($query) === TRUE) {
	$_SESSION['message'] = "Form Sent Successfully!!";
    header("location: index.php");
    
} else {
	echo "Error: <br>" . $conn->error;
}
?>