<?php
    session_start();
    unset($_SESSION['key']);
    header('Location: login1.php');