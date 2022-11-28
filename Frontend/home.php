<?php
    include "../Backend/config.php";

    clearCart();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alko's Home</title>
    <link rel="stylesheet" type="text/css"  href="src/style.css">
    <link rel="stylesheet" type="text/css" href="src/scrollbar.css">
    <link rel="shortcut icon" type="image/png" href="src/logo.png" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
        <div class="header w3-bar w3-dark-grey">
            <a href="sections.html" class="w3-bar-item w3-button w3-border-right w3-hover-teal w3-mobile w3-cyan" style="width:20%">Sections</a>
            <a href="information.html" class="w3-bar-item w3-button w3-border-right w3-hover-teal w3-mobile w3-cyan" style="width:20%">Information</a>
            <a href="contact.html" class="w3-bar-item w3-button w3-border-right w3-hover-teal w3-mobile w3-cyan" style="width:20%">Contact</a>
            <a href="payment.php" class="w3-bar-item w3-button w3-border-right w3-hover-teal w3-mobile w3-cyan material-icons" style="width:20%">shopping_cart</a>
            <a href="profile.php" class="w3-bar-item w3-button w3-border-right w3-hover-teal w3-mobile w3-cyan material-icons" style="width:20%">person</a>
        </div>
        
        <h1 id="welcome">ALKO</h1>
        <h2 id="message">Keep up with trending fashion</h2>
    
        <div class="allsections">
            <a id="sect" href="sections.html"><b>Get Shopping</b></a>
        </div>
        <video autoplay loop class="bg-video" muted plays-inline> 
            <source src="src/bgvideo.mp4" type="video/mp4"></source>
        </video>
    

        <div class="matter">
            <div class="matter-image">
                <img src="src/insurance.jpg">
            </div>
            <div class="matter-des">
                <h3><b>Service that can be trusted</b></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae felis id diam mattis porttitor. Cras consequat turpis vel lorem posuere, vel ullamcorper lacus cursus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vivamus aliquet nunc a lacus maximus sodales. Duis eleifend augue non pulvinar commodo. Pellentesque ac pretium diam. Ut arcu dolor, malesuada quis metus aliquet, hendrerit semper nisi. Phasellus posuere lacinia nisi nec ultricies. Nulla fermentum mattis dui id commodo. 
                    Vivamus eu nisi vel libero dignissim scelerisque. Donec mattis nisi non sollicitudin elementum. Quisque a scelerisque magna.</p>
            </div>
        </div>

</body>

</html>