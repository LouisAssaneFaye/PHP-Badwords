<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./server.php" method="POST">
        <input type="textarea" placeholder="Inserire paragrafo" name="Paragraph">
        <input type="text" placeholder="Inserire parola da censurare" name="BadWord">
        <button type="submit">
            Invia il form
        </button>
</form>
</body>
</html>