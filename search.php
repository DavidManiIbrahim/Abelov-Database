<!-- Search Bar Section -->
<!-- <h2>Search for Customer</h2> -->
<form action="result.php" method="post">
<!-- <form action="summary.php" method="post"> -->
  <label for="search">Search Customer by Name:</label>
  <input type="text" name="search" id="search" class="input-box" placeholder="Enter Customer Name" required>
  <button type="submit" class="btn">Search</button>
</form>
<style>
    form{
        text-align: center;
        /* width: 50%; */
        padding: 20px;
        justify-content: space-between;
        background: #e3c6f6;
    }
    input{
        padding: 10px;
        width: 50%;
        border-radius: 5px;
  border: 1px dashed #4c207b;
    }
    .btn{
        position: relative;
        right: 120px;
        width: 10%;
        padding: 10px;
    }
</style>

<?php
// Database connection
require_once("config.php");



// Check if the search form was submitted
// if (isset($_POST['search']) && !empty($_POST['search'])) {
//     $searchTerm = mysqli_real_escape_string($conn, $_POST['search']);  // Prevent SQL injection

    // Query to search for the customer name
    // $query = "SELECT * FROM users WHERE customer_name LIKE '$search'";
//     $query = "SELECT * FROM users WHERE customer_name LIKE '%$searchTerm%'";
//     $result = mysqli_query($conn, $query);

    // if (mysqli_num_rows($result) > 0) {
        // Output results if there are matching records
    //     echo "<h3>Search Results:</h3>";
    //     while ($row = mysqli_fetch_assoc($result)) {
    //         echo "<div class='user-info'>";
    //         echo "<p><strong>Name:</strong> " . htmlspecialchars($row['customer_name']) . "</p>";
            // echo "<p><strong>Phone Number:</strong> " . htmlspecialchars($row['phone_number']) . "</p>";
            // echo "<p><strong>Device Type:</strong> " . htmlspecialchars($row['device_type']) . "</p>";
            // echo "<p><strong>Device Name:</strong> " . htmlspecialchars($row['device_name']) . "</p>";
            // echo "<p><strong>Problem:</strong> " . htmlspecialchars($row['problem']) . "</p>";
            // echo "<p><strong>Amount Paid:</strong> " . htmlspecialchars($row['amount_paid']) . "</p>";
    //         echo "</div>";
    //     }
    // } else {
    //     echo "<p>No customers found matching that name.</p>";
    // }
// }
?>
