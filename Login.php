<?php
include('create-script.php');
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CrabTek Login</title>
  <style>
    body {
      overflow-x: hidden;
    }

    * {
      box-sizing: border-box;
    }

    .user-detail form {
      height: 40%;
      border: 2px solid #f1f1f1;
      padding: 16px;
      background-color: white;

    }

    .user-detail {
      width: 30%;
      float: left;
    }

    input {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    }

    button[type=submit] {
      background-color: #434140;
      color: #ffffff;
      padding: 10px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
      font-size: 20px;
    }

    label {
      font-size: 18px;
      ;
    }

    button[type=submit]:hover {
      background-color: #3d3c3c;
    }

    .form-title a,
    .form-title h2 {
      display: inline-block;

    }

    .form-title a {
      text-decoration: none;
      font-size: 20px;
      background-color: green;
      color: honeydew;
      padding: 2px 10px;
    }

    .icon {
      display: block;
      margin-top: 4%;
      margin-left: auto;
      margin-right: auto;
      width: 10%;
    }

    form {
      margin-left: 122%;
      margin-top: 8%;
      width: 500px;
    }
  </style>
</head>

<body>
  <div class="navbar">
    <img src="img\logo.png" class="icon">
  </div>
  <!--====form section start====-->
  <div class="user-detail">
    <div class="form-title">
    </div>

    <form method="post" action="">
      <label>Full Name</label>
      <input type="text" placeholder="Enter Name" name="full_name" required>
      <label>Email Address</label>
      <input type="email" placeholder="Enter Email Address" name="email_address" required>
      <label>Address</label>
      <input type="city" placeholder="Enter Address" name="city" required>
      <label>Contact Number</label>
      <input type="text" placeholder="Enter Contact Number" name="country" required>
      <button type="submit" name="create"><a href="Home.html">Submit</a></button>
    </form>

  </div>
  </div>
  <!--====form section start====-->
</body>

</html>