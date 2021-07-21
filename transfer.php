<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <?php include 'BS_AOS_link.php' ?>
    <style>
        <?php include 'transfer_style.css' ?>
    </style>

</head>
<body>
    <?php
        include 'connection.php';
        $select= "select * from customers";
        $query = mysqli_query($con,$select);
        $sendbal=0;
        while($res = mysqli_fetch_array($query)){   
            if(isset($_GET['name']))
            {
                if($_GET['name']==$res['name'])
                {
                    $sendbal=$res['balance'];
                    ?>                
                    <div class="container mt-5 pt-5">
                        <form method="POST" action="../balance_transfer.php">
                            <fieldset>
                                <legend class="text-center">Trasnfer Funds</legend>
                                <div class="mb-3">
                                    <label for="TextInput" class="form-label">From</label>
                                    <input type="text" id="TextInput" class="form-control" name="sender" value="<?php echo $res['name']; ?>"readonly>
                                    <label for="TextInput1" class="form-label">Balance</label>
                                    <input type="text" id="TextInput1" class="form-control" name="sender_bal" value="<?php echo $res['balance']; ?>" readonly>
                                </div>
                                <?php
                                }}} 
                                ?>
                                <div class="mb-3">
                                    <label for="Select" class="form-label">To</label>
                                    <select id="Select" class="form-select" name="receiver">
                                        <?php
                                        $select= "select * from customers ";
                                        $query = mysqli_query($con,$select);
                                        while($res = mysqli_fetch_array($query)){
                                            if($res['name']!=$_GET['name']){
                                            ?>
                                            <option> <?php echo $res['name'] ; ?></option>
                                        <?php
                                        }}?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="TextInput"  class="form-label">Amount To Transfer</label>
                                    <input type="number" min=1 max='<?php echo $sendbal; ?>' id="TextInput" name="amount" class="form-control" placeholder="Enter Amount to Send" required>
                                </div>
                                <div class="container2 text-center">
                                <button type="submit" class="btn btn-primary ">Submit</button> 
                                </div>                 
                            </fieldset>
                        </form>
                    </div>
</body>
</html>