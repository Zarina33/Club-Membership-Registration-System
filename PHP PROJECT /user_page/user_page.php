<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Personal Page</title>
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link  href="css/style.css" rel="stylesheet" type = "text/css">

   <script src="js/ScrollTrigger.min.js" defer></script>
   <script src="js/ScrollSmoother.min.js" defer></script>

   <script src="js/app.js" defer></script>
   <style>
      .navbarr a{
   font-size: 2rem;
   margin-left: 2rem;
   color:var(--white);
}

      </style>
</head>
<body>
<section class="header" style="background-image: url(../images/rm373batch2-05.jpg);  background-size: cover;">
   <div class="image">
     <img src="../images/llogo.png" alt="" width = 40px> 
   </div>


   <nav class="navbarr">
      <a href="original_todo/todo.php"> To do list</a>
      |<a href= "">|</a>
      <a href="../home.php">Facts</a>
      <a href= "">|</a>
      <a href="../about.php">Log Out      </a>
      <a href= " ">
      <a href= " ">
      <a><?php echo $_SESSION['user_name'] ?></a>
      <a href="">    </a>
      <a href= "a">
     </a>
<a href= " ">
      <img src="img/user.png" alt="" width = 40px > </a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>
   <div class="wrapper" style="background-image: url(../images/llogo.jpg);  background-size: contain;">
      <div class="content">

         <header class="main-header">
            <div class="layers">
               <div class="layer__header">
                  <div class="layers__caption">WELCOME TO THE CLUB</div>
                  <div class="layers__title"><b>ARTIFICIAL INTELLIGENCE</b></div>
               </div>
               <div class="layer layers__base" style="background-image: url(img/layer-base.jpg);"></div>
               <div class="layer layers__middle" style="background-image: url(img/layer-middle.png);"></div>
               <div class="layer layers__front" style="background-image: url(img/layer-front.png);"></div>
            </div>
         </header>
      </div>
   </div>

</div>
<section class="about">
   <div class="content">
      <h3>Mission of club</h3>
      <p>Our main goal is developing interest and awareness
about artificial intelligence among Central Asian</p>
      <div class="icons-container">
         <div class="icons">
            <i class="fas fa-headset"></i>
            <span>Training and development of club members, preparation mentors for the next stream</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>Promotion of the club. Declaration of it by activities</span>
         </div>
         <div class="icons">
            <i class="fas fa-map"></i>
            <span>Creating stable work system of the club</span>
         </div>
         
      </div>
   </div>

</section>


<section class="reviews">
<section class="about">
<div class="content">
   <h1 class="heading-title" id="top"> memberships </h1>
      
      <div class="list">   
    <ul>
      <a href="#president"><li>Club president</li></a>
      <a href="#chief"><li>Chief assistant</li></a>
      <a href="#smm"><li>SMM</li></a>
      <a href="#planner"><li>Training planner</li></a>
      <a href="#hr"><li>HR</li></a>
      <a href="#logger"><li>Accountant/Logger</li></a>
      </ul>
      <div>
         <br>
   <h4 id="president">Club president</h4>
   <p>Representation of the club, being aware of everything
that happens in the club, assistance to the master
planner in making plans, the SMM in promoting the
club, acquaintance and contract with specialists,
tracking accounting, etc. And approval or disapproval
of certain actions of the team.</p>

   <h4 id="chief">Chief assistant</h4>
   <p>Solving coordinated with the president all of the
technical issues, establishing processes, finding
premises, preparing documentation, assisting the
president in preparing for speeches, etc.
</p>

   <h4 id="smm">SMM</h4>
   <p>Maintaining accounts in all social networks, shooting
events, etc., writing posts
</p>

   <h4 id="planner">Training planner</h4>
   <p>Drawing up a clear curriculum, a sequence of lessons
(depending on the grades) and submitting ideas for
events, depending on where we are in this curriculum.
</p>

   <h4 id="hr">HR</h4>
   <p>Search for specialists in the field of artificial
intelligence to conduct trainings and other
events.Tracking news in the world of artificial
intelligence, about scientific and social events that
are happening in our time reporting on them.
</p>

   <h4 id="logger">Accountant/Logger</h4>
   <p>Accounting of all students in each grade and stream.
Recording of all changes in the club in the document.
Maintaining the chronology of the club.
</p>
</div>
</section>
</section>





<section class="footer" style="background-image: url(../images/llogo.jpg); background-size: cover;">

   <div class="box-container">

      <div class="box">
         <h3>Quick Links</h3>
        <a href="to_do_list/index.php"> <i class="fas fa-angle-right"></i>To Do List</a>
         <a href="facts.php"> <i class="fas fa-angle-right"></i>Facts</a>
         <a href="home.php"> <i class="fas fa-angle-right"></i> Log Out</a>
      </div>


      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +996-222-333 </a>
         <a href="mailto:ai.manas.club@gmail.com "> <i class="fas fa-envelope"></i> ai.manas.club@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Bishkek, Kyrgyzstan</a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="https://t.me/flowerfield13"> <i class="fab fa-telegram"></i> Telegram </a>
         <a href="https://instagram.com/ai.manas.club?igshid=Yzg5MTU1MDY="> <i class="fab fa-instagram"></i>Instagram </a>
         <a href="https://linkedin.com/in/zarina-uvalieva-a31320238"> <i class="fab fa-linkedin"></i> Linkedin </a>
      </div>

   </div>

   <div class="credit"><span>2022</span> | Artificial Intelligence </div>

</section>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>

   


</body>
</html>