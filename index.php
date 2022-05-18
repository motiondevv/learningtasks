<?php
$page = (isset($_GET['page']) && $_GET['page'] != '') ?
$_GET['page'] : '';
?>
<!DOCTYPE html>
<html>
<head>
    <title>LT6</title>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Macondo&display=swap" rel="stylesheet">
    </head>
    
    <body>
        
    <div id= "wrapper">
        <h1>Web Designer Portfolio</h1>
        
            
        <div id="menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php?page=profile">Profile</a></li>
            <li><a href="index.php?page=works">Works</a></li>
            <li><a href="index.php?page=about">About</a></li>
            </ul>
        </div>
        
        <div id="content">
        <?php
            switch($page){
                case 'profile':
                    include 'profile.php';
                break;
                case 'works':
                    include 'works.php';
                break;
                case 'about':
                    include 'about.php';
                break;
                default:
                    include 'home.php';
                break;
              
            }
        ?>    
        </div>
        
        
        </div>
    </body>
</html>