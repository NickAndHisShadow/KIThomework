<?php
$a = rand(-3, 10);
$b = rand(-5, 15);
$c = rand(-5, 15);
$D = $b * $b - 4 * $a * $c;
$x1 = 0;
$x2 = 0;
if ($D > 0) {
    $x1 = round((-$b - sqrt($D)) / 2 * $a, 2);
    $x2 = round((-$b + sqrt($D)) / 2 * $a, 2);
}
elseif ($D == 0) {
    $x1 = (-$b - sqrt($D)) / 2 * $a;
    $x2 = "Квадратное уравнение имеет лишь один корень";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo $a."x2 + ".$b."x +".$c." = 0" ?></p>
    <p><?php echo $x1 ?></p>
    <p><?php echo $x2 ?></p>
</body>
</html>