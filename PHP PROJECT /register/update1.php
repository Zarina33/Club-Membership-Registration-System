
<?php 
$conn = new mysqli("localhost", "root", "root", "registration");

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
      <style type="text/css">
            body{
            background-image: url("../images/3d-robot-hand-background-ai-technology-side-view.jpg" ) ;background-size: cover;
            color:white;
            padding:30px;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            text-align: center;
        }
        h1{
            background-color: #ffffff;
            background-color: hsla(0,0%,100%);
            color:#64645a;
            padding: inherit;
        }
        .btn{
   display: inline-block;
   background: var(--black);
   margin-top: 1rem;
   color:var(--white);
   font-size: 1.3rem;
   padding:1rem 3rem;
   cursor: pointer;
     animation:fadeIn .2s linear backwards .6s;
  background: white;
  color: #49678D;
   border-radius: 20px;
}

        table {
            text-align: center;
            background-color: #ffffff;
            background-color: hsla(0,0%,100%);
            color:#64645a;
            margin: 50px;
            width: 50%;
            padding: 1px;
            border:1px solid black;
            margin: auto;
        }
    </style>
</head>
<body>
<?php
// если запрос GET
if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"]))
{
    $userid = $conn->real_escape_string($_GET["id"]);
    $sql = "SELECT * FROM club WHERE id = '$userid'";
    if($result = $conn->query($sql)){
        if($result->num_rows > 0){
            foreach($result as $row){

                $name= $row["name"];
                $last_name=$row["last_name"];
                $email=  $row["email"];
                $password= $row["password"];
                $phone=  $row["phone"];
               
            }
            echo "<h1>Введите новые данные </h1>
                <form method='POST' >
<table>
 <input type='hidden' name='id' value='$userid' />
<tr><td>Name</td><td><input type='text' name='name'  value='$name' ><br></td></tr>
<tr><td>Last name</td><td><input type='text' name='last_name' value='$last_name'><br></td></tr>
<tr><td>Email</td><td><input type='email' name='email' value='$email'><br></td></tr>
<tr><td>Password</td><td><input type='password' name='password' value='$password'><br></td></tr>
<tr><td>Phone</td><td><input type='text' name='phone'value='$phone'><br></td></tr>
<tr><td></td><td><input type='submit' class='btn' value='Update'> </td></tr>
</table> 
 

</form>";
        }
        else{
            echo "<div>Пользователь не найден</div>";
        }
        $result->free();
    } 
}
else if (isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["last_name"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["phone"]) ) {
      
    $userid = $conn->real_escape_string($_POST["id"]);
    $name = $conn->real_escape_string($_POST["name"]);
    $last_name = $conn->real_escape_string($_POST["last_name"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $password= $conn->real_escape_string($_POST["password"]);
    $phone = $conn->real_escape_string($_POST["phone"]);
    $sql = "UPDATE club SET name = '$name', last_name = '$last_name',email = '$email', password = '$password',phone = '$phone' WHERE id = '$userid'";
    if($result = $conn->query($sql)){
        header("Location: show.php");
    } else{
        echo "Ошибка: " . $conn->error;
    }
}
else{
    echo "Некорректные данные";
}
$conn->close();
?>
 <br><a href = "show.php" class="btn" >Back</a>
</body>
</html>