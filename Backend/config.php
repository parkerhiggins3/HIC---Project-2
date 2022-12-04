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
    $stmt1 = $GLOBALS['pdo']->prepare("select max(cart_id) as cart_id from shopping_cart");
    $stmt1->execute();
    $cart = $stmt1->fetch()['cart_id'];
    $cart++;
    
    $stmt2 = $GLOBALS['pdo']->prepare("insert into shopping_cart values(?,?)");
    $stmt2->bindParam(1, $cart, PDO::PARAM_STR);
    $stmt2->bindParam(2, $id, PDO::PARAM_STR);
    $stmt2->execute();
}

function showCart() {
    $stmt = $GLOBALS['pdo']->prepare(
        "select 
            product_name, price
        from
            product p, shopping_cart s
        where
            p.product_id = s.product_id"
    );

    $stmt->execute();
    
    $str = "";

    while($row = $stmt->fetch()) {
        $str .= "<p>".$row['product_name']." $".$row['price']."</p>";
    }

    return $str;
}

function showTotal() {
    $stmt = $GLOBALS['pdo']->prepare(
        "select 
            price
        from
            product p, shopping_cart s
        where
            p.product_id = s.product_id"
    );

    $stmt->execute();
    $total = 0;

    while($row = $stmt->fetch()) {
        $total += $row['price'];
    }

    return $total;
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
            <h5>$".$row["price"]."</h5>
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
