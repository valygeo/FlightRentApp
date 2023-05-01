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
        <button class="btnLogin-popup">Login</button>
      </nav>
    </header>
     <div class="form-box register">
        <h2>Registration</h2>
        <form id="registerForm" action="signupSQL.php" method="post">
          <div class="input-box">
            <span class="icon"><ion-icon name="person"></ion-icon></span>
            <input
              type="text"
              required
              id="registerFullName"
              name="registerFullName"
            />
            <label for="registerFullName">Full Name</label>
          </div>
          <div class="input-box">
            <span class="icon"><ion-icon name="mail"></ion-icon></span>
            <input
              type="email"
              id="registerEmail"
              name="registerEmail"
              required
            />
            <label for="registerEmail">Email</label>
          </div>
          <div class="input-box">
            <span class="icon"><ion-icon name="call"></ion-icon></span>
            <input type="text" id="phoneNumber" name="phoneNumber" required />
            <label for="phoneNumber">Phone Number</label>
          </div>
          <div class="input-box">
            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
            <input
              type="password"
              id="registerPassword"
              name="registerPassword"
              required
            />
            <label>Password</label>
          </div>
          <div class="input-box">
            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
            <input
              type="password"
              name="confirmPassword"
              id="confirmPassword"
              required
            />
            <label for="confirmPassword">Confirm Password</label>
          </div>
          <div class="remember-forgot">
            <label
              ><input required type="checkbox" />I agree to the terms &
              conditions</label
            >
          </div>
          <button type="submit"  class="btn">Register</button>
          <div class="login-register">
            <p>
              Already have an account?<a href="#" class="login-link">Login</a>
            </p>
          </div>
        </form>
      </div>
    </div>