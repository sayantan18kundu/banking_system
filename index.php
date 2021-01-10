<?php
    if(isset($_POST['Name']))
    {
        $server="localhost";
        $username="root";
        $password="";
        $connection=mysqli_connect($server,$username,$password);
        if(!$connection)
        {
            die("connection to this database failed due to" .mysqli_connect_error());
        }
         
        $Name=$_POST['Name'];
        $Age=$_POST['Age'];
        $Amount_Deposited=$_POST['Amount_Deposited'];
        $phone=$_POST['phone'];
        $Acc_no=$_POST['Acc_no'];
        $sql="INSERT INTO `create_user_id` .`create_user_id`  (`Name`, `Age`, `Phone`, `Acc_no`, `Amount_Deposited`) 
        VALUES ('$Name', '$Age', '$phone', '$Acc_no', '$Amount_Deposited');";
        if($connection->query($sql)==true)
        {
            echo "Account was successfully created";
        }
        else{
            echo"ERROR: $sql <br> $connection->error";
        }
        $connection->close();
    }   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login Page</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="container2">
    <h1 class="header1">
        User Registration Page
    </h1>
    <form action="index.php" method="POST">
        
        <input type="text" name="Name" id="Name" placeholder="Enter Your Name"><br>
        <input type="text" name="Age" id="age" placeholder="Enter Your Age"><br>        
        <input type="text" name="phone" id="phone" placeholder="Enter Your Phone Number"><br>
        <input type="text" name="Acc_no" id="Acc_no" placeholder="Enter the Preferred Acccount Number"><br>
        <input type="text" name="Amount_Deposited" id="Amount_Deposited" placeholder="Enter Your Initial Deposited Amount"><br>
        <button class="btn">Submit</button>
        <button class="btn">Reset</button>
    </form>
</body>
</html>