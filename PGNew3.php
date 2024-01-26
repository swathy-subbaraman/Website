<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Donate</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="PaymentGateway.css">
    
</head>
<body style="background-image: url('paymentbg.jpg');">
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
        //$sql="create TABLE tdetails(CID INT,OCCASION VARCHAR(40),CAUSE VARCHAR(40),AMOUNT VARCHAR(30),NAMEONC VARCHAR(50),CCNO VARCHAR(50))";
        //$conn->query($sql);
        $sql="SELECT MAX(CID) from tdetails";
        $result=$conn->query($sql);
        $cno=mysqli_fetch_array($result)['MAX(CID)'];

        //capturing data from forms(CID INT,OCCASION VARCHAR(40),CAUSE VARCHAR(40),AMOUNT FLOAT,NAMEONC VARCHAR(50),CCNO INT)
        $nameonc=$ccno=$exp=$cvv="";
        $nameerr=$ccerr=$experr=$cvverr="";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nameonc = $_POST["cname"];
            $ccno = $_POST["cardnumber"];
            $expmonth = $_POST["expmonth"];
            $cvv=$_POST["cvv"];
            if(empty($nameonc)) $nameerr = "Name required";
            if(empty($ccno)) $ccerr = "Credit card number required";
            else{
                if(strlen($ccno)!=16) $ccerr="Enter proper credit card number";
            }
            if(empty($expmonth)) $experr="Expiry month required";
            if(empty($cvv)) $cvverr="CVV required";
            else{
                if(strlen($cvv)!=3) $ccerr="Enter proper credit card number";
            }
        }
        function text($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        //inserting records
        if($nameerr=="" and $ccerr=="" and $experr=="" and $cvverr==""){
        $sql="update tdetails set NAMEONC='$nameonc',CCNO='$ccno' where CID=$cno";
        $conn->query($sql);}
        //Closing the statement
   mysqli_free_result($result);

   //Closing the connection
   mysqli_close($conn);
        //echo "Values Inserted Successfully In CDETAILS<br>";
?>
  
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
   
        <div class="container" style="margin-left:35%;margin-right:35%;">
          <h3>Payment</h3>
          <label for="fname"><b>Accepted Cards</b></label>
          <div class="icon-container">
            <i class="fa fa-cc-visa" style="color:navy;"></i>
            <i class="fa fa-cc-amex" style="color:blue;"></i>
            <i class="fa fa-cc-mastercard" style="color:red;"></i>
          </div>
          <label for="cname"><b>Name on Card</label></b>
          <input type="text" id="cname" name="cname" placeholder="John More Doe"><span class="error">*<?php echo $nameerr?></span><br>
          <label for="ccnum"><b>Credit card number</label></b>
          <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444"><span class="error">*<?php echo $ccerr?></span><br>
          <label for="expmonth"><b>Expiry Month</label></b>
          <input type="month" id="expmonth" name="expmonth" placeholder="25/01" width="50%"><span class="error">*<?php echo $experr?></span><br>
          <label for="cvv"><b>CVV</label></b>
          <input type="number" id="cvv" name="cvv" placeholder="352" width="50%"><span class="error">*<?php echo $cvverr?></span><br>
          <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI">
          </div>
          <div
    class="g-recaptcha"
    data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"
    data-callback="onRecaptchaSuccess"
    data-expired-callback="onRecaptchaResponseExpiry"
    data-error-callback="onRecaptchaError"
  >
      </label>
      <input type="submit" value="Submit Bank Details" class="btn">
      <input type="button" value="Pay" class="btn" onclick="location.href='TransactionInvoice.php'"></b>
    </form>
    <script src="https://www.google.com/recaptcha/api.js" async defer>
    </script>
    
  </div>
  </div>
</div>




</body>
</html>