<?php
include "database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
       <h1 class="top-heading"> TODO LIST APLLICATION</h1>
    <div class="container">
        <form action="handleActions.php" method="post">
            <div class="input-container">
               <input type="text" name="inputBox" id="inputBox" required>
               <button type="submit"  name="add" id="add">ADD</button>
            </div>
            <ul class="list">
                <?php
$itemList = getItems();
while ($row = $itemList->fetch_assoc()) {
 ?>
                <li class="item">
                     <P><?php echo $row["item"]; ?> </p>
                     <div class="icon-container">
                         <button type="submit" name="checked" id="check"><i class="fa-solid fa-circle-check"></i></button>
                         <button type="submit" name="deleted" id="delete"><i class="fa-solid fa-trash-can"></i></button>
                     </div>
                </li>
            <?php }?>
            </ul>
            <hr>
            <ul class="list">
                <li class="item fade">
                     <P class="deleted-text"><span>item 3</span></p>
                     <div class="icon-container">
                         <button type="submit" name="" id="check"><i class="fa-solid fa-circle-check hidden"></i></button>
                         <button type="submit" name="" id="delete"><i class="fa-solid fa-trash-can"></i></button>
                     </div>
                </li>
            </ul>
        </form>
    </div>
    <script src="https://kit.fontawesome.com/9d3e972470.js" crossorigin="anonymous"></script>
</body>
</html>
