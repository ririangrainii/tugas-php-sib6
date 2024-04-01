<?php
include_once 'webmenu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=W">
    <title>WEB RIRI</title>
</head>
<body>
    <h1 align="center">WEBSITE</h1>

    <div style="text-align: center; background-color:khaki; color:blue">
    
    <?php
   
    foreach($menu_atas as $key => $value){
        echo "<a href= 'index.php?hal=$key'>$value</a> | ";
    }
    ?>
    </div>
