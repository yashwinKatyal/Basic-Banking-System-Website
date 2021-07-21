<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'BS_AOS_link.php' ?>
    <style>
    <?php include 'balance_transfer.css' ?>
    </style>
</head>
<body>
    <script>
        alert('Transfer Successful');
    </script>
    <?php 
        include 'connection.php';
        $amt= $_POST['amount'];
        $sender=$_POST['sender'];
        $receiver=$_POST['receiver'];
        $sender_bal=$_POST['sender_bal'];
        $select= "select * from customers where `name`='$receiver'";
        $query = mysqli_query($con,$select);
        while($res = mysqli_fetch_array($query)){
            $receiver_bal=$res['balance'];
            $received = "UPDATE customers SET balance='$receiver_bal' + '$amt' WHERE `name`='$receiver'";
            $sended = "UPDATE customers SET balance='$sender_bal' - '$amt' WHERE `name`='$sender'";
            $updated=mysqli_query($con,$received);
            $updated=mysqli_query($con,$sended);
            $insertion = "INSERT INTO transactions (`from`,`to`,`amount`) VALUES ('$sender','$receiver', '$amt')";
            $inserted=mysqli_query($con,$insertion);
        }
        ?>
    <div class="container1">
        <table class="table table-dark table-bordered mt-3">
        <h1 class="text-center">Customers</h1>
            <thead class="table-light">
                <th>ID</th>
                <th>NAME</th>
                <th>ACCOUNT NUMBER</th>
                <th>EMAIL ID</th>
                <th>MOBLIE NUMBER</th>
                <th>BALANCE</th>
                <th>PROFILE</th>
            </thead>
            <tbody>
                <?php
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
                    <td> <a href="profile.php/?id=<?php echo $res['id'];?>" class="btn btn-success">View Customer</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <div class="container2 text-center">
            <a href="transactions.php">
                <button type="button" class="btn btn-primary btn-transaction" id="b1">View Transactions</button>
            </a>
        </div>
    </div>
</body>
</html>