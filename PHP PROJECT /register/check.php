<?php

    $name=$_POST["name"];
    $last_name=$_POST["last_name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $phone=$_POST["phone"];

    if(mb_strlen(($name))<0 || mb_strlen($name)>50){
        echo "Недопустимая длина name (от 0 до 50)";
        exit();
    } else if (mb_strlen(($last_name))<0 || mb_strlen($last_name)>50){
        echo "Недопустимая длина last name (от 0 до 50)";
        exit();
    }
    else if (mb_strlen(($email))<0 || mb_strlen($email)>50){
    echo "Недопустимая длина email (от 0 до 50)";
    exit();
    }
      else if (mb_strlen(($password))<0 || mb_strlen($password)>30){
    echo "Недопустимая длина password (от 0 до 30)";
    exit();
    }
         else if (mb_strlen(($phone))<0 || mb_strlen($phone)>30){
    echo "Недопустимая длина password (от 0 до 50)";
    exit();
    }




    $pass = md5($pass."asd123");
    $mysql = new mysqli('localhost','root','root','register');
    $mysql->query("INSERT INTO `club`(`name`,`last_name`,`email`,`password`, `phone`)
    VALUES('$name','$last_name','$email','$password','$phone')");     

    $mysql->close();

    header('Location: kayityap.php');
?>