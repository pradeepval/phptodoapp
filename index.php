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
        <form action="" method="post">
            <div class="input-container">
               <input type="text" name="inputBox" id="inputBox">
               <button type="submit" id="add">ADD</button>
            </div>
            <ul class="list">
                <li class="item">
                     <P>item 1</p>
                     <div class="icon-container">
                         <button type="submit" name="" id="check"><i class="fa-solid fa-circle-check"></i></button>
                         <button type="submit" name="" id="delete"><i class="fa-solid fa-trash-can"></i></button>
                     </div>
                </li>
            </ul>
            <hr>
            <ul class="list">
                <li class="item">
                     <P>item 2</p>
                     <button type="submit" name="" id="check"><i class="fa-solid fa-circle-check"></i></button>
                     <button type="submit" name="" id="delete"><i class="fa-solid fa-trash-can"></i></button>
                </li>
            </ul>
            <ul class="list">
                <li class="item">
                     <P>item 3</p>
                     <button type="submit" name="" id="check"><i class="fa-solid fa-circle-check"></i></button>
                     <button type="submit" name="" id="delete"><i class="fa-solid fa-trash-can"></i></button>
                </li>
            </ul>
        </form>
    </div>
    <script src="https://kit.fontawesome.com/9d3e972470.js" crossorigin="anonymous"></script>
</body>
</html>
