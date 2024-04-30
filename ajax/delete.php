<?php
require_once '../database.php';
// ---------Get User Data to delete---------
$userid = $_POST['delete'];
$delete = "DELETE FROM users WHERE `id` ='$userid'";
if ($conn->query($delete)==TRUE) {
    return "Yes";
} else {
    return "No";
}
