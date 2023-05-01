<?php

 include 'dbConnection.php';
  $stmt = $conn->prepare("INSERT INTO users (FullName, Email, PhoneNumber, Password) VALUES (?, ?, ?, ?)");

  
  if ($stmt === false) {
    die("Error preparing statement");
  }

  
  $full_name = $_POST['registerFullName'];
  $email = $_POST['registerEmail'];
  $phone_number = $_POST['phoneNumber'];
  $password = password_hash($_POST['registerPassword'], PASSWORD_DEFAULT);

  
  $stmt->bind_param("ssss", $full_name, $email, $phone_number, $password);

  
  if ($stmt->execute()) {
    echo "User added successfully";
  } else {
    echo "Error adding user: " . $stmt->error;
  }

 
  $stmt->close();
  mysqli_close($conn);
?>