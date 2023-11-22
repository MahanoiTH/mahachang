<?PHP
//database
include('server.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// SQL query สำหรับการดึงข้อมูลตะกร้า (cart) ของลูกค้าโดยอ้างอิงจาก customer_id
//$sql_province = "SELECT * FROM `provinces` ORDER BY province_id DESC";
$sql_province = "SELECT * FROM `provinces`";
$result_province = $conn->query($sql_province);

if ($result_province->num_rows > 0) {
    while ($row_province = $result_province->fetch_assoc()) {
        $province_id = $row_province['province_id'];
        $province_name = $row_province['province_name'];
        // แสดงข้อมูลสินค้าจากตาราง 'product'
        echo'<option data-id="'.$province_id.'">'.$province_name.'</option>';
    }
} else {
    echo "";
}

// ปิดการเชื่อมต่อ
$conn->close();

?>