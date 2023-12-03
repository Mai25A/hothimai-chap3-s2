<?php require_once 'templates/header.php' ?>
<?php

$colors = ['red', 'blue', 'white', 'yellowgreen', 'sandybrown', 'aqua', 'bisque'];
// CODE HERE 
?>
    <div class="card">
        
        <div class="card-body">
            <?php
            // CODE HERE
                if(isset($_POST["check"])){
                    $selected = $_POST["check"];
                
                   $listSelected = implode("", $selected);
                   foreach ($selected as $subject) {
                    $color = $colors[array_rand($colors)]; // Choose a random color from the $colors array
                    echo "<span style='background-color: $color;border: radius 10px;color:white; margin:10px'>$subject</span>";
                  }
                }
            ?>
        </div>
    </div>


<?php require_once 'templates/footer.php' ?>