<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tekno News</title>
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri()?>/css/header.css">
<style>

.menu > menuitem > a:visited {
    color : black;

}


.logo {
    display : flex;

}

.logo > .title {
    font-family: Arial, Helvetica, sans-serif;
    padding-top : 20px;
    margin-left: 10px;
}

</style>
</head>
<body>
<div class="navbar">
 <div class="innernavbar">
    <div class="logo">
   
    <img src="http://localhost/teknonews/wp-content/uploads/2022/06/source-logo_03.png" alt="logo" style="height:50px" >
    <div class="title" style="">Tekno News</div>
</div>


    <div class="menus">
    <nav><?= wp_nav_menu(['Them_location' => 'Menu'] )  ?></nav>
</div>
</div>
</div>
 