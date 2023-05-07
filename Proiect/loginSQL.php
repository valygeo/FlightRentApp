 <?php
include 'dbConnection.php';
// Verifica dacă s-au trimis date prin POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Se preiau datele de autentificare din formularul de autentificare
  $email = $_POST["email"];
  $password = $_POST["password"];

  
  // Se caută utilizatorul în baza de date după email
  $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();
 

  // Verifică dacă s-a găsit utilizatorul
  if ($result->num_rows == 1) {
    
    // Preia datele utilizatorului
    $user = $result->fetch_assoc();

    // Verifică parola
    if (password_verify($password, $user["Password"])) {
      
      // Setează sesiunea și redirecționează către pagina principală a aplicației
      session_start();
      $_SESSION["ID"] = $user["ID"];
       $_SESSION["FullName"] = $user["FullName"];
      header("Location: home.php");
      exit();
    } else {
      echo "Parola introdusă este incorectă";
    }
  } else {
    echo "Utilizatorul nu există";
  }

  $stmt->close();
  $conn->close();
}

?> 
