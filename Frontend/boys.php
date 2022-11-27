<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boy's Section</title>
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
    
    <h1 id="message">Boy's Section</h1>

    <div class="list">
    <?php
        include "../Backend/config.php";

        $stmt = $pdo->prepare(
            "select 
                product_name, price, image
            from 
                product
            where
                category_id = 1"
        );

        $stmt->execute();

        while($row = $stmt->fetch()) {
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
    </div> 

    <div class="list">
        <div class="items">
            <img src="src/example.jpg">
            <h3>Shirt</h3>
            <h5>$49</h5>
            <p>Available in all sizes</p>
        </div>
        <div class="items">
            <img src="src/example.jpg">
            <h3>Shirt</h3>
            <h5>$49</h5>
            <p>Available in all sizes</p>
        </div>
        <div class="items">
            <img src="src/example.jpg">
            <h3>Shirt</h3>
            <h5>$49</h5>
            <p>Available in all sizes</p>
        </div>
        <div class="items">
            <img src="src/example.jpg">
            <h3>Shirt</h3>
            <h5>$49</h5>
            <p>Available in all sizes</p>
        </div>
    </div>
    
</body>
</html>