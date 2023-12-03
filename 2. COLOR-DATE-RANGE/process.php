<?php include(__DIR__."/templates/header.php");// HEADER ?>
<?php
    // YOUR CODE HERE 
?>
    <div class="alert alert-secondary">
        <strong>Color: </strong> <span><?php echo $_POST["color"]?></span>
    </div>
    <div class="alert alert-info">
        <strong>Range: </strong> <span><?php echo $_POST["range"] //range; ?></span>
    </div>
    <div class="alert alert-danger">
        <strong>Date: </strong> <span><?php echo $_POST["date"]//date; ?></span>
    </div>

<?php include(__DIR__."/templates/footer.php");//FOOTER ?>