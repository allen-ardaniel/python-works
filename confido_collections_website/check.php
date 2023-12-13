<?php
    $mysqli = require __DIR__ . "/database.php";

    $sql = "INSERT INTO buy (name, number, expiry, ccv)
    VALUES (?,?,?,?)";

    $stmt = $mysqli->stmt_init();
    $stmt->prepare($sql);

    if (! $stmt->prepare($sql)){
    die("Error: " . $mysqli->error);
    }

    $stmt->bind_param("ssss",
                        $_POST["name"],
                        $_POST["number"],
                        $_POST["expiry"],
                        $_POST["ccv"]
                        );

    if($stmt->execute()){
       header("Location: success1.php");
       exit;
    }
    else { if ($mysqli->errno === 1062){
        die("Email already taken");
    }
        die($mysqli->error . " " . $mysqli->errno);
    }
    
    ?>