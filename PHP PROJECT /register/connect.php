<?php 
    $mysql = new mysqli('localhost','root','root','registration');

if ($mysql == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    print("Соединение установлено успешно");
}
?>