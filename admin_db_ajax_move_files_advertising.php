<?php
include('server.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // รับข้อมูลจากคำขอ
    $folderId = $_POST['folder_id'];
    $fileNames_string = $_POST['attc_list'];
    $active = $_POST['active'];
    $folderType = $_POST['folder_type'];
    $job_type_id = $_POST['job_type_id'];

    // ใช้ explode เพื่อแยกข้อความด้วย ',' และ trim เพื่อลบช่องว่างที่อาจจะเกิดขึ้น
    $fileNames_st = array_map('trim', explode(',', $fileNames_string));

    // ตรวจสอบว่ามี ID และชื่อไฟล์ที่ส่งมาหรือไม่
    if (!empty($folderId) && !empty($fileNames_st)) {
        // ชื่อโฟลเดอร์ต้นทาง
        $sourceFolder = "uploads";

        // สร้างโครงสร้างของโฟลเดอร์ปลายทาง (เปลี่ยนเป็น "upload/advertising/id")
        // $destinationFolder = "upload/advertising/$folderId";
        $destinationFolder = "upload/$folderType/$folderId";

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
                    // echo "File $fileName moved to $destinationFolder successfully<br>";

                    // INSERT ข้อมูลลงในฐานข้อมูล
                    switch ($job_type_id) {
                        case '1':
                            $tableName = 'cs_advertising_attachment';
                            $colNameId = 'advertising_id';
                            break;
                        // Add more cases as needed for other folder types
                        case '2':
                            $tableName = 'jobs_interior_design_attachment';
                            $colNameId = 'job_id';
                            break;
                        case '3':
                            $tableName = 'jobs_air_conditioning_attachment';
                            $colNameId = 'job_id';
                            break;
                        case '4':
                            $tableName = 'jobs_electrical_attachment';
                            $colNameId = 'job_id';
                            break;
                        case '5':
                            $tableName = 'jobs_plumbing_attachment';
                            $colNameId = 'job_id';
                            break;
                        case '6':
                            $tableName = 'jobs_steel_attachment';
                            $colNameId = 'job_id';
                            break;
                        case '7':
                            $tableName = 'jobs_flooring_attachment';
                            $colNameId = 'job_id';
                            break;
                        case '8':
                            $tableName = 'jobs_design_attachment';
                            $colNameId = 'job_id';
                            break;
                        case '9':
                            $tableName = 'jobs_construction_attachment';
                            $colNameId = 'job_id';
                            break;
                        default:
                            echo "Invalid folder type_attachment";
                            exit;
                    }

                    $sql = "INSERT INTO $tableName ($colNameId, active, file_url) 
                    VALUES ('$folderId', '$active', '$fileName')";
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