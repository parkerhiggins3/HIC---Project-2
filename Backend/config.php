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

function showCart() {
    $stmt = $GLOBALS['pdo']->prepare(
        "select 
            name, price
        from
            product p, shopping_cart s
        where
            p.product_id = s.product_id"
    );

    $stmt->execute();
    
    $str = "";
    $total = 0;

    while($row = $stmt->fetch()) {
        $str .= "<p>".$row['name']." $".$row['price']."</p>";
        $total += $row['price'];
    }
}

function showItems($id) {
    $stmt = $GLOBALS['pdo']->prepare(
        "select 
            product_id, product_name, price, product_image
        from 
            product
        where
            category_id = ?"
    );

    $stmt->bindParam(1, $id, PDO::PARAM_STR);
    $stmt->execute();

    $count = 0;

    $str = "<div class='list'>";

    while($row = $stmt->fetch()) {
        if($count % 4 == 0) {
            $str .= "</div><div class='list'>";
        }

        $str .= "
            <div class='items'>
            <img src='".$row["product_image"]."'>
            <h3>".$row["product_name"]."</h3>
            <h5>".$row["price"]."</h5>
            <p>Available in all sizes</p>
            <form method='post' action='payment.php'>
            <input type='hidden' name='id' value='".$row["product_id"]."'/>
            <input type='submit' name='btn' value='Add to cart'/>
            </form>
            </div>
        ";

        $count++;
    }

    return $str;
}
?>
