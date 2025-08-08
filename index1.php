<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2 class="mb-4">กรอกข้อมูลนักเรียน</h2>

    <form action="display.php" method="post">
        <div class="mb-3">
            <label for="fname">ชื่อจริง</label>
            <input type="text" id="fname" name="fname" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="lname">นามสกุล</label>
            <input type="text" id="lname" name="lname" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="class">ระดับชั้น</label>
            <input type="text" id="class" name="class" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="number">เลขที่</label>
            <input type="number" id="number" name="number" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="program">แผนการเรียน</label>
            <select id="program" name="program" class="form-select" required>
                <option value="เทคโนโลยีวิศวกรรมศาสตร์">เทคโนโลยี</option>
                <option value="ศิลปศาสตร์">ศิลปศาสตร์</option>
                <option value="ภาษาอังกฤษ">ภาษาอังกฤษ</option>
                <option value="สถาปัตยกรรม">สถาปัตยกรรม</option>
            </select>
        </div>

        <div class="mb-3">
            <label>เพศ</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="male" value="ชาย" required>
                <label class="form-check-label" for="male">ชาย</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="female" value="หญิง">
                <label class="form-check-label" for="female">หญิง</label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">ส่ง</button>
    </form>

</body>
</html>
