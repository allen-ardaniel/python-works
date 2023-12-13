<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user_info
                    WHERE email = '%s'",
                   ($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: index1.php");
            exit;
        }
    }
    
    $is_invalid = true;
}
?>
<html>
<head>
    <title> Login </title>
    <meta charset = "UTF-8">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h1>  Login </h1>
   
<form method = "post"> 
            <label for = "email"> Email </label>
            <input type = "text" id = "email" name = "email">
      
            <label for = "password"> Password </label>
            <input type = "text" id = "password" name = "password">

        <button> Log In </button></a>
</form>
</body>
</html>
