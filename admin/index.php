<?php
require_once '../load.php';
confirm_logged_in(); // Ensures only logged in users can access dashboard page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the Admin Panel</title>
</head>
<body>
    <h2>Welcome to the Dashboard Page, <?php echo $_SESSION['user_name'];?>!</h2>
    <h3>You are in level: <?php echo getCurrentUserLevel();?>.</h3>

    <?php if(isCurrentUserAdminAbove()):?>
        <a href="admin_createuser.php">Create User</a>
        <a href="admin_editallusers.php">Edit All Users</a>    
    <?php endif;?>

    
    <a href="admin_edituser.php">Edit User</a>
    <a href="admin_logout.php">Log Out</a>

    <br><br>
    <!-- <?php $created = $_SESSION['account_created'];?>
    <?php $date = date("Y-m-d"); ?>

    <?php var_dump($created); ?>
    <br><br>
    <?php var_dump($date); ?>
    <br><br>
    <?php var_dump($created == $date); ?>
    -->
</body>
</html>