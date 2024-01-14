<?php
include('server.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // รับข้อมูลจากคำขอ
    $id = $_POST['job_id'];
    $fileNames_string = $_POST['attc_list'];
    $active = $_POST['active'];
    $folderName = $_POST['folder_name'];

    // ใช้ explode เพื่อแยกข้อความด้วย ',' และ trim เพื่อลบช่องว่างที่อาจจะเกิดขึ้น
    $fileNames_st = array_map('trim', explode(',', $fileNames_string));

    // ตรวจสอบว่ามี ID และชื่อไฟล์ที่ส่งมาหรือไม่
    if (!empty($id) && !empty($fileNames_st)) {
        // ชื่อโฟลเดอร์ต้นทาง
        $sourceFolder = "uploads";

        // สร้างโครงสร้างของโฟลเดอร์ปลายทาง (เปลี่ยนเป็น "upload/advertising/id")
        // $destinationFolder = "upload/advertising/$folderId";
        $destinationFolder = "upload/admin/$folderName/$id";

        // ดำเนินการตรวจสอบและสร้างโฟลเดอร์ปลายทาง
        $destinationFolderPath = __DIR__ . '/' . $destinationFolder;
        if (!is_dir($destinationFolderPath) && !file_exists($destinationFolderPath)) {
            if (mkdir($destinationFolderPath, 0777, true)) {
                echo "Destination folder $destinationFolder created successfully<br>";
            } else {
                echo "Error creating destination folder $destinationFolder<br>";
                exit;
            }
        }
        // ดำเนินการย้ายไฟล์
        foreach ($fileNames_st as $fileName) {
            $sourceFilePath = __DIR__ . '/' . $sourceFolder . '/' . $fileName;
            $destinationFilePath = $destinationFolderPath . '/' . $fileName;

            // ตรวจสอบว่าไฟล์มีอยู่จริงในโฟลเดอร์ต้นทางก่อนที่จะทำการย้าย
            if (file_exists($sourceFilePath)) {
                if (rename($sourceFilePath, $destinationFilePath)) {
                    $sql = "INSERT INTO job_attachment (job_id, active, file_url) 
                    VALUES ('$id', '$active', '$fileName')";
                    if ($conn->query($sql) === TRUE) {
                        // echo "success";
                    } else {
                        echo "Error inserting data: " . $conn->error;
                    }

                    // ปิด session เพื่อป้องกันข้อขัดแย้ง
                    session_write_close();
                } else {
                    echo "Error moving file $fileName<br>";
                }
            } else {
                echo "File $fileName does not exist in the source folder<br>";
            }
        }

        echo "All files moved successfully";

    } else {
        echo "Invalid folder ID or file names";
    }
} else {
    // คำขอไม่ถูกต้อง
    http_response_code(400);
    echo 'Invalid request';
}
?>