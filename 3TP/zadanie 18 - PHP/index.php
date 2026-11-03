<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "warehouse";

//Tworzenie połączenia
$conn = mysqli_connect($host, $username, $password, $database);

if(!$conn){
    die("Połączenie nie powiodło się.");
}
echo "Połączenie się powiodło.";

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
        <label for="name">Nazwa</label>
        <input name="name" type="text"><br>
        <label for="price">Cena</label>
        <input name="price" type="number"><br>
        <label for="amount">Ilość</label>
        <input name="amount" type="number"><br>
        <input type="submit" value="Wyslij"><br>
    </form> 
<?php
    if(isset($_POST["name"]) && isset($_POST["price"]) && isset($_POST["amount"])){
        echo "Nazwa: ".$_POST["name"]."<br>";
        echo "Cena: ".$_POST["price"]."<br>";
        echo "Ilość: ".$_POST["amount"]."<br>";

        $name = $_POST["name"];
        $price = $_POST["price"];
        $amount = $_POST["amount"];
        //Tabela Products
        //Pola: id, name, price, amount
        
        $sql = "INSERT INTO `products`(`name`, `amount`, `price`) VALUES ('$name','$amount','$price')";
        
        //wykonuje zapytanie na bazie danych na postawie podanego SQLa oraz połączenia z BD
        if(mysqli_query($conn, $sql)){
            echo "Udało się dodać rekord!";
        } else {
            //mysqli_error - wyciąga błąd z połączenia
            echo "Bluescreen Panie Heniu: ". mysqli_error($conn);
        }

        mysqli_close($conn);
    }
?>
</body>
</html>

