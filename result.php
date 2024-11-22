<?php

include("config.php");

// Check if the search form was submitted
if (isset($_POST['search']) && !empty($_POST['search'])) {
    $searchTerm = mysqli_real_escape_string($conn, $_POST['search']);  // Prevent SQL injection

    // Query to search for the customer name
    $query = "SELECT * FROM users WHERE customer_name LIKE '%$searchTerm%'";
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
        echo "<p>No customers found matching that name.</p>";
    }
}
?>
