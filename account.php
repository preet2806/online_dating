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
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-storage.js"></script>
    <!-- TODO: Add SDKs for Firebase products that you want to use
        https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-analytics.js"></script>

    <script>
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    var firebaseConfig = {
        apiKey: "AIzaSyCdXA1PQCw3Fhu7Ggw87hc1PQCh0sANfYU",
        authDomain: "vmatch-57c66.firebaseapp.com",
        databaseURL: "https://vmatch-57c66.firebaseio.com",
        projectId: "vmatch-57c66",
        storageBucket: "vmatch-57c66.appspot.com",
        messagingSenderId: "356093154515",
        appId: "1:356093154515:web:9c331091c556f6190ff026",
        measurementId: "G-STWZ3GE1ET"
    };
    console.log(firebase);
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();
    </script>
</head>
<?php
    session_start();
    $userin = $_SESSION['login_user'];
?>
<nav id="sidebar">
    <div  id="editProfile">
        <span class="button-helper"></span>
        <a href="edit.php">
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

