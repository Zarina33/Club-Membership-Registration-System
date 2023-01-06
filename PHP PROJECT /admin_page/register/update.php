<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
</head>
<style>
    table,
    td,
    tr {
        width: 50%;
        padding: 1px;
        border:1px solid black;
        margin: auto;
    }
    h2{
text-align: center;
    }
button {
  margin: 0 auto;
  display: block;
}
</style>
<body>
<h2>Bilgileri yenile</h2>
<?php
$conn =  new mysqli("localhost", "root", "root", "registration");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "SELECT * FROM club";
if($result = $conn->query($sql)){
     echo "<table>";


    foreach($result as $row){
          echo  "<tr>";

             echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["last_name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["password"] . "</td>";
            echo "<td>" . $row["phone"] . "</td>";
                    echo "<td><a href='update1.php?id=" . $row["id"] . "'>Изменить</a></td>";
    }
    echo "</table>";
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>
</body>
</html>