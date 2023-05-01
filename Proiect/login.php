<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    
    <header>
      <h2 class="logo">AirLinesTravel</h2>
      <nav class="navigation">
        <a href="#">Home</a>
        <a href="reserveForm.html">Reserve ticket</a>
        <a href="#">Flights</a>
        <a href="#">Contact</a>
       
      </nav>
    </header>
    <div class="wrapper.active-popup">
      <span class="icon-close"><ion-icon name="close"></ion-icon></span>
      <div class="form-box login">
        <h2>Login</h2>
        <form id="loginForm" action="loginSQL.php" method="post">
          <div class="input-box">
            <span class="icon"><ion-icon name="mail"></ion-icon></span>
            <input type="email" id="email" name="email" required />
            <label for="email">Email</label>
          </div>
          <div class="input-box">
            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
            <input type="password" id="password" name="password" required />
            <label for="password">Password</label>
          </div>
          <div class="remember-forgot">
            <label><input type="checkbox" />Remember me</label>
            <a href="#">Forgot Password?</a>
          </div>
          <button type="submit" class="btn">Login</button>
          <div class="login-register">
            <p>
              Don't have an account?<a href="register.php" class="register-link"
                >Register</a
              >
            </p>
          </div>
        </form>
      </div>