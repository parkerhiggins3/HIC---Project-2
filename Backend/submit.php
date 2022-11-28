<?php
    include "./config.php";
    if(empty($pdo->query("select user_id from customer where email = ".$_POST['email'])->fetch())) {
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
        echo "Thank you for signing up! Click <a href='../Frontend/index.html'>here</a> to return to the home page.";
    } else {
        echo "Error submitting, email already in use!";
        echo "<p>Click <a href='../Frontend/profile.php'>here</a> to return to the sign up page.</p>";
    }
?>