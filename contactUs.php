<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
	<?php include 'navigation.php'; ?>
		<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Contact us</h2>
	</div>
	     <div class="alert alert-success text-center"> 
        <?php if(isset($_SESSION['message'])){
            echo $_SESSION['message'];
            $_SESSION['message']="";
          }
        ?> 
      </div> 

	<div class="w-50 m-auto">
		<form action="database.php" method="post">
			<div class="form-group"> 
				<label>Username</label>
				<input type="text" name="user_name" class="form-control" >
			</div>
						<div class="form-group"> 
				<label>Email</label>
				<input type="email" name="email" class="form-control" >
			</div>
						<div class="form-group"> 
				<label>Phone no</label>
				<input type="number" name="phoneno" class="form-control" >
			</div>
						<div class="form-group"> 
				<label>Comments</label>
				<textarea type="text" name="comments" class="form-control" ></textarea>
			</div>
			<button type="submit" class="btn btn-success">Submit</button>
		</form>
	</div>
</section>
<section class="footer">

    <div class="box-container p-3 bg-dark text-white">

      

        <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class='bx bx-phone'></i> +9779844098259 </a>
            <a href="#" class="links"> <i class='bx bx-envelope'></i>bhawana.shrestha@apexcollege.edu.np </a>
            <a href="#" class="links"> <i class='bx bx-map'></i>Mid-Baneshwor,Kathmandu </a>
        </div>

     

        <div class="box">
            <input type="email" placeholder="your email" class="email">
            <a href="https://mail.google.com/mail/u/0/#inbox?compose=new" target="popup" onclick="window.open('https://mail.google.com/mail/u/0/#inbox?compose=new','name','width=800,height=500')">
            <input type="submit" value="Email us" class="btn btn-success">
            </a>
        </div>

    </div>
</section>

</body>
</html>