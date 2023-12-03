<?php require_once(__DIR__."/templates/header.php") ?>
<ul class="list-group">
<?php
   // YOUR CODE HERE
   echo "<ul>";
?>
    <li class="list-group-item"><?php echo $_POST["name"]?></li>
    <li class="list-group-item"><?php echo $_POST["number"] ?></li>
    <li class="list-group-item"><?php echo $_POST["email"]?></li>
    <li class="list-group-item"><?php echo $_POST["password"] ?></li>
    <li class="list-group-item"><?php echo $_POST["message"] ?></li>

</ul>
<?php require_once(__DIR__."/templates/footer.php") ?>