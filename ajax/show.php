<?php
require_once '../database.php';
// ---------Get User Data---------
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    $getdataa = "SELECT * FROM users";
    $users = $conn->query($getdataa);
    if (mysqli_num_rows($users) > 0) {
        ?>
<tr>
    <th>Photo</th>
    <th>Name</th>
    <th>Email</th>
    <th>Adress</th>
    <th>Action</th>
</tr>
<?php 
    while ($user = $users->fetch_assoc()) {
?>
<tr>
    <td><img src="<?= $user['image'] ?>" alt="" style="height: 60px; width:60px; border-radius:50%;"></td>
    <td><?= $user['fname'] ?></td>
    <td><?= $user['lname'] ?></td>
    <td><?= $user['email'] ?></td>
    <td><?= $user['adress'] ?></td>
    <td>
        <button class="mybtn btn-color-yellow edit" id="<?= $user['id'] ?>">EDIT</button>
        <button class="mybtn btn-color-red delete" id="<?= $user['id'] ?>">DELETE</button>
    </td>
</tr>
<?php
        
    }
?>

<?php   
    } else {
 ?>
<tr>
    <td>No Record's Found!!</td>
</tr>
<?php
    }
}
?>
