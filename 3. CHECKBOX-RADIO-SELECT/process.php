<?php include(__DIR__."/templates/header.php");?>
<?php
// YOUR CODE HERE
?>
    <div class="card mb-3">
        <div class="card-header">Province</div>
        <div class="card-body">
            <h2 class="display-3"><?php echo $_POST["select"] ?></h2>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">Gender</div>
        <div class="card-body">
            <!-- YOUR CODE HERE [gender] -->
            <?php 
                    if($_POST["gender"][0] == "Male"){
            ?>
                        <img src="./images/male.png" alt="male" width="100px">
            <?php
                    }else{
                        ?>
                        <img src="./images/female.png" alt="female" width="100px">
                        
                        <?php
                    }
            ?>


        </div>
    </div>
    <div class="card">
        <div class="card-header">Subject</div>
            <div class="card-body">
                <?php
                    // YOUR CODE HERE [subject]
                    $selected = $_POST["check"];
                
                    $listSelected = implode(" ", $selected);
                    foreach ($selected as $item) {?>
                        <span style="background-color: blue;  padding: 5px; margin: 5px; border-radius: 10px; color:white;">
                        <?php echo $item;?>
                        </span>
                       <?php
                    }
                ?>
            </div>  
        </div>
    </div>

<?php include(__DIR__."/templates/footer.php");?>