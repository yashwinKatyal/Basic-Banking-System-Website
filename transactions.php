<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'BS_AOS_link.php' ?>
    <style>
    <?php include 'transactions_style.css' ?>
    </style>
</head>
<body>
    <div class="container1">
        <table class="table table-dark table-bordered mt-3">
            <h1 class="text-center">Transactions</h1>
            <thead class="table-light">
                <th>TO</th>
                <th>FROM</th>
                <th>AMOUNT</th>
                <th>DATE</th>
            </thead>
            <tbody>
                <?php include 'connection.php';
                    $select= "select * from transactions";
                    $query = mysqli_query($con,$select);
                    while($res = mysqli_fetch_array($query)){
                ?>
                    <tr>
                        <td>  <?php echo $res['to']; ?>  </td>
                        <td>  <?php echo $res['from']; ?>  </td>
                        <td>  <?php echo $res['amount'];?>  </td>
                        <td>  <?php echo $res['date']; ?>  </td>
                    </tr>
                    <?php
                        }
                    ?>
            </tbody>
        </table>
        <div class="container2 text-center">
            <a href="customers.php">
            <button type="button" class="btn btn-primary" id="b1">Back</button>
            </a>
            <a href="index.php">
            <button type="button" class="btn btn-primary" id="b2">Home</button>
            </a>
        </div>
    <div>
</body>
</html>

