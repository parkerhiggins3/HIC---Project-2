<?php
    include "../Backend/config.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Men's Section</title>
    <link rel="stylesheet" type="text/css"  href="src/style.css">
    <link rel="stylesheet" type="text/css" href="src/scrollbar.css">
    <link rel="shortcut icon" type="image/png" href="src/logo.png" />
    <link type="text/css" rel="stylesheet" href="magicscroll/magicscroll.css"/>
    <script type="text/javascript" src="magicscroll/magicscroll.js"></script>
</head>
<body>
    <div class="header">
        <a href="index.html">Home</a>
        <a href="sections.html">Sections</a>
        <a href="information.html">Information</a>
        <a href="contact.html">Contact</a>
        <a href="payment.html">
            <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
                <lord-icon
                src="https://cdn.lordicon.com/udbbfuld.json"
                trigger="hover"
                style="width:50px;height:50px">
                </lord-icon>
        </a>
        <a href="profile.html"> 
            <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/hbvyhtse.json"
                    trigger="hover"
                    style="width:50px;height:50px">
                </lord-icon>
        </a>
    </div>
    
    <div class="MagicScroll" data-options="mode: carousel; height: 275px;">
    <img src="example1.jpg" />
    <img src="example2.jpg" />
    </div>

</body>
</html>