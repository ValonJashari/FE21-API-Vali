<?php

// Require conn.php (DB connection) file
require_once("conn.php");

// This query will check do we have car_id in the table car
// for the provided $id
//before you change echo to se what you have
//never 
$sql = "SELECT * FROM car WHERE car_id='{$id}'";

// Perform a query on the DB
$result = mysqli_query($conn, $sql);

// Fetch the query into $row
$row = mysqli_fetch_assoc($result);

    //Store values into the variables
    //create e new variable, ask if this exist $row["variable_name"] ? nese existon merre variable $row['variable_name'] nese jo merre 0
   $name=isset($row["name"]) ? $row['name']:0;
   $price=isset($row["price"]) ? $row['price']:0;

// Close the DB connection
mysqli_close($conn);
?>