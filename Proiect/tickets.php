
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
<?php
  session_start();
  if (isset($_SESSION["ID"]) && isset($_SESSION["FullName"])) {
    echo '<nav class="navigation">';
    echo '<a href="#">Home</a>';
    echo '<a href="reserveForm.html">Reserve ticket</a>';
    echo '<a href="tickets.php">Flights</a>';
    echo '<a href="#">Contact</a>';
    echo '<div class="dropdown">';
    echo '<button class="dropbtn">Bine ai venit, ' . $_SESSION["FullName"] . '</button>';
    echo '<div class="dropdown-content">';
    echo '<form action="login.php" method="post"><button type="submit" name="logout">Logout</button></form>';
    echo '</div>';
    echo '</div>';
    echo '</nav>';
  } else {
    echo '<nav class="navigation">';
    echo '<a href="#">Home</a>';
    echo '<a href="loginForm.html">Login</a>';
    echo '<a href="registerForm.html">Register</a>';
    echo '<a href="#">Flights</a>';
    echo '<a href="#">Contact</a>';
    echo '</nav>';
  }
  
  if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
  }
?>
    </header>
<?php
include 'dbConnection.php';

// Extrage toate zborurile din baza de date
$sql = "SELECT * FROM tickets";
$result = mysqli_query($conn, $sql);

// Afiseaza zborurile intr-un tabel HTML
echo "<table>";
echo "<tr><th>Locatia de plecare</th><th>Destinatia</th><th>Data de plecare</th><th>Clasa de calatorie</th><th>Pret</th><th></th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["Source"] . "</td>";
    echo "<td>" . $row["Destination"] . "</td>";
    echo "<td>" . $row["DepartureDate"] . "</td>";
    echo "<td>" . $row["Class"] . "</td>";
    echo "<td>" . $row["Price"] . "</td>";
   echo '<td><a class="button" href="reserveForm.php?id=' . $row["TicketID"] . '">Rent</a></td>';
echo "</tr>";
}
echo "</table>";

// Elibereaza rezultatul si inchide conexiunea cu baza de date
mysqli_free_result($result);
mysqli_close($conn);
?>