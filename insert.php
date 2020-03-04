<?php $ptitle='Thanks!'; include'modules/_head.php'; ?>
<?php include'modules/_header.php'; ?>
<?php include'modules/_nav.php'; ?>
<?php 
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$sname = $_POST['sname'];
//$sdob = $_POST['sdob'];
    //fix bug. Convert Date to SQL format
    $sdob1=$_POST['sdob'];
    $sdob=date('Y-m-d',strtotime($sdob1));    
    
$email = $_POST['email'];
$phone = $_POST['phone'];
$ename = $_POST['ename'];
$ephone = $_POST['ephone'];
$uname = $_POST['uname'];
$pword = $_POST['pword'];

if (!empty($fname) || !empty($lname) || !empty($sname) || !empty($sdob) || !empty($email) || !empty($phone) || !empty($ename) || !empty($ephone) || !empty($uname) || !empty($pword)){
    
    $host = "";
    $dbUsername = "";
    $dbPassword = "*";
    $dbname = "";
    

    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From register Where email = ? Limit 1";
     $INSERT = "INSERT Into register (fname, lname, sname, sdob, email, phone, ename, ephone, uname, pword) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssdsisiss", $fname, $lname, $sname, $sdob, $email, $phone, $ename, $ephone, $uname, $pword);
      $stmt->execute();
      header('Location: thanks.php');
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>

<div class="thankYou">
    <img src="images/Check-mark.png" alt="checkMark" height="200">
    <h2>Thanks for registering!</h2> 
    <p>Please click on Login to access your profile</p>
</div>

 <?php include'modules/_footer.php'; ?>