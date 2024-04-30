<?php
require_once '../database.php';

$responseArr = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userid = $_POST['userid'];
    extract($_POST);
    $images = $_FILES['image']['name'];
    $path = dirname(__DIR__, 1) . '/uploads';
    $tmp_images = $_FILES['image']['tmp_name'];
    $url = 'uploads/' . $images;
    if (!empty($images)) {
        move_uploaded_file($tmp_images, $path . '/' . $images);
        $sql = "UPDATE users SET (`fname`,`lname`,`email`,`adress`,`image`) VALUES ('$fname', '$lname', '$email', '$adress', '$url') WHERE `id`='$userid'";
        if ($conn->query($sql) === TRUE) {
            $responseArr = [
                'status' => 'success',
                'msg' => 'Data insert success'
            ];
        } else {
            $responseArr = [
                'status' => 'error',
                'msg' => 'Request failed'
            ];
        }
    } else {
        $sql = "UPDATE users SET (`fname`,`lname`,`email`,`adress`) VALUES ('$fname', '$lname', '$email', '$adress') WHERE `id`='$userid'";
        if ($conn->query($sql) === TRUE) {
            $responseArr = [
                'status' => 'success',
                'msg' => 'Data insert success'
            ];
        } else {
            $responseArr = [
                'status' => 'error',
                'msg' => 'Request failed'
            ];
        }
    }
}
echo json_encode($responseArr);
