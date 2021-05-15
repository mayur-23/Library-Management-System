<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Library Management System</title>
    <meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
    	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
      	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
      	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
        <style type="text/css">
          #side_bar{
            background-color: whitesmoke;
            padding: 50px;
            width:300px;
            height: 450px;
          }
        </style>
  </head>
  <body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     <div class="container-fluid">
       <div class="navbar-header">
         <a class="navbar-brand" href="index.php">Library Management System</a>

       </div>
       <ul class="nav navbar-nav navbar-right">
         <li class="nav-item">
           <a class="nav-link" href="index.php">Admin Login</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="index.php">User Login</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="index.php">Register</a>
         </li>

       </ul>
     </div>
   </nav>
   <br>
   <span>
     <marquee>
       This is Library management System.Library opens at 8:00 AM and close at 8:PM
     </marquee>
   </span><br><br>
   <div class="row">
     <div class="col-md-3" id="side_bar">
       <h5>Library Timing</h5>
       <ul>
         <li>Opening Timing : 8:00 AM</li>
         <li>Clossing Timing : 8:00 PM</li>
         <li>Sunday Closed</li>
       </ul>
       <h5>Library Services</h5>
       <ul>
         <li>Academic Books</li>
         <li>Examination Papers</li>
         <li>Literature Books</li>
         <li>Reading Hall</li>
         <li>E-Books</li>
         <li>Free Wifi</li>
       </ul>
     </div>
     <div class="col-md-8" id="main_content">
        <center>
          <h3>User Registration Form</h3>
        </center>
        <form action="register.php" method="post">
          <div class="form-group">
            <label for="name">Full Name:</label>
            <input type="text" name="name" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="name">Email ID:</label>
            <input type="text" name="email" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="name">Password:</label>
            <input type="text" name="password" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="name">Mobile No:</label>
            <input type="text" name="mobile" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="name">Address:</label>
            <textarea name="address" rows="3" cols="40" class="form-control"></textarea>
          </div>
          <button type="submit" name="button" class="btn btn-primary">Register</button>
        </form>

     </div>
   </div>




  </body>
</html>
