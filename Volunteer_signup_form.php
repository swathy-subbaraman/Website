<!DOCTYPE html>
<html>
  <head>
  <link rel="icon" type="image/x-icon" href="C:\xampp\htdocs\Project\logo.jpeg">
 <title>Join Aashraya : As a Volunteer</title>
    
    <link href="C:\Users\CMO\Desktop\Html\form.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" >
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label, p { 
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
      margin: 0;
      font-size: 40px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
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
      box-shadow: 0 0 8px  #669999; 
      }
      .banner {
      position: relative;
      height: 300px;
      background-image:url("https://www.southeastswimming.org/wp-content/uploads/2018/06/Raised-Hands-2-768x196.jpg");
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.3); 
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
      color:  #669999;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #669999;
      color: #669999;
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
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color:  #a3c2c2;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
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
      border: 2px solid  #669999;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #669999;
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
      background:  #669999;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #a3c2c2;
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
     //creation of table
    //$sql="create TABLE volunteer(fname VARCHAR(30),email VARCHAR(30),mob VARCHAR(10),flatno varchar(50),sadd VARCHAR(30),city VARCHAR(15),state VARCHAR(50),zip VARCHAR(50), type VARCHAR(50),cday varchar(20), note VARCHAR(100),activities varchar(50),pref varchar(5))";
    //$conn->query($sql);
    //echo "Tables Created Successfully<br>";
    $fname=$email=$mob=$house=$sadd=$city=$state=$zip=$typ=$day=$note=$activities=$pref="";
    $fnameerr=$mailerr=$moberr=$houseerr=$sadderr=$ziperr="";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $fname = $_POST["fname"]; 
        $email=$_POST["address"];
        $mobile = $_POST["phone"];
        $house=$_POST["house"];
        $sadd = $_POST["sadd"];
        $city = $_POST["city"];
        $state=$_POST["state"];
        $zip = $_POST["zip"];
        $typ=$_POST["food"];
        $day=$_POST["day"];
        $note=$_POST["note"];
        $activities=$_POST["activities"];
        $pref=$_POST["pref"];
            if(empty($fname)) $fnameerr = "First Name required" ;
            else {
                if(!preg_match("/^[A-Z-]*$/i",$fname)) $fnameerr = "Invalid first name";
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
            if(empty($house)) $houseerr = "Housenumber required";
        /*function text($data){
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
          }*/
        if ($fnameerr=="" and $houseerr=="" and $mailerr=="" and $moberr=="" and $sadderr=="" and $ziperr=="" and $zip!="")
        {
        //fname VARCHAR(30),email VARCHAR(30),mob VARCHAR(10),flatno varchar(50),sadd VARCHAR(30),city VARCHAR(15),state VARCHAR(50),zip VARCHAR(7), type VARCHAR(10),cday varchar(20), note VARCHAR(100),activities varchar(50),pref varchar(5)
        //
        $sql="insert into volunteer(fname,email,mob,flatno,sadd,city,state,zip,type,cday,note,activities,pref) values ('$fname','$email','$mobile','$house','$sadd','$city','$state','$zip','$typ','$day','$note','$activities','$pref')";
        $conn->query($sql);
        //echo "Inserted";
        $link="<script>location.href='http://localhost/Project/Thank_you.php'</script>";
        echo $link;
    }}
    ?>
    <div class="testbox">
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="banner">
          <h1>Volunteer Signup</h1>
        </div>
        <br/>
		<center>
        <p>Aashraya is seeking volunteers to serve our community. Fill in the information below to indicate how you would like to become involved.
		(Only for Indian citizens)</p></center>
        <br/>
        <div class="colums">
          <div class="item">
            <label for="name">Name<span class="error">*<?php echo $fnameerr?></span><br></label>
            <input id="name" type="text" name="fname"/>
          </div>
          <div class="item">
            <label for="eaddress">Email Address<span class="error">*<?php echo $mailerr?></span><br></label>
            <input id="eaddress" type="text"   name="address"/>
          </div>
          <div class="item">
            <label for="phone">Phone<span class="error">*<?php echo $moberr?></span><br></label>
            <input id="phone" type="text"   name="phone"/>
          </div>
		
		   <div class="item">
            <label for="street">Flat No./House No.<span class="error">*<?php echo $houseerr?></span><br></label>
            <input id="street" type="text"   name="house" />
          </div>
          <div class="item">
            <label for="street">Street<span class="error">*<?php echo $sadderr?></span><br></label>
            <input id="street" type="text"   name="sadd" />
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
          </select>
          <div class="item">
          <p>State:</p>
          <select name="state">
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Arunachal Pradeshv">Arunachal Pradesh</option>
            <option value="Assam">Assam</option>
			<option value="Bihar">Bihar</option>
			<option value="Chattisgarh">Chattisgarh</option>
			<option value="Goa">Goa</option>
			<option value="Gujarat">Gujarat</option>
			<option value="Haryana">Haryana</option>
			<option value="Himachal Pradesh">Himachal Pradesh</option>
			<option value="Jharkhand">Jharkhand</option>
			<option value="Karnataka">Karnataka</option>
			<option value="Kerala">Kerala</option>
			<option value="Madhya Pradesh">Madhya Pradesh</option>
			<option value="Maharashtra">Maharashtra</option>
			<option value="Tamil Nadu">Tamil Nadu</option>
          </select>
        </div>
          <div class="item">
            <label for="zip">Zip<span class="error">*<?php echo $sadderr?></span><br></label>
            <input id="zip" type="text"   name="zip" required/>
          </div>
        </div>
        <div class="question">
          <label>Include my contact information on lists distributed to other attendees.</label>
          <div class="question-answer">
            <div>
              <input type="radio" value="none" id="radio_1" name="info"/>
              <label for="radio_1" class="radio"><span>Yes</span></label>
            </div>
            <div>
              <input  type="radio" value="none" id="radio_2" name="info"/>
              <label for="radio_2" class="radio"><span>No</span></label>
            </div>
          </div>
        </div>
		
        <div class="item">
          <p>Meal Preference</p>
          <select name="food">
            <option value="Non-Vegetarian">Non-Vegetarian</option>
            <option value="Vegetarian">Vegetarian</option>
            <option value="None">None</option>
          </select>
        </div>
        <div class="item">
           <tr><td><label for="food">Convenient day:</label></td><br>
			<td><select name="day">
			<option value="Sunday">Sunday</option>
			<option value="Monday">Monday</option>
			<option value="Tuesday">Tuesday</option>
			<option value="Wednesday">Wednseday</option>
			<option value="Thursday">Thursday</option>
			<option value="Friday">Friday</option>
			<option value="Saturday">Saturday</option>
	</select></td></tr>
          </div>
          <div class="question">
            <label>Activities Attending:</label>
            <select name="activities">
            <option value="Renovation of Schools">Renovation of Schools</option>
			<option value="Distribution of books">Distribution of books</option>
			<option value="Awareness camps">Awareness camps</option>
			<option value="Donation drives">Donation drives</option>
			<option value="Developing Infrastructure">Developing Infrastructure</option>
    </select>
        </div>
        <div class="item">
          <label for="visit">Special Requirements</label>
          <textarea name="note" id="visit" rows="3"></textarea>
        </div>
        <div class="question">
          <label>Have you been a volunteer earlier?</label>
          <div class="item">
			<td><select name="pref">
			<option value="Yes">Yes</option>
			<option value="No">No</option>
	</select></td></tr>
        </div>
        <div class="btn-block">
          <button type="submit" href="/" onclick="windows.open('C:\Users\CMO\Downloads\Thank you.jpg')">Submit</button>
        </div>
      </form>
    </div>
  </body>
</html>