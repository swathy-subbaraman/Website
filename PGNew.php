<html>
    <head>
        <title>Payment Gateway</title>
        <link rel="stylesheet" href="PaymentGateway.css">
</head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <body style="background-image: url('https://media.istockphoto.com/photos/child-and-parent-hands-holding-money-jar-donation-saving-charity-picture-id1216694114?k=6&m=1216694114&s=170667a&w=0&h=yj39JjO0aWs82oaVKdbQEWKMhsQg9pDGZ1xi7jBWpPA=');">
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
        //echo "Connected Successfully<BR>";
        //creation of tables
        /*$sql="create TABLE cdetails(CID INT PRIMARY KEY,CNAME VARCHAR(30),CEMAIL VARCHAR(30),CNUMBER VARCHAR(30),CADDRESS VARCHAR(50),CCITY VARCHAR(30),CSTATE VARCHAR(30),PINCODE VARCHAR(30))";
        $conn->query($sql);*/
        //echo "Tables Created Successfully<br>";
        
        //creating unique cid
        $sql="SELECT MAX(CID) from cdetails";
        $result=$conn->query($sql);
        if ($result->num_rows==NULL){
            $cno=1;
            }
        else{
            $cno=mysqli_fetch_array($result)['MAX(CID)']+1;
        }

        //capturing data from forms
        $fname = $email =$add= $mobile=$ci = $zip=$st="";
        $nameerr = $moberr = $mailerr =$adderr= $cierr = $sterr = $ziperr="";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $fname = text($_POST["firstname"]);
            $mobile = text($_POST["mob"]);
            $email = text($_POST["email"]);
            $ci = text($_POST["city"]);
            $st = text($_POST["state"]);
            $add= text($_POST["address"]);
            $zip= text($_POST["zip"]);
            if(empty($fname)) $nameerr = "Name required" ;
            else {
                if(!preg_match("/^[A-Z-]*$/i",$fname)) $nameerr = "Invalid name";
            }
            if(!(strlen($mobile)==10)) $moberr = "Mobile number should contain ten digits";
            else {  
                if(!preg_match("/^[0-9]/",$mobile)) $moberr = "Invalid mobile number";
            }
            if(empty($email)) $mailerr="Email required";
            else{
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)) $mailerr = "Invalid Email";
            }
            if(empty($ci)) $cierr = "City is required";
            if(empty($st)) $sterr = "State is required";
            if(empty($add))$adderr="Address is required";
            if(empty($zip))$ziperr="Pincode is required";
        }
        function text($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        //inserting records
        if ($nameerr =="" and $moberr =="" and $mailerr =="" and $adderr=="" and $cierr =="" and $sterr =="" and $ziperr=="" and $mobile!="")
        {
        $sql="insert into cdetails values ($cno,'$fname','$email','$mobile','$add','$ci','$st','$zip')";
        $conn->query($sql);}
        //Closing the statement
   //mysqli_free_result($result);

   //Closing the connection
   mysqli_close($conn);
        //echo "Values Inserted Successfully In CDETAILS<br>";
?>
      <div class="row">
        <div class="col-75">
          <div class="container" style="margin-left:35%;margin-right:35%;">
      <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="row">
          <div class="col-50">
            <h3>Enter Your Details</h3>
            <label for="fname"><i class="fa fa-user"></i><b>Full Name</b></label>
            <input type="text" id="fname" name="firstname" placeholder="Name"><span class="error">*<?php echo $nameerr?></span><br>
            <label for="email"><i class="fa fa-envelope"></i><b>Email</b></label>
            <input type="text" id="email" name="email" placeholder="name@example.com"><span class="error">*<?php echo $mailerr?></span><br>
            <label for="mobile"><i class="fa fa-envelope"></i><b>Mobile Number:</b></label>
            <input type="text" name="mob" placeholder="Mobile Number"><span class="error">*<?php echo $moberr?></span><br>
            <label for="adr"><i class="fa fa-address-card-o"></i><b>Address</b></label>
            <textarea class="ta" rows=5 cols=50 type="text" id="adr" name="address" placeholder="Address"></textarea><span class="error">*<?php echo $adderr?></span><br>
            <label for="city"><i class="fa fa-institution"></i><b>City</b></label>
            <input type="text" id="city" name="city" placeholder="New Delhi"><span class="error">*<?php echo $cierr?></span><br>
            
            <div class="row">
              <div class="col-50">
                <b><label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="UP"><span class="error">*<?php echo $sterr?></span><br>
              </div>
              <div class="col-50">
                <label for="zip">Pincode</label>
                <input type="text" id="zip" name="zip" placeholder="10001"><span class="error">*<?php echo $ziperr?></span><br>
                <input type="submit" value="Submit Details" class="btn">
                <input type="button" value="Next" class="btn" onclick="location.href='PGNew2.php'"></b>
              </div>
            </div>
          </div>
        </form>
        
</body>
</html>