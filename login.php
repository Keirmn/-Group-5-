<?php
$is_invalid = false;

if($_SERVER["REQUEST_METHOD"] === "POST") {

  $mysqli = require __DIR__ . "/database.php";

  $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
  
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();

    if ($user) {
        
      if (password_verify($_POST["password"], $user["password_hash"])) {
        
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: index.php");
            exit;
}
    }
    $is_invalid = true;
  }
?>

<!DOCTYPE html>
<html>
    <html>
        <head>
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Login Page</title>
          <link rel="stylesheet" href="loginstyle.css">
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Lora">
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald|Noto+Sans">
        </head>
        <body>
          <div class="bgImage"></div>
          <div class="container">
            <div class="login">
              <br><br><br><br>
        
              <form method="post" autocomplete="off">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email"
                  value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
        
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
                <br>
              <?php if ($is_invalid): ?>
                <em>Login failed. Please try again.</em>
              <?php endif; ?>
                <button class="submit">LOGIN</button>
                <button type="button" class="register"; onclick="location.href='register.php'">CREATE AN ACCOUNT</button>
                <br><br><br><br><br><br><br><br><br><br><br><br><br>
                <br><br>
              </form>
            </div>
            <div class ="info">
              <img src="Logo.png" class="logo">
              <p class="text"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid excepturi ipsa repellendus, officia reiciendis, magnam dolor amet nesciunt nemo porro consequatur odit. Possimus pariatur veniam ullam iste fugit perspiciatis voluptas? </p>
            </div>
          </div>
        </body>
        </html>
</html>
