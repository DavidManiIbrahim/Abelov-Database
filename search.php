<!-- Search Bar Section -->
<!-- <h2>Search for Customer</h2> -->
<form action="result.php" method="post">
<!-- <form action="summary.php" method="post"> -->
  <label for="search">Search Customer by Name:</label>
  <input type="text" name="search" id="search" class="input-box" placeholder="Enter Customer Name or Phone Number" required>
  <button type="submit" class="btn">Search</button>
</form>
<style>
    form{
        text-align: center;
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














?>
