<?php
include("config.php");

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $customerId = mysqli_real_escape_string($conn, $_GET['id']);  // Prevent SQL injection

    // Query to get the customer details based on ID
    $query = "SELECT * FROM users WHERE id = '$customerId'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Fetch customer details
        $customer = mysqli_fetch_assoc($result);

        // Start output with a container div for the receipt card
        echo "<div class='receipt-card'>";

        // Print Button (positioned at top-right)
        echo "<button class='print-btn' onclick='window.print();'>Print Receipt</button>";

        // Title of the receipt
        // echo "<h3>Customer Receipt</h3>";
        echo "<h2><strong>Abelov International ltd</strong></h3>";
        echo "<h4><strong>Phone Number: 08101726816</strong></h3>";
        echo "<h4><strong> FCMB</strong></h3>";
        echo "<h4><strong>Account No: 2768912013</strong></h3>";
        echo "<h4><strong>Abel Victor Osinachi</strong></h3>";


        echo"<br>";

        // Display customer details in a structured format (Receipt-like view)
        echo "<div class='customer-details'>";
        echo "<p><strong>Name:</strong> " . htmlspecialchars($customer['customer_name']) . "</p>";
        echo "<p><strong>Phone Number:</strong> " . htmlspecialchars($customer['phone_number']) . "</p>";
        echo "<p><strong>Device Type:</strong> " . htmlspecialchars($customer['device_type']) . "</p>";
        echo "<p><strong>Registration Date:</strong> " . htmlspecialchars($customer['registration_date']) . "</p>";

        echo "<p><strong>Problem:</strong> " . htmlspecialchars($customer['problem']) . "</p>";
        echo "<p><strong>Total Amount Paid:</strong> " . htmlspecialchars($customer['amount_paid']) . "</p>";
        echo "<strong>Engineer's Name:</strong>";
        echo "</div>";  // End of customer details

      
            echo "</table>";
           ;
    } else {
        echo "<p>Customer not found.</p>";
    }
} else {
    echo "<p>No customer selected.</p>";
}
?>

<!-- Add styles to enhance the appearance -->
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 20px;
    }

    .receipt-card {
        background-color: white;
        border-radius: 12px;
        padding: 30px;
        height:80vh;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        margin: auto;
        position: relative;
    }

    h3,h2 {
        text-align: center;
        color: #333;
        font-size: 28px;
        margin-bottom: 20px;
        text-transform: uppercase;
    }

    h4{
        text-align: center;
        color: #333;
        margin: 10px;
    }

    .customer-details p {
        font-size: 16px;
        color: #555;
        line-height: 1.6;
        margin: 8px 0;
    }

    .customer-details strong {
        color: #333;
    }

    .payment-history {
        margin-top: 30px;
    }

    .payment-history h3 {
        font-size: 22px;
        color: #333;
        margin-bottom: 10px;
        text-transform: uppercase;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
    }

    table th, table td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    table th {
        background-color: #f1f1f1;
        color: #555;
    }

    table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    table tr:hover {
        background-color: #eaeaea;
    }

    /* Print Button Styling */
    .print-btn {
        position: absolute;
        bottom: 20px;
        right: 40%;
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .print-btn:hover {
        background-color: #45a049;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .receipt-card {
            padding: 20px;
            height: 50%;
        }

        h2 {
            font-size: 24px;
        }

        .customer-details p, .payment-history h3 {
            font-size: 14px;
        }

        table th, table td {
            padding: 8px;
        }

        .print-btn {
            font-size: 14px;
            padding: 8px 16px;
        }
    }
</style>
