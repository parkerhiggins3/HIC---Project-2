<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sales";
global $pdo;
$GLOBALS['pdo'] = new PDO("mysql:host=$host;dbname=$db",$user,$pass);

try {
}

catch(PDOException $error) {
    echo "Connection failed";
}

function clearCart() {
    $GLOBALS['pdo']->query("delete from cart");
}

function addToCart($id) {
    $stmt = $GLOBALS['pdo']->prepare("insert into cart values((select max(cart_id) from cart)+1,?)");
    $stmt->bindParam(1, $id, PDO::PARAM_STR);
    $stmt->execute();
}

function showItems($id) {
    $stmt = $GLOBALS['pdo']->prepare(
        "select 
            product_name, price, image
        from 
            product
        where
            category_id = ?"
    );

    $stmt->bindParam(1, $id, PDO::PARAM_STR);
    $stmt->execute();

    $count = 0;

    echo "<div class='list'>";

    while($row = $stmt->fetch()) {
        if($count % 4 == 0) {
            echo "</div><div class='list'>";
        }

        echo "
            <div class='items'>
            <img src='".$row["image"]."'>
            <h3>".$row["product_name"]."</h3>
            <h5>".$row["price"]."</h5>
            <p>Available in all sizes</p>
            </div>
        ";
    }
}
?>