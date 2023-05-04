<?php
if (!isset($_FILES['file'])) {
    die('No file uploaded');
}

$file = $_FILES['file'];

if ($file['error'] !== UPLOAD_ERR_OK) {
    die('File upload failed with error code ' . $file['error']);
}

$fileType = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
if ($fileType !== 'txt' && $fileType !== 'pdf') {
    die('Invalid file type');
}
if ($file['size'] > 1000000) {
    die('File size exceeds maximum allowed');
}

$fileName = uniqid() . '_' . $file['name'];

$uploadDir = './uploads/';
$uploadPath = $uploadDir . $fileName;
if (!move_uploaded_file($file['tmp_name'], $uploadPath)) {
    die('Failed to save file to server');
}
$fileUrl = 'https://' . $_SERVER['HTTP_HOST'] . '/uploads/' . $fileName;
$response = [
    'file_url' => $fileUrl,
    'file_name' => $fileName
];
header('Content-Type: application/json');
echo json_encode($response);