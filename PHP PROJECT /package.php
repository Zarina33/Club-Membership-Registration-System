<?php
$conn = mysqli_connect('localhost','root','root','registration');

if(isset($_POST['submit'])){


  $name=$_POST["name"];
    $last_name=$_POST["last_name"];
    $email=$_POST["email"];
    $password = md5($_POST["password"]);
    $cpassword = md5($_POST["cpassword"]);
    $phone=$_POST["phone"];
   $user_type = $_POST["user_type"];



   $select = " SELECT * FROM club WHERE email = '$email' && password = '$password' ";

  $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($password != $cpassword){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO club(name, last_name, email, password, phone, user_type) VALUES('$name', '$last_name','$email','$password','$phone','$user_type')";
         mysqli_query($conn, $insert);
         header('location:book.php');
      }
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>package</title>
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
   <style type="text/css">
      
.form-container{
   min-height: 100vh;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
   padding-bottom: 60px;
   
}

.form-container form{
   padding:20px;
   border-radius: 5px;
   box-shadow: 0 5px 10px rgba(0,0,0,.1);
   background: #fff;
   text-align: center;
   width: 500px;
}

.form-container form h3{
   font-size: 30px;
   text-transform: uppercase;
   margin-bottom: 10px;
   color:#333;
}

.form-container form input,
.form-container form select{
   width: 100%;
   padding:10px 15px;
   font-size: 17px;
   margin:8px 0;
   background: #eee;
   border-radius: 5px;
}

.form-container form select option{
   background: #fff;
}

.form-container form .form-btn{
   background: white;
   color:#4682B4;
   text-transform: capitalize;
   font-size: 20px;
   cursor: pointer;
}

.form-container form .form-btn:hover{
   background: #4682B4;
   color:white;
}

.form-container form p{
   margin-top: 10px;
   font-size: 20px;
   color:#333;
}

.form-container form p a{
   color:#4682B4;
}

.form-container form .error-msg{
   margin:10px 0;
   display: block;
   background: #4682B4;
   color:white;
   border-radius: 5px;
   font-size: 20px;
   padding:10px;
}
   </style>

</head>
<body>

<section class="header">
 <div class="image">
     <img src="images/new.png" alt="" width = 40px> 
   </div>
   <a href="home.php" class="logo"></a>

   <nav class="navbar">
   <a href="about.php">ABOUT CLUB    </a>
   <a href="">|</a>
      <a href="home.php">FACTS    </a>
      <a href="">|</a>
      <a href="package.php">JOIN THE TEAM    </a>
      <a href="">|</a>
      <a href="book.php">LOG IN</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>
<div class="heading" style="background:url(images/Безымянный-2.jpg) no-repeat">
   <h1 style="color: white">join the team</h1>
</div>


  <div class="form-container">

   <form action="" method="post" style="background-image:url(images/Безымянный-2.jpg); background-size:cover;">
      <h3 style="color:white;">register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="text" name="last_name" required placeholder="enter your last_name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
       <input type="tel" name="phone" required placeholder="enter your phone">
      <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p style="color:white;">Already have an account? <a href="book.php">Login now</a></p>
   </form>

</div>

<section class="footer">

   <div class="box-container">
   <div class="box">
         <h3>quick links</h3>
        <a href="about.php"> <i class="fas fa-angle-right"></i> ABOUT CLUB</a>
         <a href="home.php"> <i class="fas fa-angle-right"></i> FACTS</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> JOIN THE TEAM</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> LOG IN</a>
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
<div class="credit"><span>2023</span> | Artificial Intelligence </div>
</section>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>