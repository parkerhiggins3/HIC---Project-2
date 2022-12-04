
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
        <a href="payment.php" class="w3-bar-item w3-button w3-border-right w3-hover-teal w3-mobile w3-cyan material-icons" style="width:20%">shopping_cart</a>

    </div>

    <h1 id="message">Profile settings</h1>

    <div class="divider">
        <div class="wishlist">
            <h3><b>Wishlist:</b></h3>

            <h3><b>Favorites items:</b></h3>

            <h3><b>Saved items:</b></h3>
        </div>
        <div class="personal-data">
            <form class="profile-form" action="confirm_prof.html" name="cust_form" method="post">
                <p><b>Personal details:</b></p><br>
                <label><b>First Name:</b></label>
                <input type="text" name="first_name"><br><br>
                <label><b>Last Name:</b></label>
                <input type="text" name="last_name"><br><br>
                <label><b>Email:</b></label>
                <input type="email" name="email"><br><br>
                <label><b>Phone:</b></label>
                <input type="tel" name="phone_number">
                <p><b>Address:</b></p>
                <label><b>Address:</b></label>
                <input type="text" name="address"><br><br>
                <label><b>City:</b></label>
                <input type="text" name="city"><br><br>
                <label><b>State:</b></label>
                <select name="state">
                    <option>Select a State</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                </select><br><br>
                <label><b>Zipcode:</b></label>
                <input type="number" name="zip"><br><br>
            </form>
        </div>
        <div class="displaypic">
                <img src="src/dp.png" alt="Plain dp"><br><br>
                <label><b>Upload profile pic:</b></label><br><br>
                <input type="file" name="img" accept="image/*"> 
        </div>
    </div>

    <button id="bt"><a href='confirm_profile.html'>Submit</a></button>

</body>
</html>