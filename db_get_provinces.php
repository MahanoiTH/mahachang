<?PHP
//database
include('server.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// ดึงข้อมูลจังหวัดจากฐานข้อมูล
$sql = "SELECT * FROM `provinces`";
$result = $conn->query($sql);

// ตรวจสอบผลลัพธ์และส่งค่าเป็น JSON
if ($result->num_rows > 0) {
    $provinces = array();
    while ($row = $result->fetch_assoc()) {
        $provinces[] = $row;
    }
    echo json_encode($provinces);
} else {
    echo "No provinces found";
}

// ปิดการเชื่อมต่อฐานข้อมูล
$conn->close();


?>
