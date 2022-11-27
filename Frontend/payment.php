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
    <div class="header w3-bar w3-dark-grey">
        <a href="index.html" class="w3-bar-item w3-button w3-border-right w3-hover-teal w3-mobile w3-cyan" style="width:20%">Home</a>
        <a href="sections.html" class="w3-bar-item w3-button w3-border-right w3-hover-teal w3-mobile w3-cyan" style="width:20%">Sections</a>
        <a href="information.html" class="w3-bar-item w3-button w3-border-right w3-hover-teal w3-mobile w3-cyan" style="width:20%">Information</a>
        <a href="contact.html" class="w3-bar-item w3-button w3-border-right w3-hover-teal w3-mobile w3-cyan" style="width:20%">Contact</a>
        <a href="profile.php" class="w3-bar-item w3-button w3-border-right w3-hover-teal w3-mobile w3-cyan material-icons" style="width:20%">person</a>

    </div>

    <h2 id="message">Shopping Cart</h2>

    <div class="payment">
        <div class="items">
            <h3>Items in your cart:</h3>
            <p>Item 1:</p>
            <p>Item 2:</p>
            <p>Item 3:</p>
            <p>Item 4:</p>
        </div>
        <div class="card-details">
            <h3><b>Payment</b></h3>
            <p><b>Card details:</b></p>
            <p><b>Payment method:</b></p>
            <select>
                <option value=></option>
                <option value="debit card">Debit card</option>
                <option value="credit card">Credit card</option>
                <option value="cash">Cash on delivery</option>
            </select><br><br>
            <input type="text" class="card-number" placeholder="Card Number">
            <p><b>Expiration month:</b></p>
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
            <p><b>CVV:</b></p>
            <input type="text" placeholder="CVV">
        </div>
    </div>

    <button id="bt">Proceed</button>

</body>
</html>