<!DOCTYPE html>
<html>
<body>

<?php
$students = [
    ["no"=>1,"id"=>"36639","prefix"=>"นาย","fname"=>"จุฬาลักษณ์","lname"=>"คงจรูญ"],
    ["no"=>2,"id"=>"36643","prefix"=>"นาย","fname"=>"ไตรคูน","lname"=>"บุญนำ"],
    ["no"=>3,"id"=>"36652","prefix"=>"นาย","fname"=>"วรนาศักดิ์","lname"=>"เกียรติพิเชฐชื่น"],
    ["no"=>4,"id"=>"36681","prefix"=>"นาย","fname"=>"นนทวัฒน์","lname"=>"ขำดวง"],
    ["no"=>5,"id"=>"36715","prefix"=>"นาย","fname"=>"ภาณุพงศ์","lname"=>"สายศร"],
    ["no"=>6,"id"=>"36753","prefix"=>"นาย","fname"=>"ปณณกร","lname"=>"พวงสุวรรณ"],
    ["no"=>7,"id"=>"36757","prefix"=>"นาย","fname"=>"วิศรุต","lname"=>"กลิ่นเรือง"],
    ["no"=>8,"id"=>"36760","prefix"=>"นาย","fname"=>"อมรเทพ","lname"=>"อันโน"],
    ["no"=>9,"id"=>"36867","prefix"=>"นาย","fname"=>"จักรกริช","lname"=>"เทศทอง"],
    ["no"=>10,"id"=>"36868","prefix"=>"นาย","fname"=>"จิรฐา","lname"=>"น้อยศรี"],
    ["no"=>11,"id"=>"36906","prefix"=>"นาย","fname"=>"กรพิพัฒน์","lname"=>"เล็กนาก"],
    ["no"=>12,"id"=>"36917","prefix"=>"นาย","fname"=>"ภัทรพล","lname"=>"ชมพุฒ"],
    ["no"=>13,"id"=>"36922","prefix"=>"นาย","fname"=>"ศุภชัย","lname"=>"รุ่งแสง"],
    ["no"=>14,"id"=>"36951","prefix"=>"นาย","fname"=>"ณัฐพล","lname"=>"ปลื้มกิจมงคล"],
    ["no"=>15,"id"=>"36955","prefix"=>"นาย","fname"=>"พลัษฎ์","lname"=>"ด่านอนันต์สุข"],
    ["no"=>16,"id"=>"36957","prefix"=>"นาย","fname"=>"เรืองวิทย์","lname"=>"โชคชัย"],
    ["no"=>17,"id"=>"37067","prefix"=>"นาย","fname"=>"จิรายุธ","lname"=>"บูรณะจันทร์"],
    ["no"=>18,"id"=>"36629","prefix"=>"น.ส.","fname"=>"ณัชชา","lname"=>"คำภา"],
    ["no"=>19,"id"=>"36705","prefix"=>"น.ส.","fname"=>"สาวิตรี","lname"=>"มินสะมัน"],
    ["no"=>20,"id"=>"36733","prefix"=>"น.ส.","fname"=>"บัณพร","lname"=>"ศิริพันธุ์"],
    ["no"=>21,"id"=>"36766","prefix"=>"น.ส.","fname"=>"ญาณิศา","lname"=>"พ่วงพี"],
    ["no"=>22,"id"=>"36771","prefix"=>"น.ส.","fname"=>"กิตญาดา","lname"=>"จิตรวิมลรัตน์"],
    ["no"=>23,"id"=>"36779","prefix"=>"น.ส.","fname"=>"สุดารัตน์","lname"=>"สวนยิ้ม"],
    ["no"=>24,"id"=>"36780","prefix"=>"น.ส.","fname"=>"พลอยประภัส","lname"=>"พิษรักษ์"],
    ["no"=>25,"id"=>"36803","prefix"=>"น.ส.","fname"=>"ทัศชนก","lname"=>"สมัย"],
    ["no"=>26,"id"=>"36881","prefix"=>"น.ส.","fname"=>"แพรพิไล","lname"=>"บุญครอง"],
    ["no"=>27,"id"=>"36889","prefix"=>"น.ส.","fname"=>"กัลยาภรณ์","lname"=>"สิทธิวงศ์"],
    ["no"=>28,"id"=>"36890","prefix"=>"น.ส.","fname"=>"กาญจนเกล้า","lname"=>"สิทโธ"],
    ["no"=>29,"id"=>"36900","prefix"=>"น.ส.","fname"=>"กฤติมา","lname"=>"เกียรติอาภรณ์"],
    ["no"=>30,"id"=>"36904","prefix"=>"น.ส.","fname"=>"อภิษฎา","lname"=>"วชิรศรีสุนทรา"],
    ["no"=>31,"id"=>"36941","prefix"=>"น.ส.","fname"=>"ศิริกานต์","lname"=>"เบ้าตุ่น"],
    ["no"=>32,"id"=>"36965","prefix"=>"น.ส.","fname"=>"กัญญาวีย์","lname"=>"อุดมสารี"],
    ["no"=>33,"id"=>"36969","prefix"=>"น.ส.","fname"=>"ณัฐริณีย์","lname"=>"ฉิมเรือง"],
    ["no"=>34,"id"=>"36975","prefix"=>"น.ส.","fname"=>"พิชาภรณ์","lname"=>"มีโชคสม"],
    ["no"=>35,"id"=>"37027","prefix"=>"น.ส.","fname"=>"กัลย์ณิศา","lname"=>"รัตนเรืองอุดม"],
    ["no"=>36,"id"=>"37045","prefix"=>"น.ส.","fname"=>"ชุดา","lname"=>"สาริพันธ์"],
    ["no"=>37,"id"=>"37082","prefix"=>"น.ส.","fname"=>"กันตา","lname"=>"ปิยะภัทรกุล"],
    ["no"=>38,"id"=>"37091","prefix"=>"น.ส.","fname"=>"นภัสพรพรหม","lname"=>"ตันชรากรณ์"],
    ["no"=>39,"id"=>"38962","prefix"=>"น.ส.","fname"=>"กิ่งกาญจน์","lname"=>"รวมพล"],
    ["no"=>40,"id"=>"38967","prefix"=>"น.ส.","fname"=>"วชิราญาณ์","lname"=>"วชิระนาวิน"]
];

$keyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : '';

$results = [];

if ($keyword !== '') {
    foreach ($students as $student) {
        $fullname = $student['prefix'] . $student['fname'] . $student['lname'];
        if (stripos($fullname, $keyword) !== false) {
            $student['room'] = "609";
            $student['program'] = "วิทย์-คณิต เทคโนโลยี";
            $results[] = $student;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8" />
    <title>ผลการค้นหา</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        table.table {
            background-color: #ffe4e6; 
        }
        table.table thead {
            background-color: #f9a8d4; 
            color: #5b2140; 
        }
        table.table tbody tr:hover {
            background-color: #ffd6e8;
        }
    </style>
</head>
<body class="container mt-4">

    <?php if ($keyword === ''): ?>
        <p>กรุณากรอกคำค้นหา</p>
    <?php elseif (count($results) === 0): ?>
        <p>ไม่พบข้อมูล</p>
    <?php else: ?>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>เลขที่</th>
                    <th>รหัสประจำตัวนักเรียน</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>ห้องเรียน</th>
                    <th>แผนการเรียน</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $r): ?>
                    <tr>
                        <td><?= htmlspecialchars($r['no'], ENT_QUOTES, 'UTF-8') ?></td>
                        <td><?= htmlspecialchars($r['id'], ENT_QUOTES, 'UTF-8') ?></td>
                        <td><?= htmlspecialchars($r['prefix'] . ' ' . $r['fname'] . ' ' . $r['lname'], ENT_QUOTES, 'UTF-8') ?></td>
                        <td><?= htmlspecialchars($r['room'], ENT_QUOTES, 'UTF-8') ?></td>
                        <td><?= htmlspecialchars($r['program'], ENT_QUOTES, 'UTF-8') ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
<a href="index2.php" class="btn btn-primary">ย้อนกลับ</a>
</body>
</html>

</body>
</html>