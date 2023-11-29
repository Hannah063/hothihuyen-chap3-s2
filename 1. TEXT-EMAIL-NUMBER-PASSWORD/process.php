<?php require_once('templates/header.php'); ?>
<ul class="list-group">
<?php
   // YOUR CODE HERE
if (isset($_POST['name'])) {
    $name = $_POST['name'];
}
if (isset($_POST['phone'])) {
    $phone = $_POST['phone'];
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}

if (isset($_POST['password'])) {
    $password = $_POST['password'];
}

if (isset($_POST['message'])) {
    $message = $_POST['message'];
}
?>
    <li class="list-group-item"><?php echo $name ?></li>
    <li class="list-group-item"><?php echo $email ?></li>
    <li class="list-group-item"><?php echo $password ?></li>
    <li class="list-group-item"><?php echo $phone ?></li>
    <li class="list-group-item"><?php echo $message ?></li>

</ul>
<?php require_once('templates/footer.php'); ?>