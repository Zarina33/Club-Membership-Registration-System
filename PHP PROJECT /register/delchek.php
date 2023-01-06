
<?php
 
  $id=$_POST["id"];
   
    if(mb_strlen(($name))<0 || mb_strlen($name)>50){
        echo "Недопустимая длина name (от 0 до 50)";
        exit();
    }
     else if(mb_strlen(($last_name))<0 || mb_strlen($last_name)>50){
        echo "Недопустимая длина last_name (от 0 до 50)";
        exit();
    }
     else if(mb_strlen(($email))<0 || mb_strlen($email)>50){
        echo "Недопустимая длина email (от 0 до 50)";
        exit();
    }
     else if(mb_strlen(($password))<0 || mb_strlen($password)>30){
        echo "Недопустимая длина Password (от 0 до 30)";
        exit();
    }
     else if(mb_strlen(($phone))<0 || mb_strlen($phone)>50){
        echo "Недопустимая длина Phone (от 0 до 50)";
        exit();
    }
    

    $mysql = new mysqli('localhost','root','root','registration');
    $mysql->query("DELETE FROM `club` WHERE `id` = '$id'");
   $mysql->close();
   header('Location: delete.php');

?>