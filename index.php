<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'BS_AOS_link.php' ?>
    <!--CSS stylesheet link-->
    <style>
    <?php include 'index_style.css' ?>
    </style>
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="customers.php">Customers</a>
                    <a class="nav-link" href="transactions.php">Transactions</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container1">
        <div class="wel">Welcome</div>
        <div class="container2 text-center">
            <a href="customers.php">
                <button type="button" class="btn btn-primary" id="b1">View All Customers</button>
            </a>
        </div>
    </div>
</body>
</html>
<?php include 'connection.php' ?>