<?php
include "database.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if (isset($_POST["add"])) {
  if ($_POST["inputBox"] != null) {
   addItems($_POST["inputBox"]);
  }
 } else if (isset($_POST["checked"])) {
  //echo $_POST["checked"];
  updateItems($_POST["checked"]);
 } else if (isset($_POST["deleted"])) {
  deleteItems($_POST["deleted"]);
 }
}

header('Location: index.php');
