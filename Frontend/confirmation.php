<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation page</title>
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
        <a href="contact.html" class="w3-bar-item w3-button w3-border-right w3-hover-teal w3-mobile w3-cyan" style="width:20%">Contact</a>
        <a href="payment.php" class="w3-bar-item w3-button w3-border-right w3-hover-teal w3-mobile w3-cyan material-icons" style="width:20%">shopping_cart</a>
        <a href="profile.php" class="w3-bar-item w3-button w3-border-right w3-hover-teal w3-mobile w3-cyan material-icons" style="width:20%">person</a>
    </div>

    <h1 id="message"><b>Order Confirmation</b></h1>

    <div class="order">
        <h1><b>Thank you for order</b></h1>
        <h3><b>Confirmation code(#):<?php echo rand(0001, 9999) ?></b></h3>
        <h3><b>More details:</b></h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has 
            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a</p>
    </div>

</body>
</html>