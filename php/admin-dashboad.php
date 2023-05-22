<?php
    session_start(); 
    if(!empty($_SESSION['key'])) {
        echo '<h1>This is Content of Admin Dashboard</h1>';
    }
    else {
        header('Location: login.php');
    }
?>

<a href="logout.php"><button type="button" class="btn btn-warning">Logout</button></a>