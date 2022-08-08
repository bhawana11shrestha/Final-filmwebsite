<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">MovieSuggestion</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="OurServices.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactUs.php">Contact</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Movies
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Horror</a>
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Thriller</a>
          <a class="dropdown-item" href="#">Romantic</a>
          <a class="dropdown-item" href="#">Si-Fi</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<div class="jumbotron">
  <h1>MovieSuggestion :)</h1>
  <p>Find your best movie here</p>
</div>


<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About us</h2>
	</div>

	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
		<img src="images/aboutUs.jpg" class="img-fluid aboutimg">
	</div>
	<div class="col-lg-6 col-md-6 col-12">
		<h2 class="display-4">I am Bhawana</h2>
		<p class="py-3">Movie suggestion is a world wide website located in Nepal. It is a collaborative filtering or content based recommendation technique where movie titles are recommended to users based on their choices. With this recommendation technique you will be able to find suitable list of movies which others have liked. This is how collaborative filtering system works, it recommends you shows based on the similar shows watched by others.
		</p>
		<a href="about.php" class="btn btn-success">Check more</a>
	</div>
</div>
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