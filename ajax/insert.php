<?php
require_once '../database.php';

$responseArr = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    extract($_POST);
    //Validation Function, Only required!!
    function validate_required($value)
    {
        return !empty($value);
    }
    $validation_rules = [
        'fname' => 'validate_required',
        'lname' => 'validate_required',
        'email' => 'validate_required',
        'adress' => 'validate_required'
    ];
    $valid = true;
    foreach ($validation_rules as $field => $validator) {
        if (!isset($$field) || !call_user_func($validator, $$field)) {
            $valid = false;
            $responseArr = [
                'status' => 'error',
                'msg' => ucfirst($field) . ' is required.'
            ];
            break;
        }
    }
    if ($valid) {
        $images = $_FILES['image']['name'];
        $path = dirname(__DIR__, 1) . '/uploads';
        $tmp_images = $_FILES['image']['tmp_name'];
        $url = 'uploads/' . $images;
        if (!empty($images)) {
            move_uploaded_file($tmp_images, $path . '/' . $images);
            $sql = "INSERT INTO users (`fname`,`lname`,`email`,`adress`,`image`) VALUES ('$fname', '$lname', '$email', '$adress', '$url')";
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
            $responseArr = [
                'status' => 'error',
                'msg' => 'Image is required.'
            ];
        }
    }
} else {
    $responseArr = [
        'status' => 'error',
        'msg' => 'Please send a valid request'
    ];
}
echo json_encode($responseArr);
