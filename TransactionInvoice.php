<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aashraya</title>
    <style>
        .btn {
  background-color: #0d1033;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 25%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}
        body{
            background-color: #F6F6F6; 
            margin: 0;
padding: 0;
}
h1,h2,h3,h4,h5,h6{
    margin: 0;
    padding: 0;
}
p{
    margin: 0;
    padding: 0;
}
.container{
    width: 80%;
    margin-right: auto;
    margin-left: auto;
}
.brand-section{
   background-color: #0d1033;
   padding: 10px 40px;
}
.logo{
    width: 50%;
}

.row{
    display: flex;
    flex-wrap: wrap;
}
.col-6{
    width: 50%;
    flex: 0 0 auto;
}
.text-white{
    color: #fff;
}
.company-details{
    float: right;
    text-align: right;
}
.body-section{
    padding: 16px;
    border: 1px solid gray;
}
.heading{
    font-size: 20px;
    margin-bottom: 08px;
}
.sub-heading{
    color: #262626;
    margin-bottom: 05px;
}
table{
    background-color: #fff;
    width: 100%;
    border-collapse: collapse;
}
table thead tr{
    border: 1px solid #111;
    background-color: #f2f2f2;
}
table td {
    vertical-align: middle !important;
    text-align: center;
}
table th, table td {
    padding-top: 08px;
    padding-bottom: 08px;
}
.table-bordered{
    box-shadow: 0px 0px 5px 0.5px gray;
}
.table-bordered td, .table-bordered th {
    border: 1px solid #dee2e6;
}
.text-right{
    text-align: end;
}
.w-20{
    width: 20%;
}
.float-right{
    float: right;
}
</style>
</head>
<body>
<?php
$servername="localhost";
$username="root";
$password="Sudeep@31";
//create connection
$conn=mysqli_connect($servername,$username,$password,"aashraya");
//Check connection
if ($conn->connect_error)
{
    die("Connection failed:".$conn->connect_error);
}
$sql="SELECT MAX(CID) from cdetails";
$result=$conn->query($sql);
$cno=mysqli_fetch_array($result)['MAX(CID)'];

$sql="SELECT cid,cname,caddress,cnumber,ccity,cstate,pincode from cdetails where cid=$cno";
$result=$conn->query($sql);
if ($result->num_rows>0){
    while ($row=$result->fetch_assoc()){
        $cid =$row['cid'];
        $cname=$row['cname'];
        $caddress=$row['caddress'];
        $cnumber=$row['cnumber'];
        $ccity=$row['ccity'];
        $cstate=$row['cstate'];
        $pincode=$row['pincode'];
    }
}
    $sql="SELECT cause,occasion,amount from tdetails where cid=$cno";
    $result=$conn->query($sql);
    if ($result->num_rows>0){
        while ($row=$result->fetch_assoc()){
            $cause =$row['cause'];
            $occasion=$row['occasion'];
            $amount=$row['amount'];
        }
    }
    ?>




<div class="container">
<div class="brand-section">
    <div class="row">
        <div class="col-6">
            <h1 class="text-white">Aashraya Foundation</h1>
        </div>
        <div class="col-6">
            <div class="company-details">
                <p class="text-white">Aashraya Foundation</p>
                <p class="text-white">12,T.Nagar,Chennai-600017</p>
                <p class="text-white">+91 9095166777</p>
            </div>
        </div>
    </div>
</div>

<div class="body-section">
    <div class="row">
        <div class="col-6">
            <h2 class="heading">Invoice No.: <span><?php echo $cid?></span></h2>
            <p class="sub-heading">Order Date:<?php echo date("Y/m/d")?> </p>
            <p class="sub-heading">Email Address: customercare@aashmail.com </p>
        </div>
        <div class="col-6">
            <p class="sub-heading">Full Name:<span class="error"><?php echo $cname?></span>  </p>
            <p class="sub-heading">Address:<span class="error"><?php echo $caddress?></span>  </p>
            <p class="sub-heading">Phone Number:<span class="error"><?php echo $cnumber?></span> </p>
            <p class="sub-heading">City,State,Pincode:<span class="error"><?php echo "$ccity,$cstate,$pincode"?></span>  </p>
        </div>
    </div>
</div>

<div class="body-section">
    <h3 class="heading">Donation</h3>
    <br>
    <table class="table-bordered">
        <thead>
            <tr>
                <th>Donated Cause</th>
                <th class="w-20">Occasion</th>
                <th class="w-20">Amount Donated</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                        <td><?php echo $cause ?></td>
                        <td><?php echo $occasion ?></td>
                        <td><?php echo $amount ?></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-right">Total Amount Donated</td>
                        <td> <?php echo $amount ?></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <h3 class="heading">Payment Status: Paid</h3>
        </div>

        <div class="body-section">
            <p>&copy; Copyright 2022 - Aashraya Foundation. All rights reserved. 
            </p>
        </div>      
    </div>      
    <center>
    <p>Click the button to print/download invoice.</p>

    <button onclick="window.print()" class="btn">Print Transaction Receipt</button>
    </center>
</body>
</html>