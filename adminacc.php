<html>
    <head>
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
        <title>Admin access</title>
        <link rel="stylesheet" href="PaymentGateway.css">
</head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <body style="background-image: url('https://media.istockphoto.com/photos/child-and-parent-hands-holding-money-jar-donation-saving-charity-picture-id1216694114?k=6&m=1216694114&s=170667a&w=0&h=yj39JjO0aWs82oaVKdbQEWKMhsQg9pDGZ1xi7jBWpPA=');">
    <span class="error">Admin Access Only!</span>
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
        $sql="SELECT * from donation order by type";
        $result=$conn->query($sql);
        
        echo "<table  border='3'>";
        echo "<caption style=background-colour:red'><b>Donation table</b></caption>";
        echo "<tr>";
        echo "<td>First Name</td><td>Last Name</td><td>Email</td><td>Mobile Number</td>
        <td>Street Address</td><td>City</td><td>Pincode</td><td>Donation Item</td><td>Quantity</td>
        <td>Type</td><td>Convenient Time Slot For Delivery</td><td>Convenient Day For Delivery</td>
        <td>Note</td>";
        echo "</tr>";
        if ($result->num_rows>0){
        while ($row=$result->fetch_assoc()){
                echo "<tr>";
                echo "<td>";
        echo $row['fname'];
        echo "</td>";
        
        echo "<td>";
        echo $row['lname'];
        echo "</td>";
        
        echo "<td>";
        echo $row['email'];
        echo "</td>";
        
        echo "<td>";
        echo $row['mob'];
        echo "</td>";
        
        echo "<td>";
        echo $row['sadd'];
        echo "</td>";
        
        echo "<td>";
        echo $row['city'];
        echo "</td>";
       
        echo "<td>";
        echo $row['zip'];
        echo "</td>";
        
        echo "<td>";
        echo $row['comm'];
        echo "</td>";
        
        echo "<td>";
        echo $row['qty'];
        echo "</td>";
        
        echo "<td>";
        echo $row['type'];
        echo "</td>";
        echo "<td>";
        echo $row['ctime'];
        echo "</td>";
        echo "<td>";
        echo $row['cday'];
        echo "</td>";
        echo "<td>";
        echo $row['note'];
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
    }
    

else{
    echo "No Results";
}

        echo "<table  border='3'>";
        echo "<caption style=background-colour:red'><b>Volunteer table</b></caption>";
        echo "<tr>";
        echo "<td>First Name</td><td>Email</td><td>Mobile Number</td><td>Flat Number</td>
        <td>Street Address</td><td>City</td><td>State</td><td>Pincode</td>
        <td>Type</td><td>Convenient Day For Delivery</td>
        <td>Note</td><td>Activities</td><td>Previous Experience</td>";
        echo "</tr>";
        echo "<br><br><br>";
        $sql="SELECT * from volunteer order by pref";
        $result=$conn->query($sql);
        
        if ($result->num_rows>0){
            while ($row=$result->fetch_assoc()){
                echo "<tr>";
                echo "<td>";
        echo $row['fname'];
        echo "</td>";
        
       
        
        echo "<td>";
        echo $row['email'];
        echo "</td>";
        
        echo "<td>";
        echo $row['mob'];
        echo "</td>";

        echo "<td>";
        echo $row['flatno'];
        echo "</td>";
        
        echo "<td>";
        echo $row['sadd'];
        echo "</td>";
        
        echo "<td>";
        echo $row['city'];
        echo "</td>";

        echo "<td>";
        echo $row['state'];
        echo "</td>";
       
        echo "<td>";
        echo $row['zip'];
        echo "</td>";
    
        
        echo "<td>";
        echo $row['type'];
        echo "</td>";
        echo "<td>";
       
        echo $row['cday'];
        echo "</td>";
        echo "<td>";

        echo $row['note'];
        echo "</td>";
        echo "<td>";
        echo $row['activities'];
        echo "</td>";
        echo "<td>";
        echo $row["pref"];
        echo "</td>";
        echo "</tr>";

        
    }
    echo "</table>";
    }
    

else{
    echo "No Results";
}
    
    ?>
    
                        