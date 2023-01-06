<?php
if(isset($_POST["id"]))
{
    $conn = new mysqli("localhost", "root", "root", "registration");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $userid = $conn->real_escape_string($_POST["id"]);
    $sql = "DELETE FROM club WHERE id = '$userid'";
    if($conn->query($sql)){
         
        header("Location: check.php");
    }
    else{
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();  
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
       <style type="text/css">
            body{
            background-color: silver;
            color:white;
            padding:20px;
            font-family: Arial,Verdana,sans-serif;
              border-radius: 10px;
        }
        h1{
            background-color: #ffffff;
            background-color: hsla(0,100%,100%,0.5);
            color:#64645a;
            padding: inherit;
              border-radius: 10px;
        }
        div{
            text-align: center;
        }
        button{
            color: #64645a;
            background-color: hsla(0,0%,100%);
            border-radius: 10px;
        }
    </style>
</head>
<body>
    
    <div class="container mt-4"><h1>Delete</h1>
        
           <form name="form1" method="POST" action="delchek.php">             
       <input type="text" class="form-control" name="id" id="id" placeholder="id yazin "><br>
            <a href="delchek.php"><button>Удалить</button></a><br><br>
        <button> <a href="index.php">Регистрация</a></button>
         <button> <a href="kayityap.php">Вернуться</a></button>
      

    </form>
</div>
</body>
</html>