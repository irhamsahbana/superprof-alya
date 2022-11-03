<?php
require 'config/database.php';
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aleph Connect - Dashboard</title>
    <!--- CUSTOM STYLESHEET-->
    <link rel="stylesheet" href="./style.css">
    <!--- ICONSCOUT STYLESHEET-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!--- GOOGLE FONT (DM SANS) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>
    
<body>
<!----------------------------------- NAV ----------------------------------------------------->
    <nav>
        <div class="container nav_container">
            <a href="<?= ROOT_URL?>Dashboard.php"><img class="logo" src="Images/Logo.svg" class="logo"></a>
            <ul class="nav_items">
                <li><a href="<?= ROOT_URL?>Search.php">People of Aleph</a></li>
                <li><a href="<?= ROOT_URL?>FAQ.php">FAQ</a></li>
                <li class="nav_profile">
                    <div class="avatar">
                        <img src="Images/Avatar.png">
                    </div>
                    <ul>
                        <li><a href="<?= ROOT_URL?>Profile-1.php">Profile</a></li>
                        <li><a href="<?= ROOT_URL?>AccountSettings.php">Account Settings</a></li>
                        <li><a href="<?= ROOT_URL?>Index.php">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        
        </div>
    </nav>