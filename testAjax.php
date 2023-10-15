<?php
// ตรวจสอบว่ามีการส่งข้อมูล POST มาหรือไม่
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ตรวจสอบค่า email และ password
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // ตรวจสอบค่า email และ password ที่ได้รับ
        echo "Email: " . $email . "<br>";
        echo "Password: " . $password;

        // ตรวจสอบข้อมูลเข้าสู่ระบบและส่งคำตอบกลับเช่น "success" หรือ "error"
        // คุณสามารถเพิ่มโค้ดตรวจสอบที่นี่
        // หลังจากที่ตรวจสอบเสร็จแล้ว สามารถใช้ echo หรือการคืนค่าอื่น ๆ สำหรับการตอบสนอง
    } else {
        echo "ข้อมูลไม่ครบ";
    }
} else {
    echo "ไม่มีการส่งข้อมูล POST";
}
?>
