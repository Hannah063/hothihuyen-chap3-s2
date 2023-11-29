<?php require_once 'templates/header.php' ?>
<table class="table table-striped table-bordered">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Number</th>
        <th>Message</th>
        <th>Provinces</th>
        <th>Gender</th>
        <th>Subject</th>
    </tr>
    <?php

    ?>
    <tr>
        <td>
            <?php
            if (isset($_POST['name'])) {
                echo $_POST['name'];
            } ?>
        </td>
        <td>
            <?php if (isset($_POST['email'])) {
                echo $_POST['email'];
            } ?>
        </td>
        <td>
            <?php
            if (isset($_POST['password'])) {
                echo $_POST['password'];
            } ?>
        </td>
        <td>
            <?php if (isset($_POST['phone'])) {
                echo $_POST['phone'];
            } ?>
        </td>
        <td>
            <?php if (isset($_POST['message'])) {
                echo $_POST['message'];
            } ?>
        </td>
        <td>
            <?php //province; 
            if (isset($_POST['province'])) {
                echo $_POST['province'];
            }
            ?>
        </td>
        <td>
            <?php
            if (isset($_POST['HTML'])) {
                echo  $_POST['HTML'];
            }

            if (isset($_POST['CSS'])) {
                echo ' | ' . $_POST['CSS'];
            }

            if (isset($_POST['JavaScript'])) {
                echo  ' | ' . $_POST['JavaScript'];
            }

            if (isset($_POST['PHP'])) {
                echo ' | ' . $_POST['PHP'];
            }
            ?>
        </td>
        <td>
            <?php // gender 
            if (isset($_POST['gender'])) {
                echo $_POST['gender'];
            }
            ?>
        </td>
    </tr>

</table>
<?php require_once 'templates/footer.php' ?>