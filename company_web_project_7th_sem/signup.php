
<?php
session_start();
$name = $email = $phone = $password = $compassword ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["username"]);
    $email = test_input($_POST["Email"]);
    $phone = test_input($_POST["phone"]);
    $password = test_input($_POST["password"]);
    $compassword = test_input($_POST["compassword"]);

  }
$host = "localhost:3307";
$dbusername = "root";
$dbpassword = "";
$dbname = "company";
$link =  new mysqli();
$conn = @mysqli_connect($host, $dbusername, $dbpassword, $dbname);
if (!$conn){
  echo "unsuccess"; 
}
else{
 if (($name=="") and ($email=="") and ($phone=="") and ($password=="")and ($compassword=="")) {
        echo "<script type='text/javascript'>alert('all fields are requried');
     window.location.href='signup.html';</script>";
   }

   elseif (($name=="")||($email=="")||($phone=="")||($password=="")||($compassword=="")) {
        echo "<script type='text/javascript'>alert('one or more fields are missing please Fill the form agian..');
     window.location.href='signup.html';</script>";
   }
    elseif($password!=$compassword)
  {
    echo "<script>alert('password mismatch please Fill the form agian.. ');
     window.location.href='signup.html';</script>";
  }
  else
  {
    $resultname=$conn->query("SELECT * FROM data WHERE name='$name'");
        $resultemail=$conn->query("SELECT * FROM data WHERE email='$email'");
                $resultphone=$conn->query("SELECT * FROM data WHERE phone='$phone'");

$res_u =$resultname;
    $res_e =$resultemail;
        $res_p =$resultphone;
if ((mysqli_num_rows($res_u) and mysqli_num_rows($res_e) and mysqli_num_rows($res_p)) > 0) {
       echo "<script>alert('User already exist');window.location.href='login.html';</script>"; 
  }elseif (mysqli_num_rows($res_u) > 0) {
       echo "<script>alert('Name already exist');window.location.href='signup.html';</script>"; 
    }else if(mysqli_num_rows($res_e) > 0){
       echo "<script>alert('Email already exist');window.location.href='signup.html';</script>"; 
      }else if(mysqli_num_rows($res_p) > 0){
       echo "<script>alert('Mobile Number already exist');window.location.href='signup.html';</script>"; 
    }else{
  $rndno=rand(100000, 999999);//OTP generate
  $message = urlencode("otp number.".$rndno);
  $subject = "OTP";
  $txt = "OTP: ".$rndno."";
  $headers = "From: otp@jmtechs.com";
  mail($email,$subject,$txt,$headers);
  if(isset($_POST['Signupbtn']))
  {
  $_SESSION['name']=$name;
   $_SESSION['email']=$email;
  $_SESSION['phone']=$phone;
  $_SESSION['otp']=$rndno;
  $_SESSION['password']=$password;
  header( "Location: otp.php" );
} 
}
}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>