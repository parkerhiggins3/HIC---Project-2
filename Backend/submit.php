<?php
    include "./config.php";
    
    try {
        $s = "
            insert into
                customer(
                    first_name,
                    last_name,
                    email,
                    phone,
                    address,
                    city,
                    state,
                    zip
                )
            values('
                ".$_POST['first_name']."',
                ".$_POST['last_name']."',
                ".$_POST['email']."',
                ".$_POST['phone']."',
                ".$_POST['address']."',
                ".$_POST['city']."',
                ".$_POST['state']."',
                ".$_POST['zip']."'
            )
        ";
        $pdo->query($s);
        echo "Thank you for submitting a profile! Click <a href='../Frontend/index.html'>here</a> to return to the home page.";
    } catch(PDOException $error) {
        echo "Error submitting profile, profile may already exist!";
        echo "<p>Click <a href='../Frontend/profile.php'>here</a> to return to the profile page.</p>";
    }
?>