<?php require_once 'templates/header.php' ?>
<?php

$colors = ['primary', 'danger', 'info', 'warning', 'success', 'secondary', 'dark'];
// CODE HERE 
?>
    <div class="card">
        
        <div class="card-body">
            <?php
            if (isset($_POST['HTML'])) {
                $randomColor = $colors[array_rand($colors)];
                echo '<button type="button" class="btn me-3 btn-'. $randomColor . '">' . $_POST['HTML'] . '</button>';
            }
    
            if (isset($_POST['CSS'])) {
                $randomColor = $colors[array_rand($colors)];
                echo '<button type="button" class="btn me-3 btn-'. $randomColor . '">' . $_POST['CSS'] . '</button>';
            }
    
            if (isset($_POST['JavaScript'])) {
                $randomColor = $colors[array_rand($colors)];
                echo '<button type="button" class="btn me-3 btn-'. $randomColor . '">'. $_POST['JavaScript'] . '</button>';
            }
    
            if (isset($_POST['PHP'])) {
                $randomColor = $colors[array_rand($colors)];
                echo '<button type="button" class="btn me-3 btn-'. $randomColor . '">' . $_POST['PHP'] . '</button>';
            }
            ?>
        </div>
    </div>


<?php require_once 'templates/footer.php' ?>