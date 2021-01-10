<?php
    if(isset($_POST['Transfer_from']))
    {
        $server="localhost";
        $username="root";
        $password="";
        $connection=mysqli_connect($server,$username,$password);
        if(!$connection)
        {
            die("connection to this database failed due to" .mysqli_connect_error());
        }
        $Transfer_from=$_POST['Transfer_from'];
        $Transfer_To=$_POST['Transfer_To'];
        $Transfer_Amount=$_POST['Transfer_Amount'];
        $sql="INSERT INTO `transaction_details` .`transaction_details` (`Acc_no_from`,`Acc_no_to`, `Amount`)
        VALUES ('$Transfer_from', '$Transfer_To', '$Transfer_Amount');";
        if($connection->query($sql)==true)
        {
            echo "Successfully Transferred";
        }
        else
        {
            echo "ERROR: $sql <br> $connection->error";
        }

        $connection->close();
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="container1">
    <h1 class="header1">
        Transaction Page
    </h1>
    <form action="transaction.php" method="POST">
        <input type="text" name="Transfer_from" id="Transfer_from" placeholder="Enter the Account Number">;
        <input type="text" name="Transfer_To" id="Transfer_To" placeholder="Enter the Account Number"><br>
        <input type="text" name="Transfer_Amount" id="Transfer_Amount" placeholder="Enter the Amount to be Transferred"><br>
        <button class="btn">Transfer</button>
    </form>
</body>
</html>