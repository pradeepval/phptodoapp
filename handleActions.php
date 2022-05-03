<?php
include "database.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if (isset($_POST["add"])) {
  if ($_POST["inputBox"] != null) {
   addItems($_POST["inputBox"]);
  }
 } else if (isset($_POST["checked"])) {
  update_items();
 } else if (isset($_POST["deleted"])) {
  delete_items();
 }
}

header('Location: index.php');
