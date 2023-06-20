<!DOCTYPE html>
<html>
<head>
  <title>Form Utenti</title>
</head>
<body>
  <h2>Inserisci dati utente</h2>
  <form method="POST" action="insert_utente.php">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" required><br>

    <label for="cognome">Cognome:</label>
    <input type="text" name="cognome" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" required><br>

    <input type="submit" value="Invia">
  </form>
</body>
</html>