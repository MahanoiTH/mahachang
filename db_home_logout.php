<?php
// เริ่ม session
session_start();

// ทำการล้างค่าตัวแปร session
session_unset();

// ทำการทำลาย session
session_destroy();

// ลิงก์ไปหน้า login หรือหน้าหลักตามที่คุณต้องการ
header("Location: index.php");
exit;
?>