<?php
$servername = "localhost";
$username = " ";
$password = " ";
$dbname = " ";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connessione fallita: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$email = $_POST['email'];

$stmt = $conn->prepare("INSERT INTO listautenti (nome, cognome, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nome, $cognome, $email);

if ($stmt->execute()) {
  echo "Dati inseriti con successo!";
} else {
  echo "Errore durante l'inserimento dei dati: " . $stmt->error;
}


$stmt->close();
$conn->close();
?>
