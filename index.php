<?php 
 
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
 



?>
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

    <div class="loginFormWrap" >
         <div class="colorBg"></div>
        <section id="logoSection">

        </section>

        <section id="formSection">
         <form action="#" method="post">
            <input type="text" placeholder="Email..." name = "phone">
            <input type="text" placeholder="Password..." name = "pass">
            <button type="submit" name="submitBtn">SUBMIT</button>
            <h3>NO ACCOUNT: <a href="register.php">REGISTER HERE</a></h3>
         </form>
        </section>
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
min-height: 40vh;
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

.formWrap #formSection form input{

border:solid green 1px ;
width: 60%;
height: 30px;
color: black;
transform: none;
border-top-style: none;
border-left-style: none;
border-right-style: none;
}

.formWrap #formSection form input::placeholder{

color: green;
}

.formWrap #formSection form button{

width: 30%;
height: 35px;
box-shadow: 2px 3px 10px rgb(34, 161, 2);
border:solid 1px black;
border-radius: 10px;
color: green;
font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
font-size: 15px;
font-weight: bold;
background:transparent;
}


@media screen and (min-width:720px) {

.formWrap{

    width: 100%;
}

.formWrap #formSection form button{

    width: 20%;
    height: 35px;

}
.formWrap #formSection{

    height: 60vh;
    border: solid;
}

}


/* login form styling */

.loginFormWrap{
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

.loginFormWrap section{

width: 100%;
min-height: 40vh;
overflow: hidden;
}
.loginFormWrap #logoSection{
overflow: hidden;
background-image: url('logo.png');
background-size: cover;
background-position: center;
background-repeat: no-repeat;
position: absolute;
top: 15%;
left: 50%;
transform: translate(-50%,-50%);

}


.loginFormWrap #formSection{

height: 50vh;
position: absolute;
bottom: 0;
}

.loginFormWrap #formSection form{

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


.formWrap #formSection form input{


width: 60%;
height: 200px;
color: black;
transform: none;
border-top-style: none;
border-left-style: none;
border-right-style: none;
}

.loginFormWrap #formSection form input::placeholder{

color: green;
}

.loginFormWrap #formSection form button{

width: 30%;
height: 35px;
box-shadow: 2px 3px 10px rgb(0, 0, 0);
border:solid 0.5px black;
border-radius: 10px;
color: rgb(255, 255, 255);
font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
font-size: 15px;
font-weight: bold;
background:rgb(73, 42, 1);
}

.loginFormWrap #formSection form h3{

width: 70%;
height: 35px;
font-size: 12px;
display: flex;
align-items: center;
justify-content: center;
color: white;
}

.loginFormWrap #formSection form h3 a{
color: red;
}


.colorBg{

min-height: 70vh;
width: 100%;
position:absolute;
border-top-left-radius: 50%;
border-top-right-radius: 50%;
background: rgba(18, 105, 18, 0.89);
z-index: -1;
bottom: 0;
}

    </style>
</body>
</html>