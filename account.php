<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="account.css" media="screen"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&family=Mr+De+Haviland&display=swap" rel="stylesheet">
    
    <script src="swipe.js"></script>
</head>
<?php
    session_start();
    $userin = $_SESSION['login_user'];
?>
<nav id="sidebar">
    <div  id="editProfile">
        <span class="button-helper"></span>
        <a href="signup.html">
        <?php
        echo ''.(string)$_SESSION['login_user'].'';
        ?>
        </a>
        
    </div>
    <div id="chat">
        <div id="selection">
            <a onclick="matchesDisplay()" id="matches">matches</a>
            <a onclick="messagesDisplay()" id="messages">messages</a>
        </div>
        <div id=container>
            
        </div>
    </div>

</nav>
    <div id="switch"></div>
    <div id="cardsContainer">
        <div id="nocards">Looks like youve swiped everyone around you...Come back later for more</div>
    </div>

</body>
