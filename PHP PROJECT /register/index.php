<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
      <style type="text/css">
            body{
            background-color: silver;
            color:white;
            padding:10px;
            font-family: Arial,Verdana,sans-serif;
        }
        h1{
            background-color: #ffffff;
            background-color: hsla(0,0%,100%);
            color:#64645a;
            padding: inherit;
        }
        button{
            border-radius: 10px;
            color:#64645a;
        }
    </style>
</head>
<body>
 
    <div class="container mt-4"><center><h1>Регистрация</h1></center>
    <center>
       <form name="form1" method="POST" action="check.php" >             
        <table>
        <tr><td></td><td><input type="text" class="form-control" name="name" id="name" placeholder="Name"><br></td></tr>
        <tr><td></td><td><input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last_name"><br></td></tr>
        <tr><td></td><td><input type="email" class="form-control" name="email" id="email" placeholder="Email"><br></td></tr>

        <tr><td></td><td><input type="text" class="form-control" name="password" id="password" placeholder="password"><br></td></tr>

        <tr><td></td><td><input type="text" class="form-control" name="phone" id="phone" placeholder="Phone number"><br></td></tr>

    <tr><td></td><td><center><button><input type="submit" value="Зарегистрироваться"></button></center></td></tr></table>
    </center>
    <br><center><a href="show.php"><button>Показать БД</button></a></center>
   
</body>
</html>
