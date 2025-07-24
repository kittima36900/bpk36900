<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<title>ตรวจสอบช่วงวัย</title>
<body>

<h2>กรอกอายุของคุณ:</h2>
<form method="post">
    <input type="number" name="age" required>
    <input type="submit" value="ตรวจสอบ">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = $_POST["age"];

    switch (true) {
        case ($age > 60):
            echo "<p>คุณอยู่ใน <strong>วัยสูงอายุ</strong></p>";
            break;
        case ($age > 40):
            echo "<p>คุณอยู่ใน <strong>วัยกลางคน</strong></p>";
            break;
        case ($age > 20):
            echo "<p>คุณอยู่ใน <strong>วัยผู้ใหญ่</strong></p>";
            break;
        case ($age > 12):
            echo "<p>คุณอยู่ใน <strong>วัยรุ่น</strong></p>";
            break;
        case ($age > 6):
            echo "<p>คุณอยู่ใน <strong>วัยเด็ก</strong></p>";
            break;
        case ($age > 0):
            echo "<p>คุณอยู่ใน <strong>วัยทารก</strong></p>";
            break;
        default:
            echo "<p>กรุณากรอกอายุให้ถูกต้อง</p>";
    }
}
?>

</body>





</body>
</html>