<?php
    include "./config.php";
    
    $stmt = $pdo->prepare("
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
        values(?,?,?,?,?,?,?,?)
    ");
    
    $stmt->bindParam(1,$_POST['first_name'],PDO::PARAM_STR);
    $stmt->bindParam(2,$_POST['last_name'],PDO::PARAM_STR);
    $stmt->bindParam(3,$_POST['email'],PDO::PARAM_STR);
    $stmt->bindParam(4,$_POST['phone'],PDO::PARAM_STR);
    $stmt->bindParam(5,$_POST['address'],PDO::PARAM_STR);
    $stmt->bindParam(6,$_POST['city'],PDO::PARAM_STR);
    $stmt->bindParam(7,$_POST['state'],PDO::PARAM_STR);
    $stmt->bindParam(8,$_POST['zip'],PDO::PARAM_STR);

    $stmt->execute();
    echo "Thank you for signing up! Click <a href='../Frontend/index.html'>here</a> to return to the home page.";
?>