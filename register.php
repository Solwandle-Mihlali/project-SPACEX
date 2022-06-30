<?php 

include('db_connection.php');


if(isset($_POST['regBtn'])){

    $name = $_POST['name'];
    $Phone = $_POST['phone'];
    $email = $_POST['email'];
    $password= $_POST['pass'];
    $conf = $_POST['conf'];
    $hash = md5($password);
    

    //injecting data into databse 

    $sql = "INSERT INTO client_details SET
       
       client_name = '$name',
       client_phone = '$Phone',
       client_email = '$email',
       client_password = '$hash'
    ";
    //query execution 
    $result = mysqli_query($conn,$sql);
    //checking for succesful execution of query 
    if($result == true ){

        if($password != $conf){

            echo 'passwords do not match';
            header('location: register.php');
        }
        else{
        header('location: index.php');
       exit();
        }
    }
    else{

        echo "<br> data is not saved ";
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
    <div class="formWrap" >
        <section id="logoSection">
        </section>
        <section id="formSection">
         <form action="#" method="post" id="form">
            <input type="text" placeholder="Name..." name ="name">
            <input type="text" placeholder="Phone..." name = "phone">
            <input type="text" placeholder="Email..." name = "email">
            <input type="password" placeholder="Password..." name = "pass">
            <input type="password" placeholder="Confirm..." name = "conf">
            <button type="submit" name="regBtn">SUBMIT</button>
         </form>
        </section>
      
    </div>

</body>
</html>