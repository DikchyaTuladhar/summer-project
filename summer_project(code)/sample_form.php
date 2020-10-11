<?php
// define variables and set to empty values
$FnameErr = $MnameErr = $LnameErr = $AddressErr = $EmailErr =$PhoneErr="";
$f_name = $m_name = $l_name = $address = $email =$Phone = "";
$vaild=0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["f_name"])) {
    $FnameErr = "Valid first name  is required";
    $vaild=1;
  } else {
    $f_name = test_input($_POST["f_name"]);
    if (!preg_match("/^[a-zA-Z ]$/",$f_name)) {
      $FnameErr = "Only letters"; 
      $vaild=1;
    }
  }

  // if (empty($_POST["m_name"])) {
  //   $MnameErr = "Valid middle name  is required";
  //   $vaild=1;
  // } else {
  //   $m_name = test_input($_POST["m_name"]);
  //   if (!preg_match("/^[a-zA-Z ]{0,20}$/",$m_name)) {
  //     $MnameErr = "Only letters"; 
  //     $vaild=1;
  //   }
  // }

  if (empty($_POST["l_name"])) {
    $LnameErr = "Valid last name  is required";
    $vaild=1;
  } else {
    $l_name = test_input($_POST["l_name"]);
    if (!preg_match("/^[a-zA-Z ]$/",$l_name)) {
      $LnameErr = "Only letters"; 
      $vaild=1;
    }
  }

  if (empty($_POST["address"])) {
    $AddressErr = "Valid address is required";
    $vaild=1;
  } else {
    $address = test_input($_POST["address"]);
    if (!preg_match("/^[a-zA-Z ]$/",$address)) {
      $AddressErr = "Only letters"; 
      $vaild=1;
    }
  }
  

  // if (empty($_POST["Gender"])) {
  //   $GenderErr = "Gender is required";
  // } else {
  //   $Gender = test_input($_POST["Gender"]);
  // }
  if (empty($_POST["email"])) {
    $EmailErr = "Email is required";
    $vaild=1;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $EmailErr = "Invalid email format";
      $valid=1; 
    }
  }
  if (empty($_POST["phone"])) {
    $PhoneErr = "phone is required";
    $vaild=1;
  } else {
    $Phone = test_input($_POST["phone"]);
    if (!preg_match("/^[0-9]{7,10}$/",$Phone)) {
      $PhoneErr = "Only numbers and up to 10 allowed";
      $vaild=1; 
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if($vaild==0){
  // header("location:insert_customer_info.php");
  $con=mysqli_connect("localhost","root","","partyvenue_book");
  if(!$con){
    die("connection fail:".mysqli_connect_error());
  }
  $sql= "INSERT INTO customer (first_name,middle_name,last_name,phone,email,address) VALUES('$f_name','$m_name','$l_name','$Phone','$email','$address')";
    if(mysqli_query($con,$sql)){
      header("locaton:front_page.html");
    }
    else{
      echo "error on insert record:".mysqli_error($con);
    }
}
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css_doc\card.css">
<head>
<style type="text/css">
body {
margin: 0;
padding: 0;
background-size: cover;
font-family: Arial,Helvetica, sans-serif;
color:#5A6AAA;
}
input{
  padding: 5px;
  margin-bottom: 30px;
  width: 90%;
  box-sizing: border-box;
  box-shadow: none;
  outline: none;
  border: none;
  border-bottom: 2px solid #888888;

}
#submit{
  position: absolute;
  left: 500px;
  border-radius: 10px;
  height: 40px;
  width: 100px;
  cursor: pointer;
  background: #5A6AAA;
  margin-bottom: 0

}
#cancel{
  position: absolute;
  right: 500px;
  border-radius: 10px;
  height: 40px;
  width: 100px;
  cursor: pointer;
  background: #5A6AAA;
  margin-bottom: 0

}
#cancel:hover{
  background: #3A4885;
  box-shadow: 0 5px 8 px; 
}

#submit:hover{
  background: #3A4885;
  box-shadow: 0 5px 8 px; 
}
form div{
  position: relative;
}
form div label{
  position: absolute;
  top: 4px;
  pointer-events: none;
  left: 0;  
  right: 0;
  transition: .5s;
  color: #5A6AAA
}
input:focus ~label,#login_container input:valid ~label{
  left: 0px;
  right: 0px;
  font-weight: bold;
  font-size: 0px;
}

input:focus ,#login_container input:valid {
  border-bottom: 2px solid #3A4885;
}
#box1{
  height: 300px;
  width: 500px;
}
</style>
</head>
<body>
<center>
<div id="box1">
<h2>Customer Info Form</h2>
<p><span class="error">* required field</span></p>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  
  <br><br>
  <div>
    <input type="text" name="f_name">
    <label for="first_name">First Name</label>
    <!-- first name: <input type="text" name="f_name"> -->
    <span class="error">* <?php echo $FnameErr;?></span>
  </div>
  <br><br>
  <!-- <div>
    <input type="text" name="m_name">
    <label for="middle_name">Middle Name</label>
    middle name: <input type="text" name="m_name">
    <span class="error">* <?php echo $MnameErr;?></span>
  </div>
  <br><br> -->
  <div>
    <input type="text" name="l_name" >
    <label for="last_name">Last Name</label>
    <!-- last name: <input type="text" name="l_name"> -->
    <span class="error">* <?php echo $LnameErr;?></span>
  </div>
  <br><br>
  <div>
    <input type="text" name="address" >
    <label for="address">Address</label>
    <!-- address: <input type="text" name="address"> -->
    <span class="error">* <?php echo $AddressErr;?></span>
  </div>
  <br><br>
  <!-- House no: <input type="text" name="House">
  <span class="error">* <?php echo $HouseErr;?></span>
  <br><br>
  Name of head member: <input type="text" name="Name">
  <span class="error"><?php echo $NameErr;?></span>
  <br><br>
  
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $GenderErr;?></span>
  <br><br>
  No. of member: <input type="text" name="no">
  <span class="error"><?php echo $NoofmemberErr;?></span>
  <br><br> -->
  <div>
    <input type="text" name="email" >
    <label for="email">Email</label>
    <!-- Email: <input type="text" name="email"> -->
    <span class="error"><?php echo $EmailErr;?></span>
  </div>
  <br><br>
  <div>
    <input type="text" name="phone" >
    <label for="phone">Phone No</label>
    <!-- Phone: <input type="text" name="phone"> -->
    <span class="error"><?php echo $PhoneErr;?></span>
  </div>
  <br><br>
  

  <input type="submit" name="submit" value="Submit">  
</form>
</center>
 <!-- <?php
  $f_name=$_POST['f_name'];
  $m_name=$_POST['m_name'];
  $l_name=$_POST['l_name'];
  //$gender=$_POST['gender'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  $con=mysqli_connect("localhost","root","","partyvenue_book");
  if(!$con){
    die("connection fail:".mysqli_connect_error());
  }
  $sql= "INSERT INTO customer (first_name,middle_name,last_name,phone_no,email,address) VALUES('$f)name','$m_name','$l_name','$'phone','$email','$address')";
    if(mysqli_query($con,$sql)){
      header("locaton:front_page.html");
    }
    else{
      echo "error on insert record:".mysqli_error($con);
    }
?>
 -->
</body>
</html>