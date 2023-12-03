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
            <td><?php echo $_POST["name"]//name; ?></td>
            <td><?php echo $_POST["email"] //email; ?></td>
            <td><?php echo $_POST["password"]//password; ?></td>
            <td><?php echo $_POST["number"]//number; ?></td>
            <td><?php echo $_POST["message"]//message; ?></td>
            <td><?php echo $_POST["selected"]//province; ?></td>
            <td>
                <?php 
                   // subjects
                   $selected = $_POST["subject"];
                
                   $listSelected = implode(" | ", $selected);
                   echo $listSelected;
                ?>
            </td>
            <td><?php echo $_POST["selected"]// gender ?></td>
        </tr>
 
</table>
<?php require_once 'templates/footer.php' ?>