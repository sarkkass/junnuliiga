<?php
if(empty($_POST)) {
  die("Access denied!");

}
require_once('db.php');

$sql = "SELECT joukkueNimi FROM sarja_f7";
$result = $conn->query($sql);

if ($result->num_rows >= 8) {
  die("Joukkuelukumäärä täyttynyt");
  
  }

else if (isset($_POST['joukkueNimi']) && !empty($_POST['joukkueNimi'])) {
  $joukkueNimi = $_POST['joukkueNimi'];
  $yhtNimi = $_POST['yhtNimi'];
  $yhtEmail = $_POST['yhtEmail'];
  $yhtPhone = $_POST['yhtPhone'];

}

$sql = "INSERT INTO sarja_f7 (joukkueNimi, yhtNimi, yhtEmail, yhtPhone) VALUES ('$joukkueNimi', '$yhtNimi', '$yhtEmail', '$yhtPhone');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: index.php');
