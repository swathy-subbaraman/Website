<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="C:\Users\CMO\Desktop\Html\W3.CSS">
 <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="C:\Users\CMO\Desktop\Project\Shy.css">
 <link rel="icon" type="image/x-icon" href="C:\xampp\htdocs\Project\logo.jpeg">
 <title>Aashraya: Donate Books!</title>

<h1 style="background-color:black">
<!--<img src="C:\Users\CMO\Downloads\WhatsApp-Video-2022-06-24-at-728.gif" width="150" height="150">
<br>
<img src="C:\Users\CMO\Downloads\Books.jpeg" width="100%">-->
<br>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin:0;
      font-size: 60px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      top:30px;
      }
      legend {
      padding: 10px;      
      font-family: Roboto, Arial, sans-serif;
      font-size: 18px;
      color: #fff;
      background-color: #1c87c9;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px #006622; 
      }
      .banner {
      position: relative;
      height: 250px;
      background-image: url("/uploads/media/default/0001/02/cc6bc584f236c7234947015b89151ab6d04c4cbf.jpeg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.4); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #006622;
      }
      .checkbox input[type=checkbox] {
      display:inline-block;
      height:15px;
      width:15px;
      margin-right:5px;
      vertical-align:text-top;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #006622;
      color: #006622;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      .week {
      display:flex;
      justfiy-content:space-between;
      }
      .colums {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap:wrap;
      }
      .colums div {
      width:48%;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #006622;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #006622;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #1c87c9;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #0692e8;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
    </style>
  </head>
  <body style="background-colour:black">
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
     //creation of table
    //$sql="create TABLE donation(fname VARCHAR(30),lname VARCHAR(30),email VARCHAR(30),mob VARCHAR(10),sadd VARCHAR(30),city VARCHAR(15),zip VARCHAR(7),comm VARCHAR(10),qty varchar(10), type VARCHAR(10),ctime varchar(20),cday varchar(20), note VARCHAR(100))";
    //$conn->query($sql);
    //echo "Tables Created Successfully<br>";
    $fname=$lname=$email=$mob=$sadd=$city=$zip=$comm=$qty=$typ=$time=$day=$note="";
    $fnameerr=$lnameerr=$mailerr=$moberr=$sadderr=$ziperr=$qtyerr="";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $fname = $_POST["fname"];
        $lname=$_POST["lname"];
        $email=$_POST["address"];
        $mobile = $_POST["phone"];
        $sadd = $_POST["sadd"];
        $city = $_POST["city"];
        $zip = $_POST["zip"];
        $comm=$_POST["comm"];
        $qty=$_POST["num"];
        $typ=$_POST["food"];
        $time=$_POST["time"];
        $day=$_POST["day"];
        $note=$_POST["note"];
            if(empty($fname)) $fnameerr = "First Name required" ;
            else {
                if(!preg_match("/^[A-Z-]*$/i",$fname)) $fnameerr = "Invalid first name";
            }
            if(empty($lname)) $lnameerr = "Last Name required" ;
            else {
                if(!preg_match("/^[A-Z-]*$/i",$lname)) $lnameerr = "Invalid last name";
            }
            if(empty($email)) $mailerr="Email required";
            else{
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)) $mailerr = "Invalid Email";
            }
            if(!(strlen($mobile)==10)) $moberr = "Mobile number should contain ten digits";
            else {  
                if(!preg_match("/^[0-9]/",$mobile)) $moberr = "Invalid mobile number";
            }
            if(empty($sadd)) $sadderr = "Street Address is required";
            if(empty($zip)) $ziperr = "Pincode is required";
            if(empty($qty)) $qtyerr = "Number of persons required";
            else {  
                if(!preg_match("/^[0-9]*$/i",$qtyerr)) $qtyerr = "Invalid quantity";
            }
        /*function text($data){
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
          }*/
        if ($fnameerr=="" and $lnameerr=="" and $mailerr=="" and $moberr=="" and $sadderr=="" and $ziperr=="" and $qtyerr=="" and $zip!=""){
        $sql="insert into donation(fname,lname,email,mob,sadd,city,zip,comm,qty,type,ctime,cday,note) values ('$fname','$lname','$email','$mobile','$sadd','$city','$zip','$comm','$qty','$typ','$time','$day','$note')";
        $conn->query($sql);
        $link="<script>location.href='http://localhost/Project/Thank_you.php'</script>";
        echo $link;
    }}
    ?>
  <br>
  
  <br>
  <form method="POST" style="background-color:black" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  <fieldset>
        <legend>Donation Form</legend>
        <div class="colums">
          <div class="item">
            <label for="fname">First Name<span class="error">*<?php echo $fnameerr?></span><br></label>
            <input id="fname" type="text" name="fname" />
          </div>
          <div class="item">
            <label for="lname"> Last Name<span class="error">*<?php echo $lnameerr?></span><br></label>
            <input id="lname" type="text" name="lname" />
          </div>
          <div class="item">
            <label for="address">Email Address<span class="error">*<?php echo $mailerr?></span><br></label>
            <input id="address" type="text"   name="address" />
          </div>
          <div class="item">
            <label for="phone">Phone Number<span class="error">*<?php echo $moberr?></span><br></label>
            <input id="phone" type="tel"   name="phone"/>
          </div>
          <div class="item">
            <label for="saddress">Street Address<span class="error">*<?php echo $sadderr?></span><br></label>
            <input id="saddress" type="text"   name="sadd" />
          </div>
          <div class="item">
            <label for="city">City</label>
			<select name="city">
			<option value="Chennai">Chennai<option>
			<option value="Bengaluru">Bengaluru<option>
			<option value="Thiruvananthapuram">Thiruvananthapuram<option>
			<option value="Hyderabad">Hyderabad<option>
			<option value="Mumbai">Mumbai<option>
			<option value="Panaji">Panaji<option>
			<option value="Delhi">Delhi<option>
			<option value="Tirupati">Tirupati<option>
			<option value="Chandigarh">Chandigarh<option>
			<option value="Bhopal">Bhopal<option>
			</select>
          </div>
          <div class="item">
            <label for="zip">Zip/Postal Code<span class="error">*<?php echo $ziperr?></span><br></label>
            <input id="zip" type="text"   name="zip" />
            <br>
      <br/>
	  </fieldset>
      <fieldset>
      <legend>Donation Details</legend>
      <div class="colums">
      </div>
	  <hr>
	  <p>All set!</p>
	  <p>And now can you tell us, more information about your book donation?</p>
	    <div class="item">
            <label for="zip">Number of books you would like to offer (Minimum quantity: 3 no.s)</label>
            <input id="num" type="number"   name="num" />
          </div>
		  <table>
	  <div class="item">
          <tr><td>  <label for="food">Type Of Book:</label>
			<select name="food">
			<option value="Science">Science<option>
			<option value="Maths">Mathematics<option>
			<option value="Engineering">Engineering<option>
			<option value="Literature">Literature<option>
			<option value="School">School Books<option>
			<option value="Others">Others<option>
	</select></td></tr>
	<div class="item">
         <tr><td><label for="food">Collection Time:</label></td>
			<td><select name="time">
			<option value="10:00am-12:30pm">10:00am-12:30pm<option>
			<option value="12:30pm-02:30pm">12:30pm-02:30pm<option>
			<option value="02:30pm-05:00pm">02:30pm-05:00pm<option>
			<option value="05:00pm-06:30pm">05:00pm-06:30pm<option>
			<option value="06:30pm-09:00pm">06:30pm-09:00pm<option>
	</select></td></tr>
	<div class="item">
           <tr><td><label for="food">Convenient day:</label></td>
			<td><select name="day">
			<option value="Sunday">Sunday</option>
			<option value="Monday">Monday</option>
			<option value="Tuesday">Tuesday</option>
			<option value="Wednesday">Wednseday</option>
			<option value="Thursday">Thursday</option>
			<option value="Friday">Friday</option>
			<option value="Saturday">Saturday</option>
	</select></td></tr></table>
      <div class="item">
      <label for="donation">Any Special Notes for us? We are happy to hear from You!</label>
      <textarea id="donation" rows="3"></textarea>
      </div>
      </fieldset>
      <div class="btn-block">
      <button type="order" value="Book" onclick="window.open('file:///C:/Users/CMO/Desktop/Project/Thank%20you.html')">Confirm Donation</button>
	  <br>
      </div>
    </form>
    </div>
  </body>
</html>