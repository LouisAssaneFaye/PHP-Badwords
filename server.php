<?php
  $paragraph = $_POST['Paragraph'];
  $badWord = $_POST['BadWord'];
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
    <h1>
       <?php
           echo $paragraph;
        ?>
    </h1>
    <h1>
       <?php
           echo strlen($paragraph);
        ?>

    </h1>
    
</body>
</html>