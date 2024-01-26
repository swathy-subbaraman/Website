<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="PaymentGateway.css">
        <title>
            Donate for a cause
        </title>
    </head>
    <body style="background-image: url('cause.jpg');font-family: 'Roboto', sans-serif;">
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
        //echo "Connected Successfully";
        $sql="create TABLE tdetails(CID INT,OCCASION VARCHAR(40),CAUSE VARCHAR(40),AMOUNT VARCHAR(30),NAMEONC VARCHAR(50),CCNO VARCHAR(50))";
        $conn->query($sql);
        $sql="SELECT MAX(CID) from cdetails";
        $result=$conn->query($sql);
        $cno=mysqli_fetch_array($result)['MAX(CID)'];

        //capturing data from forms(CID INT,OCCASION VARCHAR(40),CAUSE VARCHAR(40),AMOUNT FLOAT,NAMEONC VARCHAR(50),CCNO INT)
        $occ = $cause =$amt="";
        $amterr="";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $occ = $_POST["occasion"];
            $cause = $_POST["cause"];
            $amt = $_POST["money"];
            if(empty($amt)) $amterr = "Amount required" ;

        }
        function text($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        //inserting records
        if ($amterr=="" and $cause!="")
        {
        $sql="insert into tdetails(CID,OCCASION,CAUSE,AMOUNT)  values ($cno,'$occ','$cause','$amt')";
        $conn->query($sql);
        }
        //Closing the statement
   mysqli_free_result($result);

   //Closing the connection
   mysqli_close($conn);
        //echo "Values Inserted Successfully In CDETAILS<br>";
?>
        
        <div class="parent">
            <div class="container" style="margin-top:5%;margin-left:35%;margin-right:35%;background: rgba(204, 204, 204, 0.75);">
            <h3>Donation details</h3>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        
        <b><label for="occasion">Enter occasion</label>
        <div class="custom-select" style="width:200px;">

        <select name="occasion" id="occasion">
          <option value="General">General</option>
          <option value="Birthday">Birthday</option>
          <option value="Anniversary">Anniversary</option>
          
        </select><br><br>
        </div>
        
        <label for="cause">Enter cause for donation:</label>

        <select name="cause" id="cause">
          <option value="Optional">Optional</option>
          <option value="Food">Food</option>
          <option value="Clothes">Clothes</option>
          <option value="Orphanage">Contribution to orphanage</option>
          <option value="Oldagehome">Contribution to old age home</option>
          <option value="Medicine">Medical needs for people</option>
          
        </select><br><br>

        <label for="money">Enter amount to donate:</label>
        <input type="text" name="money" id="money"><span class="error">* <?php echo $amterr?> </span><br><br>
        <input type="submit" value="Submit Details" class="btn">
        <input type="button" value="Next" class="btn" onclick="location.href='PGNew3.php'"></b>
        </div>
        
        </form>
        
    </body>
</html>