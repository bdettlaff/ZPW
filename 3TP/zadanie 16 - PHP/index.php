<?php 
    session_start();

    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = [];
    }
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

    <form method="POST" action="">
        <input type="submit" value="clean"><br>
    </form>
<?php

    if(isset($_POST['clean'])){
        unset($_SESSION['cart']);
        echo "Wyczyszczony koszyk!";
    }

    //utworzenie tablicy z informacjami z formularza
    //przepisanie ich z POST do nowe tablicy asocjacyjnej
    if(isset($_POST["name"])){
        $new_product = [
                'name' => $_POST["name"],
                'price' => $_POST["price"],
                'amount' => $_POST["amount"]
            ];
            //przypisanie zmiennej do koszyka
            $_SESSION['cart'][] = $new_product;
            //var_dump($_SESSION['cart']);

            //printowanie tabeli
            echo "<table border=1>";
            echo "<tr><th>Nazwa</th><th>Cena</th><th>Ilość</th><th>Suma</th></tr>";
            foreach ($_SESSION['cart'] as $product) {
                echo "<tr>";
                echo "<td>".$product['name']."</td>";
                echo "<td>".$product['price']."</td>";
                echo "<td>".$product['amount']."</td>";
                echo "<td>".($product['amount']*$product['price'])."</td>";
                echo "</tr>";
            }
            echo "</table>";
    }
    
?>
</body>
</html>

