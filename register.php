<!DOCTYPE html>
<html>
    <html>
        <head>
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Login Page</title>
          <link rel="stylesheet" href="registerstyle.css">
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Lora">
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald|Noto+Sans">
          <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
          <script src="js/validation.js" defer></script>
        </head>
        <body>
          <div class="bgImage"></div>
          <div class="container">
            <div class="login">
              <br><br><br><br>
              <form action="process-signup.php" method="post" id="register" autocomplete="off" novalidate>
                <div class="username">
                  <label for="username">Username:</label>
                  <input type="text" id="username" name="username" required>
                </div>

                <div class="email">
                  <label for="email">Email:</label>
                  <input type="email" id="email" name="email" required>
                </div>

                <div class="password">
                  <label for="password">Password:</label>
                  <input type="password" id="password" name="password" required>
                </div>

                <div class="confirm_password">
                  <label for="confirm_password"> Confirm Password:</label>
                  <input type="password" id="confirm_password" name="confirm_password" required>
                </div>

                <br><br>
                <button class="register">CREATE ACCOUNT</button>
                <button type="button" class="submit"; onclick="location.href='login.php';">GO BACK TO LOGIN</button>
                <br><br><br><br><br><br>
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

