<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  $files = array("img1", "img10", "img11", "img1-1", "img1-2", "IMG123");
  echo "<b>ก่อนการเรียงลำดับ:</b><br>";
  echo implode(", ", $files) . "<br><br>";
  $sortArray = $files;
  sort($sortArray);
  echo "<b>หลังใช้ sort():</b><br>";
  echo implode(", ", $sortArray) . "<br><br>";
  $natArray = $files;
  natcasesort($natArray); 
  echo "<b>หลังใช้ natcasesort():</b><br>";
  echo implode(", ", $natArray) . "<br>";
  ?>
</body>
</html>