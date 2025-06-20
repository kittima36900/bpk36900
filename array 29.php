<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$a1 = ["a" => "apple", "b" => "bee", "c" => "cat", "d" => "dog"];
$a2 = ["a" => "apple", "b" => "boy", "c" => "cat", "d" => "dog"];
$merged = array_merge($a1, $a2);

echo "Array 1:<br>";
foreach($a1 as $k => $v) {
    echo "$k => $v<br>";
}

echo "<br>Merged Array:<br>";
foreach($merged as $k => $v) {
    echo "$k => $v<br>";
}
?>
</body>
</html>
