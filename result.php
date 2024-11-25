<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Result
    </title>

</head>
<body>

    <img src="./src/assets/Ellipse 1.png">
    
</body>
</html>


<?php

include("config.php");

// Check if the search form was submitted
if (isset($_POST['search']) && !empty($_POST['search'])) {
    $searchTerm = mysqli_real_escape_string($conn, $_POST['search']);  // Prevent SQL injection

    // Query to search for the customer name
    $query = "SELECT * FROM users WHERE customer_name LIKE '%$searchTerm%' OR phone_number LIKE '%$searchTerm%'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Output results in a table format
        echo "<h3>Search Results:</h3>";
        echo "<table border='1' cellpadding='10' cellspacing='0'>";
        echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>Phone Number</th>";
        echo "<th>Device Type</th>";
        echo "<th>Device Name</th>";
        echo "<th>Problem</th>";
        echo "<th>Amount Paid</th>";
        echo "<th>Action</th>";
        echo "</tr>";
        
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['customer_name']) . "</td>";
            echo "<td>" . htmlspecialchars($row['phone_number']) . "</td>";
            echo "<td>" . htmlspecialchars($row['device_type']) . "</td>";
            echo "<td>" . htmlspecialchars($row['device_name']) . "</td>";
            echo "<td>" . htmlspecialchars($row['problem']) . "</td>";
            echo "<td>" . htmlspecialchars($row['amount_paid']) . "</td>";
            $customerId = $row['id'];  // Assuming 'id' is the primary key for the user record
            echo "<td><a href='summary.php?id=$customerId'><button>View Summary</button></a></td>";
            echo "</tr>";

              
        }
        
        echo "</table>";
    } else {
        echo "<p>No customers found matching that name or phone number.</p>";
    }
}
?>

<style>
    table {
        position: absolute;
    /* border: 1px dashed #4e2a8e; */
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 95%;
  background: transparent;
  z-index: 5;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  width: 4%;
  height: 5vh;
  /* padding: 10px; */
}

button{
    cursor: pointer;
    /* float: right; */
    justify-content: center;
    border-radius: 5px;
    padding: 8px;
    position: relative;
    left: 30px;
    border: none;
    /* background-color: paleturquoise; */
}
img{
    position: absolute;
    z-index: 10;
    width: 20%;
    top: 0;
    left: 0;

}


</style>