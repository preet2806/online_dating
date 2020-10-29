<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="edit.css" media="screen"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
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
     const uploadpic = () => {
     console.log("work");
     const ref = firebase.storage().ref()
     const file = document.querySelector("#dp").files[0]
     const name = file.name;
     const metadata = {
         contentType:file.type
     }
     const task = ref.child(name).put(file,metadata)
     task
     .then(snapshot => snapshot.ref.getDownloadURL())
     .then(url => {
         document.getElementById("dpurl").value=url;
         console.log(url)
         alert("success image");
     })
     };
     </script>
</head>
<nav id="navbar"><div id="logo"><i class="fas fa-feather-alt"></i>Vmatch</div></nav>
<body>
    <div id="signupBody">
        <h1 id="formTitle">Create Account</h1>
        <label for="dp">Profile photo</label>
        <input id="dp" onfocusout="outon(this)" onfocus="focuson(this)"  class="signupelement" type="file" name="dp">
        <button class="but" onclick="uploadpic()"><span class="button-helper"></span><a>upload picture</a></button>
        <form id="signupDetails" autocomplete="off" action="editprofile.php" method="POST">
            <label for="firstname">Email id</label>
            <input onfocusout="outon(this)" onfocus="focuson(this)" class="signupelement" type="email" name="userEmail" value="<?php session_start(); echo $_SESSION['myusername'];?>">
            <label for="firstname">password</label>
            <input onfocusout="outon(this)" onfocus="focuson(this)" class="signupelement" type="password" name="userPassword" value="<?php echo $_SESSION['mypassword'];?>">
            <label for="firstname">User id</label>
            <input onfocusout="outon(this)" onfocus="focuson(this)" class="signupelement" type="text" name="userid" value="<?php echo $_SESSION['myuserid'];?>">
            <label for="firstname">First name</label>
            <input onfocusout="outon(this)" onfocus="focuson(this)" class="signupelement" type="text" name="firstname" value="<?php  echo $_SESSION['myname'];?>">
            <label for="gender">Gender</label>
            <div class="radioClass">
                <label>
                    <input type="radio" value="Male" class="option-input radio" name="gender" <?php if($_SESSION['mygender']==='Male'){echo "checked";} ?>/>
                    Male
                  </label>
                  <label>
                    <input type="radio" value="Female" class="option-input radio" name="gender" <?php if($_SESSION['mygender']==='Female'){echo "checked";} ?>/>
                    Female
                </label>
            </div>
            <label for="dateofbirth">age</label>
            <input onfocusout="outon(this)" onfocus="focuson(this)" class="signupelement" type="number" name="age" value="<?php  echo $_SESSION['myage'];?>">
            <input id="none" type="text" name="dpurl">
            <label for="bio">Bio</label>
            <input onfocusout="outon(this)" onfocus="focuson(this)"  class="signupelement" type="text" name="bio" value="<?php echo $_SESSION['mybio'];?>">
            <label for="location">my location</label>
            <div class="radioClass">
                <label>
                    <input type="radio" value="vellore" class="option-input radio" name="location" <?php if($_SESSION['mylocation']==='vellore'){echo "checked";} ?>/>
                    vellore
                  </label>
                  <label>
                    <input type="radio" value="chennai" class="option-input radio" name="location" <?php if($_SESSION['mylocation']==='chennai'){echo "checked";} ?>/>
                    chennai
                </label>
            </div>
            <label for="pref_age">preffered age</label>
            <input onfocusout="outon(this)" onfocus="focuson(this)"  class="signupelement" type="number" name="pref_age" value="<?php echo $_SESSION['mypref_age'];?>">
            <label for="pref_gender">preffered location</label>
            <div class="radioClass">
                <label>
                    <input type="radio" value="vellore" class="option-input radio" name="pref_location" <?php if($_SESSION['mypref_location']=='vellore'){echo "checked";} ?>/>
                    vellore
                  </label>
                  <label>
                    <input type="radio" value="chennai" class="option-input radio" name="pref_location" <?php if($_SESSION['mypref_location']=='chennai'){echo "checked";} ?>/>
                    chennai
                </label>
            </div>
            <label for="pref_gender">looking for</label>
            <div class="radioClass">
                <label>
                    <input type="radio" value="Male" class="option-input radio" name="pref_gender" <?php if($_SESSION['mypref_gender']=='Male'){echo "checked";} ?>/>
                    Male
                  </label>
                  <label>
                    <input type="radio" value="Female" class="option-input radio" name="pref_gender" <?php if($_SESSION['mypref_gender']=='Female'){echo "checked";} ?>/>
                    Female
                </label>
            </div>
            <button class="but" id="continueButton" type="submit"><span class="button-helper"></span><a>Continue</a></button>
            
        </form>
    </div>

</body>