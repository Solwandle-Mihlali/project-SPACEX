<!--<?php 
 
 include('db_connection.php');

 if(isset($_POST['submitBtn'])){
     
    //variables 
     $email = $_POST['email'];
     $password= $_POST['pass'];
     //query to check if specific user exists 
     $sql = "SELECT client_email, client_password FROM client_details WHERE
     client_email ='$email' AND client_password = '$password'";
     //query execution 
     $result = mysqli_query($conn,$sql);
     
     //counting number of account that match query
     $count = mysqli_num_rows($result);

     //putting results of count into a signle array 

     $row = mysqli_fetch_assoc($result);
     
     //checking if atleast one account matches

     if($count ==1){

        header('location: productPage.html');
        exit();
     }
     else{

        header('location: productPage.html');
     }
 }
?>-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>SPACE X</title>
</head>
<body>
    <div class="loginFormWrap" id="loginFormWrap" >
         <div id="wrapLogo">
            <div id="circlesContainer">
               <div class="circles"></div>
               <div class="circles" id="circle2"></div>
            </div>
            <button id="getStarted" onclick="startSession()">GET STARTED</button>
         </div>
         <form action="#" method="post" id="loginForm">
            <div class="imageContainer"></div>
            <input type="text" placeholder="Email..." name = "phone" >
            <input type="password" placeholder="Password..." name = "pass" >
            <button type="submit" name="submitBtn">SUBMIT</button>
            <h3>NO ACCOUNT: <a href="register.php">REGISTER HERE</a></h3>
            <div class="shape"></div>
         </form>
    </div>

    <style>
      *{

padding: 0;
margin: 0;
box-sizing: border-box;
}

:root{

--spaceGreen: rgb(8, 90, 8);
}

body{
overflow: hidden;
 display: flex;
 align-items: center;
 justify-content: center;
min-height: 100vh;
width: 100%;
background: rgb(255, 255, 255);
}


.formWrap{

min-height: 100vh;
width: 100%;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
box-shadow: 1px 3px 10px black ;
display: flex;
flex-direction: column;
align-items: center;
justify-content: space-around;
flex-wrap: wrap;
overflow: hidden;
}

.formWrap section{

width: 100%;
min-height: 15vh;
}

.formWrap #logoSection{
overflow: hidden;
background-image: url('logo.png');
background-size: cover;
background-position: center;
background-repeat: no-repeat;
}


.formWrap #formSection{

height: 70vh;
}

.formWrap #formSection form{
height: 100%;
width: 100%;
position: relative;
top: 50%;
left: 50%;
transform:translate(-50%,-50%);
display: flex;
flex-direction: column;
align-items: center;
justify-content: space-evenly;  
}

.formWrap #formSection #form input{

border:solid rgb(8, 75, 17) 1px ;
width: 60%;
height: 20px;
color: black;
border-top-style: none;
border-left-style: none;
border-right-style: none;
}

.formWrap #formSection form input::placeholder{

color: green;
}

.formWrap #formSection form button{

width: 30%;
height: 40px;
z-index: 1;
box-shadow: 2px 3px 10px rgb(34, 161, 2);
border:solid 1px black;
border-radius: 10px;
color: green;
font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
font-size: 15px;
font-weight: bold;
background:transparent;
}

/*landing screen styling*/


.loginFormWrap{

min-height: 100vh;
width: 100%;
border: solid 1px green;
display: flex;
flex-direction: column;
padding: 0;
margin: 0;
background: rgb(0, 0, 0);
overflow: hidden;

}
.loginFormWrap #wrapLogo{

height: 100vh;
width: 100%;
background-image: url('logo.png');
background-position: center;
background-size: contain;
background-repeat: no-repeat;
display: flex;
flex-direction: column;
align-items: center;
justify-content: center;
}
.loginFormWrap #wrapLogo button{
width: 40%;
height: 40px;
border-radius: 10px;
position: absolute;
bottom: 10%;
background: rgb(0, 0, 0);
backdrop-filter: blur(10px);
color: rgb(255, 255, 255);
box-shadow: 4px 4px 10px rgb(36, 131, 36);
border: solid green 1px;
font-weight: bold;
}

.loginFormWrap #wrapLogo #circlesContainer{

height: 40px;
width: 80%;
position: absolute;
top: 70%;
display: flex;
align-items: center;
justify-content: center;
}
.loginFormWrap #wrapLogo #circlesContainer .circles{

height: 60%;
width: 8%;
background:rgb(25, 82, 25);
border-radius: 50%;
animation: moveCircle 10s infinite;
position: absolute;
left: 0;
}
.loginFormWrap #wrapLogo #circlesContainer #circle2{

height: 60%;
width: 8%;
background:rgb(65, 45, 4);
border-radius: 50%;
animation: moveCircle 10s infinite;
position: absolute;
margin-left: 30px;
}
@keyframes moveCircle {

0%{
    left: 0;
    transition: ease;
}
50%{
    left: 90%;
}
}

/*actual form styling*/
.loginFormWrap form{
height: 100vh;
border: solid green 1px ;
display: flex;
flex-direction: column;
align-items: center;
width: 100%;
padding-top: 150px;
gap:50px;
overflow: hidden;
z-index: 2;

}

.loginFormWrap form input {

width: 65%;
height: 40px;
border: solid green 0.8px;
border-radius: 10px;

}

.loginFormWrap form button{

width: 35%;
height: 40px;
border: solid green 0.8px;
border-radius: 10px;
box-shadow: 3px 4px 10px;
background: white;
color: green;

}


.loginFormWrap form h3{

position: absolute;
bottom: 5%;
font-size: 14px;

}


.loginFormWrap form h3 a{

color: red;

}

.loginFormWrap .imageContainer{

width: 100%;
height: 40vh;
position: absolute;
bottom: 0;
background-image: url('logo.png');
background-position: center;
background-size: contain;
background-repeat: no-repeat;
z-index: -1;
}

    </style>
 <script src="index.js"></script>
</body>
</html>
