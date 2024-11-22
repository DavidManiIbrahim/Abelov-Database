


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="./dashboard.css">
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> Add jQuery -->
  <style>
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
  }

  body {
    display: flex;
    height: 100vh;
    /* overflow-y: auto; */
    background-color: #f0f0f5;
    /* width: 100vw; */
  }

  /* Sidebar */
  .sidebar {
    /* border: 1px solid red; */
    max-width: 500px;
    background-color: #d8b4f1;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
  }

  .sidebar a {
    text-decoration: none;
    color: #000;
    font-weight: bold;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    font-size: 15px;
  }



  .sidebar a:hover {
    color: #4e2a8e;
  }


.container{
  /* border: 1px solid; */
  overflow-y: scroll;
  width: 100%;
}

table {
  /* overflow-y: scroll; */
  /* border: 1px solid green; */
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  width: 4%;
  height: 5vh;
  /* padding: 10px; */
}

.id{
  width: 10px;
}

tr{
  /* border: 1px solid; */
  height: 5vh;
}

tr:nth-child(even) {
  background-color: #e3c6f6;
  cursor: pointer;
}

tr:nth-child(odd) {
  background-color: #e0e0b2f8;  
  cursor: pointer;
}

.head{
    text-align: center;
    color: #4e2a8e;
    /* pos */
  background-color: #e3c6f6;  
}

.txt1{
    margin-top: 5px;
}

span{
  font-size: medium;
  inset: -10px;
  position: relative;
}

button{
    cursor: pointer;
    float: right;
    border-radius: 5px;
    padding: 5px;
    border: none;
    /* background-color: paleturquoise; */
}
</style>
</head>

<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <a href="./admin.php" class="logout"> <img src="./src/assets/logout.png" alt=""> Logout</a>
  </div>




</body>
</html>


<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Dashboard</title>
</head>

<body>
<div class="container">
  <h1 class="head">Abelov International Ltd <br> <span>Customers Database</span> </h1>
  <?php 
include("search.php");
?>
  <table>
    <tr>
      <th class="id">ID</th>
        <th class="title">Customer Name</th>
        <th>Phone Number</th>
        <th>Device Type</th>
        <th>Device Name</th>
        <th>Registration Date</th>
        <th>Problem</th>
        <th>Charger</th>
        <th>Storage Type</th>
        <th>Storage Size</th>
        <th>Ram Type</th>
        <th>Ram Size</th>
        <th>Amount Paid</th>
        
    </tr>
    <?php


$query = "SELECT * FROM users";
$result = mysqli_query( $conn, $query);
echo '<tr>';
while($row=mysqli_fetch_array($result)){
?>
<td><?php echo $row['id']?></td>
<td><?php echo $row['customer_name']?></td>
<td><?php echo $row['phone_number']?></td>
<td><?php echo $row['device_type']?></td>
<td><?php echo $row['device_name']?></td>
<td><?php echo $row['registration_date']?></td>
<td><?php echo $row['problem'];?></td>
<td><?php echo $row['charger'];?></td>
<td><?php echo $row['storage_type'];?></td>
<td><?php echo $row['storage_size'];?></td>
<td><?php echo $row['ram_type'];?></td>
<td><?php echo $row['ram_size'];?></td>
<td><?php echo $row['amount_paid'];?></td>


</tr>

<?php
}
?>
</table>    
</div>
</body>
</html>