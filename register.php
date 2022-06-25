<?php

    include('db_connection.php');
    //declaring variables
    $name = $name = $email = $pass =  $rpass = "";

    if(isset($_POST['regBtn']))
    {
        //storign data in declared varriables
        $name = $_POST['name'];
		$phone = $_POST['phone'];
        $email = $_POST['email'];
        $pass = $_POST['password']; 
        $rpass = $_POST['conf'];
        

        //password conditions
        $pattern = '/^(?=.*[!@#$%^&*-?])(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{4,20}$/';
		
        $query = "SELECT * FROM client_details WHERE email = '$email'";
    
        $checkUserExsists = mysqli_query($conn,$query);
        
        if(empty($name) || empty($phone) || empty($email) || empty($pass) || empty($rpass))
        {
            echo "<br>Fields cannot be empty";
        }
        elseif(filter_var($email, FILTER_VALIDATE_EMAIL) != true)
        {
            echo "<br>Invliad Email address";
        }
        elseif(mysqli_num_rows($checkUserExsists) == 1)
        {
            echo "<br>User already exsists";
        }

        elseif($pass != $rpass)
        {
            echo "<br>Passwords do not match";
        }

		elseif(!preg_match($pattern, $pass))
		{
			echo  "<br>Password is not strong enough";
		}
        else
        {
			
            $pass = md5($pass);
            $query = "INSERT INTO client_details (client_name,client_phone, client_email, client_password) VALUES ('$name','$phone','$email','$pass')";
            $insertUser = mysqli_query($conn,$query);
            if ($insertUser == true) 
            {
                echo "<br>You have Sucessfully been Registered";
            
			}
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
        <div class="logoContainer" id="regLogo">
        </div>
         <form action="#" method="POST">
            <input type="text" placeholder="Name..." name="name" required>
            <input type="text" placeholder="Phone..." name="phone" required>
            <input type="text" placeholder="Email..." name="email" required>
            <input type="password" placeholder="Password..." name="password" required>
            <input type="password" placeholder="Confirm..." name="conf" required>
            <button type="submit" id="regBtn">REGISTER</button>
        
         </form>   
    </div>
    

    <style>
        .formWrap{

min-height: 75vh;
width: 360px;
border: solid green 2px;
position: absolute;
top: 50%;
left: 20%;
transform: translate(-50%,-50%);
box-shadow: 1px 3px 10px black ;
display: flex;
flex-direction: column;
align-items: center;
justify-content: center;
flex-wrap: wrap;
animation: slidin 5s 1;
backdrop-filter: blur(0px);
gap: 5px;
overflow: hidden;
}

    </style>
</body>
</html>