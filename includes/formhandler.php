<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (
    empty($_POST["firstname"]) ||
    empty($_POST["lastname"]) ||
    empty($_POST["favouritepet"])
  ) {
    exit;
  }
  $firstname = htmlspecialchars($_POST["firstname"]);
  $lastname = htmlspecialchars($_POST["lastname"]);
  $favouritepet = htmlspecialchars($_POST["favouritepet"]);

  echo "First name: " . $firstname . "<br>";
  echo "Last name: " . $lastname . "<br>";
  echo "Favourite pet: " . $favouritepet . "<br>";

  header("Location: ../index.php");
} else {
  header("Location: ../index.php");
}
