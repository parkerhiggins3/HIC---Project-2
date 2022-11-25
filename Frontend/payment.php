<?php
    include "../Backend/config.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" type="text/css"  href="src/style.css">
    <link rel="stylesheet" type="text/css" href="src/scrollbar.css">
    <link rel="shortcut icon" type="image/png" href="src/logo.png" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
    </div>
    <h2>Cart</h2>
    <div class="divider">
        <div class="items">
            <h3>Items in your cart:</h3>
            <p>Item 1:</p>
            <img src="" alt="item1">
            <p>Item 2:</p>
            <img src="" alt="item1">
            <p>Item 3:</p>
            <img src="" alt="item1">
            <p>Item 4:</p>
            <img src="" alt="item1">
        </div>
        <div class="card-details">
            <h3>Payment</h3>
            <p><b>Card details:</b></p>
            <select>
                <option value="method">Payment method</option>
                <option value="debit card">Debit card</option>
                <option value="credit card">Credit card</option>
                <option value="cash">Cash on delivery</option>
            </select><br><br>
            <input type="text" class="card-number" placeholder="Card Number">
            <p><b>Expiration month:</b></p>
            <div class="expiration-date">
                <select name="Month">
                    <option value="january">January</option>
                    <option value="february">February</option>
                    <option value="march">March</option>
                    <option value="april">April</option>
                    <option value="may">May</option>
                    <option value="june">June</option>
                    <option value="july">July</option>
                    <option value="august">August</option>
                    <option value="september">September</option>
                    <option value="october">October</option>
                    <option value="november">November</option>
                    <option value="december">December</option>
                </select>
            </div>
            <div class="year">
                <select name="Year">
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2024">2025</option>
                    <option value="2024">2026</option>
                    <option value="2024">2027</option>
                    <option value="2024">2028</option>
                    <option value="2024">2029</option>
                    <option value="2024">2030</option>
                    <option value="2024">2031</option>
                </select>
            </div>
            <div class="card-verification">
                <p><b>CVV:</b></p>
                <input type="text" placeholder="CVV">
            </div><br>
            <div class="billing">
                <p><b>Billing address:</b></p>
                <input type="text" placeholder="..">
            </div><br>
            <button type="submit" class="proceed-btn"><a href="#">Proceed</a></button>
        </div>
            
    </div>
</body>
</html>