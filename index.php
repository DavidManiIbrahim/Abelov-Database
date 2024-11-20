<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Abelov Database </title>

   <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
  }

  body {
   overflow: hidden;
  }

  .container {
    width: 90vw;
    height: 100vh;
    position: relative;
    bottom: 400px;
    left: 200px;
    /* border: 1px solid; */
    display: flex;
    align-items: center;
    padding: 20px;
}

.content {
    flex: 1;
    /* border: 1px solid; */
    /* padding: 50px; */
    height: 50vh;
    max-width: 90%;
    font-size: 10px;
    padding: 20px;
  }

  h1 {
    color: #4c207b;
  
    font-size: 40px;
    font-weight: bold;
    margin-bottom: 10px;
  }

  h1 span {
    color: #A459C4;
    

  }

  p {
    color: #666;
    font-size: 15px;
    line-height: 1.5;
    margin-bottom: 20px;
  }

  .btn {
    display: inline-block;
    padding: 15px;
    font-size: 20px;
    color: #fff;
    background-color: #A459C4;
    border: none;
    /* position: absolute; */
    /* bottom: 360px; */
    border-radius: 5px;
    text-decoration: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .btn:hover {
    background-color: #922ca3;
  }

  .note {
    font-size: 15px;
    color: #999;
    margin-top: 15px;
    /* position: absolute; */
    /* bottom: 350px; */
  }

  .ellipse{
      position: relative;
    z-index: -10;
    left: 0;
    width: 30%;
  }

  .image-container {
    flex: 1;
    display: flex;
    justify-content: center;
  }

  .image-container img {
    width: 100%;
    max-width: 500px;
  }

.admin{
    height: 100%;
}





   </style>
 
</head>
<body>
    
    <img src="./src/assets/Ellipse 1.png" class="ellipse" alt="Ellipse image">
  <div class="container">
    <div class="content">
      <h1>Abelov Device <br> <span>Registration Form</span></h1>
      <p>
      Welcome to Abelov International Ltd, we value your trust and strive to provide
       top-notch repair services. Please use this form to register your device for repair by sharing the
        details below. Be sure to include a clear description of the problem and any specifications of your
         device to ensure our team can assist you efficiently. Thank you for choosing us—we’re here to help!
      </p>
      <a href="data.php" class="btn">Register Device</a>
     
    </div>
      <div class="image-container">
          <!-- <img src="./src/assets/amico.png" class="admin" alt="Illustration"> -->
          <img src="./src/assets/engine.png" class="admin" alt="Illustration">
        </div>
  </div>
</body>
</html>
