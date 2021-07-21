<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <?php include 'BS_AOS_link.php' ?>
    <style>
        <?php include 'profile_style.css' ?>
    </style>
</head>
<body>
  <?php 
    include 'connection.php';
    $select= "select * from customers";
    $query = mysqli_query($con,$select);
    while($res = mysqli_fetch_array($query)){ 
      if(isset($_GET['id']))
      {
          if($_GET['id']==$res['id'])
          {
  ?>
            <div class="container1 col d-flex justify-content-center">
              <div class="card" style="width: 20rem;">
                <img src="../profileimg.png" class="card-img-top" alt="not">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Customer ID: <?php echo $res['id']; ?></li>
                    <li class="list-group-item">Name: <?php echo $res['name']; ?></li>
                    <li class="list-group-item">Account Number: <?php echo $res['account_no']; ?></li>
                    <li class="list-group-item">Email ID: <?php echo $res['email']; ?></li>
                    <li class="list-group-item">Mobile Number: <?php echo $res['mobile']; ?></li>
                    <li class="list-group-item">Balance: <?php echo $res['balance']; ?></li>
                </ul>
                <div class="card-body text-center">
                  <a href="../customers.php"> <button type="button" class="btn btn-primary btn1">Back</button></a>
                  <a href="../transfer.php/?name=<?php echo $res['name'];?>"> <button type="button" class="btn btn-primary">Transfer Money</button></a>
                </div>
              </div>
            </div>
            <?php
              }}}
            ?>
</body>
</html>