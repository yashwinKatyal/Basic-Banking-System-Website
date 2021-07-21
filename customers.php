<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'BS_AOS_link.php' ?>
    <!--CSS stylesheet link-->
    <style>
    <?php include 'customers_style.css' ?>
    </style>
</head>
<body>
  <div class="container1">
    <table class="table table-dark table-bordered mt-3 table-responsive">
      <h1 class="text-center">Customers</h1>
      <thead class="table-light">
        <th>ID</th>
        <th>NAME</th>
        <th>ACCOUNT NUMBER</th>
        <th>EMAIL ID</th>
        <th>MOBILE NUMBER</th>
        <th>BALANCE</th>
        <th>PROFILE</th>
      </thead>
      <tbody>
        <?php include 'connection.php';
        $select= "select * from customers";
        $query = mysqli_query($con,$select);
        while($res = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td>  <?php echo $res['id']; ?>  </td>
            <td>  <?php echo $res['name']; ?>  </td>
            <td>  <?php echo $res['account_no'];?>  </td>
            <td>  <?php echo $res['email']; ?>  </td>
            <td>  <?php echo $res['mobile']; ?>  </td>
            <td>  <?php echo $res['balance'];?>  </td>
            <td> <a href="profile.php/?id=<?php echo $res['id'];?>" class="btn btn-success ">View Customer</a>  </td>
        </tr>
        <?php
            }
        ?>
      </tbody>
    </table>
    <div class="container2 text-center">
      <a href="index.php">
        <button type="button" class="btn btn-primary btn-back" id="b1">Back</button>
      </a>
    </div>
  </div>
</body>
</html>

