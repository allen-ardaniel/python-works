<?php

    if (empty($_POST["email"])){
        die("Email is required!");
    }
    if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        die("Valid email is required!");
    }

    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "INSERT INTO info (email)
    VALUES (?)";

    $stmt = $mysqli->stmt_init();
    $stmt->prepare($sql);

    if (! $stmt->prepare($sql)){
    die("Error: " . $mysqli->error);
    }

    $stmt->bind_param("s",
                        $_POST["email"]
                        );

    if($stmt->execute()){
       header("Location: success.php");
       exit;
    }
    else { if ($mysqli->errno === 1062){
        die("Email already taken");
    }
        die($mysqli->error . " " . $mysqli->errno);
    }
    
    ?>