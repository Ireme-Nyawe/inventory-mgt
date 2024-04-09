<?php
session_start();
require("../connection.php");
if(!isset($_SESSION['user'])){
header("location:../login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <div class="menu">
    <ul>
        <li>
            <a href="add-employee.php">Add Employee</a>
        </li>
        <li>
            <a href="report.php">Report</a>
        </li>
        <li>
            <a href="../logout.php">Logout</a>
        </li>
    </ul>
   </div>
   <div class="display-table">
    <?php
    $query="SELECT * from stock";
    ?>
    <table border="1" width="100%">
        <tr>
            <th colspan="100">
                <span>Available Stock</span>
                <button>Generate Report-pdf</button>
        </th>
    </tr>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total-Price</th>
    </tr>
    <?php
        $execute=mysqli_query($connect,$query);
        $no=1;
        $total_value=0;
        while($stock=mysqli_fetch_array($execute)){
            $total_price=$stock['price']*$stock['quantity'];
            ?>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $stock['name'];?></td>
                <td><?php echo $stock['price'];?> Rwf</td>
                <td><?php echo $stock['quantity'];?></td>
                <td><?php echo ($total_price);?> Rwf</td>
            </tr>
            <?php
            $total_value=$total_value+$total_price;
        }
        ?>
        <tr>
            <th colspan="3">total-Stock-Value</th>
            <th colspan="2"><?php echo $total_value;?> Rwf</th>
        </tr>
    </table>
   </div> 
</body>
</html>