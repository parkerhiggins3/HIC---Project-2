
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women's Sections</title>
    <link rel="stylesheet" type="text/css"  href="src/style2.css">
    <link rel="stylesheet" type="text/css" href="src/scrollbar.css">
    <link rel="shortcut icon" type="image/png" href="src/logo.png" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<div class="header w3-bar w3-dark-grey">
        <a href="index.html" class="w3-bar-item w3-button w3-border-right w3-hover-teal w3-mobile w3-cyan" style="width:20%">Home</a>
        <a href="sections.html" class="w3-bar-item w3-button w3-border-right w3-hover-teal w3-mobile w3-cyan" style="width:20%">Sections</a>
        <a href="information.html" class="w3-bar-item w3-button w3-border-right w3-hover-teal w3-mobile w3-cyan" style="width:20%">Information</a>
        <a href="contact.html" class="w3-bar-item w3-button w3-border-right w3-hover-teal w3-mobile w3-cyan" style="width:20%">Contact</a>
        <a href="payment.php" class="w3-bar-item w3-button w3-border-right w3-hover-teal w3-mobile w3-cyan material-icons" style="width:20%">shopping_cart</a>
    </div>
    
    <h1 id="message">Women's Section</h1>

    <?php
        include "../Backend/config.php";

        $stmt = $pdo->query(
            "select 
                product_name, price, image
            from 
                product
            where
                category_id = 2"
        );

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
    ?>
    
</body>
</html>