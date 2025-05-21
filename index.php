
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    for($i = 1; $i <= 20; $i++){
        echo $i. " ";
        }

?>
<?php
    echo " | "; 
    for($i = -10; $i <= 10; $i++){
        echo $i. " ";
        }
?>
<?php
    echo " | "; 
    for($i = -15; $i <= -5; $i++){
        echo $i. " ";
        }
?>
<?php
    echo " | "; 
    for($i = 100; $i <= 200; $i++){
        if ($i % 2 == 1){
             echo $i. " ";
        }
        }
?>
</body>
</html>
