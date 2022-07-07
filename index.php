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
            <input type="password" placeholder="Password..." name = "pass">
            <button type="submit" name="submitBtn">SUBMIT</button>
            <h3>NO ACCOUNT: <a href="register.php">REGISTER HERE</a></h3>
         </form>
        </section>
    </div>
</body>
</html>
