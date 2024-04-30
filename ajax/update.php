<?php
require_once '../database.php';
// ---------Get User Data to delete---------
$userid = $_POST['userid'];
$edit = "SELECT * FROM users WHERE `id` ='$userid'";
$users = $conn->query($edit);
while ($user = $users->fetch_assoc()) {
?>
    <div class="row mb-4">
        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label" for="form3Example1">First name</label>
                <input type="text" id="fname" name="fname" class="form-control" value="<?= $user['fname'] ?>" />
            </div>
        </div>
        <div class="col">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label" for="form3Example2">Last name</label>
                <input type="text" id="lname" name="lname" class="form-control" value="<?= $user['lname'] ?>" />
            </div>
        </div>
    </div>

    <!-- Email input -->
    <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="form3Example3">Email address</label>
        <input type="email" id="email" name="email" class="form-control" value="<?= $user['email'] ?>" />
    </div>
    <!-- Adress input -->
    <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="form3Example3">Current address</label><br>
        <textarea name="adress" id="adress" cols="100%" rows="5" class="form-control"><?= $user['adress'] ?></textarea>
    </div>
    <!-- File input -->
    <div data-mdb-input-init class="form-outline mb-4">
        <input type="file" id="image-input" name="image" accept="image/*" class="form-control" />
    </div>
    <div id="image-preview" class="image-preview">
        <div class="over">
            <?php
            if ($user['image']) {
            ?>
                <img src="<?= $user['image'] ?>" alt="" style="height: 200px; width:300px;">
            <?php
            }
            ?>
        </div>
    </div>
<?php
}
?>