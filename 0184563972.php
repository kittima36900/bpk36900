<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  $number = "0814563972";
  $readNumber = array(
    "0" => "ศูนย์",
    "1" => "แปด",
    "2" => "สอง",
    "3" => "สาม",
    "4" => "สี่",
    "5" => "ห้า",
    "6" => "หก",
    "7" => "เจ็ด",
    "8" => "หนึ่ง",
    "9" => "เก้า"
  );
  $result = "";
  for ($i = 0; $i < strlen($number); $i++) {
    $digit = $number[$i];
    $result .= $readNumber[$digit];
  }
  echo $number . " => " . $result;
  ?>
</body>
</html>