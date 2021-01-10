<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1 class="header_transaction">Transaction Details</h1>
</body>
</html>


<?php
    $server="localhost";
    $username="root";
    $password="";
    $db="transaction_details";
    $connection=mysqli_connect($server,$username,$password, $db);
    if(!$connection)
    {
        die("connection to this database failed due to" .mysqli_connect_error());
    }
    $sql="SELECT * FROM transaction_details";
    $result=mysqli_query($connection, $sql) or die ("bad query:$sql");
    echo "<table border='2', align='center', bgcolor='#c6ebc9',,width='500px', cellpadding='20px',";
    echo "<tr><th>Transferred From Account</th><th>Transferred To Account</th><th>Amount</th></tr>\n";
    while($rows = mysqli_fetch_assoc($result))
    {
        echo "<tr><td>{$rows["Acc_no_from"]}</td><td>{$rows["Acc_no_to"]}</td><td>{$rows["Amount"]}</td></tr>";
    }
    echo "</table>";
    $connection->close();   

?>

