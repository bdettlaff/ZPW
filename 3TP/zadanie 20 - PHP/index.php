<?php
    require_once "db_connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label for="id">ID</label>
        <input name="id" type="number"><br>
        <label for="name">Nazwa</label>
        <input name="name" type="text"><br>
        <label for="price">Cena</label>
        <input name="price" type="number"><br>
        <label for="amount">Ilość</label>
        <input name="amount" type="number"><br>
        <input type="submit" value="Wyslij"><br>
    </form> 
<?php
    if(isset($_POST["name"]) && isset($_POST["price"]) && isset($_POST["amount"]) && isset($_POST["id"] )){
        $name = $_POST["name"];
        $price = $_POST["price"];
        $amount = $_POST["amount"];
        $id =  $_POST["id"];
        
        $sql = "UPDATE `products` SET
         `name`='$name',
         `price`='$price',
         `amount`='$amount'
          WHERE `id`='$id'";

        $result = mysqli_query($conn, $sql);

        if($result){
            echo "Zaktualizowano rekord o id: ".$id;
        } else {
            echo "Błąd aktualizacji: ". mysqli_error($conn);
        }

        mysqli_close($conn);
    }
?>
</body>
</html>

