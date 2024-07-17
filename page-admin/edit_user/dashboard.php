<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/d05e3fe0a9.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/Project_Journal/css/style.css">
</head>

<body>
    <div class="container">
        <?php include "../../master/nav.php"; ?>
        <h2 class="mt-4 mb-2">แก้ไขผู้ใข้</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>วารสารหลัก</th>
                    <th>ชื่องานวิจัย</th>
                    <th>วันที่อัพโหลด</th>
                    <th>คนที่รับเรื่อง</th>
                    <th>คนที่ตรวจสอบ</th>
                    <th>สถานะ</th>
                </tr>
            </thead>
            <tbody id="dataTable">
                <!-- Data will be appended here dynamically -->
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>