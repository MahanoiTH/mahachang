<?php
$targetDir = "uploads/"; // โฟลเดอร์ที่ต้องการบันทึก
$targetFile = $targetDir . basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
    echo "success";
} else {
    echo "error";
}
?>
