<?php
    header('Content-Type: text/html; charset=utf-8');
    $n = 5;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        
        <?php for ($i = 1; $i <= $n; $i+=2){
            echo "<tr><td>".$i."</td>";
            echo "<td><img src='img/img_"."$i".".png'>"."</img></td></tr>";
            }
        ?>
        </tr>
    </table>

</body>
</html>
