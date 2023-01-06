<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    h1{
text-align: center;
    }
    .btn{
   display: inline-block;
   background: var(--black);
   margin-top: 1rem;
   color:var(--white);
   font-size: 1rem;
   padding:1rem 2rem;
   cursor: pointer;
     animation:fadeIn .2s linear backwards .6s;
  background: white;
  color: #49678D;
   border-radius: 20px;
}
</style>
<body>
     <h1>Update/Delete DATABASE</h1>

 <?php
$conn = new mysqli("localhost", "root", "root", "registration");
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
            echo "<td>" . $row["phone"] . "</td>";
            echo "<td>" . $row["user_type"] . "</td>";
             echo "<td><a class='btn'href='update1.php?id=" . $row["id"] . "'>Update</a></td>";
?>
    <?php   
           
            echo "<td><form action='delete.php' method='post'>
                        <input type='hidden' name='id' value='" . $row["id"] . "' />
                        <input type='submit' class='btn' value='Delete'>
                </form></td>";
            echo "<td><form action='update.php' method='post'>
                        <input type='hidden' name='id' value='" . $row["id"] . "' />
                </form></td>";
            echo "</tr>"; 
        
    }
   echo "</table>";


    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>
 <br><a href = "../admin_page.php" class="btn" >Back</a>

</body>
</html>
