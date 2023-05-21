<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Login Page</title>
          <link rel="stylesheet" href="style.css">
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Lora">
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald|Noto+Sans">
        </head>
        <body>
    <div style="display:block; width:100%" >
    <div style="width:40%; float: left; display: inline-block;" class="left">
		<div class="container">
            <div class="login">
              <h3>CREATE AN ACCOUNT</h3>
        
              <form method="post" action="process-signup.php">
                  <label for="username">USERNAME</label>
                  <input type="text" id="username" name="username" required>
        
                  <label for="email">EMAIL</label>
                  <input type="email" id="email" name="email" required>

                  <label for="password">PASSWORD</label>
                  <input type="password" id="password" name="password" required>

                <br><br>
                <button class="registerbutton">CREATE ACCOUNT</button>
                <button type="button" class="loginbutton"; onclick="location.href='login.jsp';">GO BACK TO LOGIN</button>
		</div>
		
</div></div>
    <div style="width:60%; float: left; display: inline-block;" class="right">
    <img src="images/Logo.png" class="logo">
    <p>The CAMP for Haribon Computer Enthusiasts!</p>
    
    
    
    </div> 
          
          
          
        </body>
        </html>