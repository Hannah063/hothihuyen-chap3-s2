<?php require('templates/header.php');  ?>
<style>
    img {
        width: 100px;
        height: auto;
    }
</style>
<?php
// YOUR CODE HERE
if (isset($_POST['province'])) {
    $province = $_POST['province'];
}

if (isset($_POST['gender'])) {
    $gender = $_POST['gender'];
}

?>
<div class="card mb-3">
    <div class="card-header">Province</div>
    <div class="card-body">
        <h2 class="display-3"><?php echo $province ?></h2>
    </div>
</div>
<div class="card mb-3">
    <div class="card-header">Gender</div>
    <div class="card-body">
        <!-- YOUR CODE HERE [gender] -->
        <?
        if ($gender == 'Male') {
            echo '<img src="https://cdn3.iconfinder.com/data/icons/business-avatar-1/512/10_avatar-512.png" alt="">';
        } elseif ($gender == 'Female') {
            echo '<img src="https://www.svgrepo.com/show/382099/female-avatar-girl-face-woman-user-2.svg" alt="">';
        }
        ?>
    </div>
</div>
<div class="card">
    <div class="card-header">Subject</div>
    <div class="card-body">
        <?php
        // YOUR CODE HERE [subject]
        if (isset($_POST['HTML'])) {
            echo '<button type="button" class="btn btn-primary me-3">' . $_POST['HTML'] . '</button>';
        }

        if (isset($_POST['CSS'])) {
            echo '<button type="button" class="btn btn-primary me-3">' . $_POST['CSS'] . '</button>';
        }

        if (isset($_POST['JavaScript'])) {
            echo '<button type="button" class="btn btn-primary me-3">' . $_POST['JavaScript'] . '</button>';
        }

        if (isset($_POST['PHP'])) {
            echo '<button type="button" class="btn btn-primary me-3">' . $_POST['PHP'] . '</button>';
        }
        ?>
    </div>
</div>

<?php require('templates/footer.php'); ?>