<!DOCTYPE html>
<html>
<head>
	<title>Index page</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/Style.css">
  <!-- link Swiper CSS-->
  <link rel="stylesheet" href="css/Swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

  
</head>
<body>
	<!--Navigation bar starts here-->
	<?php include 'navigation.php'; ?>
<!--Ends here-->
<!--Play movie container starts here-->
<div class="play-container container">
  <!--Play image-->
  <img src="images/doctor strange.jpeg" alt="" class="play-img">
  <!-- Play text-->
  <div class="play-text">
    <h2>Doctor Strange in the Multiverse of Madness</h2>
    <!--ratings-->
    <div class="rating">
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star'></i>
      <i class='bx bxs-star-half'></i>
    </div>
    <!--Tags-->
    <div class="tags">
      <span>Action </span>
        <span>Adventure </span>
          <span>4K</span>
    </div>
    <!--Trailer Button-->
    <a href="#" class="watch-btn">
  <i class='bx bx-right-arrow'></i>
   <span>Watch the Trailer</span>
  </a>
  </div>
  <!--Play btn-->
    <i class='bx bx-right-arrow play-movie'></i>
<!--Videro Container-->
<div class="video-container">
<!--Video box-->
<div class="video-box">
  <video id="myvideo" src="play-page/doctor strange.mp4" controls=""></video>
  <!--close video-->
 <i class='bx bx-x close-video'></i>
</div>
</div>
</div>
<!-- About Movie -->
<div class="about-movie container">
  <h2>Doctor Strange in the Multiverse of Madness</h2>
  <p>Doctor Strange teams up with a mysterious teenage girl from his dreams who can travel across multiverses, to battle multiple threats, including other-universe versions of himself, which threaten to wipe out millions across the multiverse. They seek help from Wanda the Scarlet Witch, Wong and others.</p>
  <!--Movie Cast-->
  <h2 class="cast-heading">Move Cast</h2>
  <div class="cast">
    <div class="cast-box">
      <img src="play-page/benedict cumberbatch.jpg" alt="" class="cast-img">
      <span class="cast-title">Benedict Cumberbatch</span>
    </div>
    <div class="cast-box">
      <img src="play-page/xochitl gomez.jpg" alt="" class="cast-img">
      <span class="cast-title">Xochitl Gomez</span>
    </div>
    <div class="cast-box">
      <img src="play-page/elizabeth olsen.jpg" alt="" class="cast-img">
      <span class="cast-title">Elizabeth Olsen</span>
    </div>
    <div class="cast-box">
      <img src="play-page/rachel mcAdams.jpg" alt="" class="cast-img">
      <span class="cast-title">Rachel McAdams</span>
    </div>
  </div>
</div>
<!--Download-->
<div class="download">
  <h2 class="download-title">Download movies</h2>
  <div class="download-links">
    <a href="play-page/doctor strange.mp4" download>480p</a>
    <a href="play-page/doctor strange.mp4" download>720p</a>
    <a href="play-page/doctor strange.mp4" download>1080p</a>
  </div>
</div>
<!--Play movie container ends here-->
<!--To link Swiper Files-->


<!--Copyright-->
<div class="copyright">
  <p>&#169;CarpoolVenom All Right Reserved</p>
</div>

<section class="footer">
    <div class="box-container p-3 bg-dark text-white">
        <div class="box">
            <h3>@Contact Info</h3>
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
<!--Ends here-->

<!-- link Swiper JS-->
<script src="js/Swiper-bundle.min.js"></script>
<script src="js/Main.js"></script>


</body>
</html>