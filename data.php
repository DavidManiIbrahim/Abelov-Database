

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Form</title>

  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial, sans-serif;
}

body {
overflow: auto;
}

.container {
  width: 60%;
  height: 50%;
  /* border: 1px solid; */
  /* max-width: 600px; */
  /* background-color: #fff; */
  /* box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); */
  padding: 50px;
  top: 50px;
  left: 250px;
  border-radius: 10px;
  position: relative;
}

.circle{
  position: fixed;
  left: 0;
  width: 25%;
  top: 0;
  /* border: 1px solid; */
}

h1 {
  color: #4c207b;
  font-size: 30px;
  margin-bottom: 10px;
}

h1 span {
  color: #a459c4;
}

p {
  color: #666;
  font-size: 15px;
  line-height: 1.5;
  margin-bottom: 20px;
}

label {
  font-weight: bold;
  color: #333;
  display: block;
  margin-top: 20px;
  margin-bottom: 5px;
}

.input-box,select {
  width: 100%;
  padding: 10px;
  font-size: 20px;
  background: transparent;
  border: 1px dashed #a459c4;
  border-radius: 5px;
  outline: none;
  resize: none;
  color: #666;
}

.input-box:focus {
  border-color: #922ca3;
}

.btn {
  display: inline-block;
  padding: 15px;
  justify-content: space-around;
  width: 20%;
  font-size: 16px;
  color: #fff;
  background-color: #a459c4;
  border: none;
  border-radius: 5px;
  text-decoration: none;
  cursor: pointer;
  margin-top: 25px;
  transition: background-color 0.3s ease;
}

.btn:hover {
  background-color: #922ca3;
}

.error {
  color: red;
  font-size: 15px;
  /* margin-top: 5px; */
  position: absolute;
  right: 60%;
  top: 174%;
}

#success{
  color: #12be6e;
  position: absolute;
  right: 61%;
  top: 194%;
}

@media screen and (orientation:portrait) {
  .container{
    width: 90%;
  }
}
  </style>
</head>
<body>
  <img class="circle" src="./src/assets/Ellipse 1.png" alt="">
  <div class="container">
    <h1>Submit Your <span>Registration Data</span></h1>
    <p>We’d love to hear from you! Please provide as much detail as you’d like.</p>

    <form action="data.php" method="post">

      <label for="customer name">Customer Name</label>
      <input type="text" name="customer_name" id="title" class="input-box" placeholder="Enter your Name">
      <div id="titleError" class="error"></div>
      
      <label for="phone number">Phone Number</label>
      <input type="text" name="phone_number" id="title" class="input-box" placeholder="Enter your phone number">
      <div id="titleError" class="error"></div>
      
      <label for="device type">Device Type</label> <br>
      <select name="device_type">
        <!-- <option></option> -->
        <option value="laptop">Laptop</option>
        <option value="desktop">Desktop</option>
        <option value="ps2">Ps2</optionv>
        <option value="ps3">Ps3</option>
        <option value="ps4">Ps4</option>
        <option value="xbox">Xbox</option>
        <option value="others">Others</option>
      </select>
      <div id="titleError" class="error"></div>

      <label for="registration date">Date of Registration</label>
      <input type="datetime-local" name="registration_date" id="title" class="input-box" placeholder="Enter Date of Registration Here">
      <div id="titleError" class="error"></div>

      <label for="device name">Name of Device</label>
      <input type="text" name="device_name" id="title" class="input-box" placeholder="Enter Device Name">
      <div id="titleError" class="error"></div>

      <label for="problem">Problem</label>
      <input type="text" name="problem" id="title" class="input-box" placeholder="Enter Laptop problem">
      <div id="titleError" class="error"></div>

      <label for="charger">Charger</label>
      <select name="charger">
        <option value="yes">Yes</optionb>
        <option value="no">No</option>
      </select>
      
      <div id="titleError" class="error"></div>

      <label for="storage type">Storage</label>
      <select name="storage_type">
        <option value="ssd">SSD</option>
        <option value="hdd">HDD</option>
      </select>
      <div id="titleError" class="error"></div>

      <label for="storage size">Storage Size</label>
      <input type="text" name="storage_size" id="title" class="input-box" placeholder="Whats Your Storage Size">
      <div id="titleError" class="error"></div>

      <label for="ram">Ram</label>
      <select name="ram_type">
        <option value="pc2">PC2</option>
        <option value="pc3">PC3</option>
        <option value="pc4">PC4</option>
      </select>
      
      <div id="titleError" class="error"></div>

      <label for="ram size">Ram Size</label>
      <input type="text" name="ram_size" id="title" class="input-box" placeholder="Whats Your Ram Size">
      <div id="titleError" class="error"></div>

      <label for="amount">Amount</label>
      <input type="tel" name="amount" id="title" class="input-box" placeholder="Amount paid">
      <div id="titleError" class="error"></div>

      <div id="descriptionError" class="error"></div>
      <p  id="success"></p>

      <button type="submit" class="btn">Submit</button>
      <input type="submit" class="btn" value="Print" onclick="print()">
      
    </form>
  </div>

</body>
</html>


<?php 

// include("data.php");

require_once("config.php");

$customer_name = $_POST["customer_name"];
$phone_number = $_POST["phone_number"];
$device_type = $_POST["device_type"];
$registration_date = $_POST["registration_date"];
$device_name = $_POST["device_name"];
$problem = $_POST["problem"];
$charger = $_POST["charger"];
$storage_type = $_POST["storage_type"];
$storage_size = $_POST["storage_size"];
$ram_type = $_POST["ram_type"];
$ram_size = $_POST["ram_size"];
$amount = $_POST["amount"];
// echo $title;


if (empty($customer_name) || empty($phone_number) 
|| empty($device_type) || empty($device_name) 
|| empty($registration_date) || empty($problem)
|| empty($charger) || empty($storage_type) 
|| empty($storage_size) || empty($ram_type) 
|| empty($ram_size) || empty($amount)) {
    echo "<p class='error'>Please fill in all fields.</p>";
    // exit;
}else{

$query = "INSERT INTO `users` (`id`,`customer_name`,`phone_number`,`device_type`,`registration_date`,`device_name`,`problem`,`charger`,`storage_type`,`storage_size`,`ram_type`,`ram_size`,`amount_paid`) VALUES (NULL,'$customer_name','$phone_number','$device_type','$registration_date','$device_name','$problem','$charger','$storage_type','$storage_size','$ram_type','$ram_size','$amount')";
$result =  mysqli_query($conn, $query);

}


if ($result) {
    echo "<p id='success'>Suggestion Submitted successful!</p>";
    exit;
}else{
    echo "<p id='error'>Error please try again.</p>";
}





