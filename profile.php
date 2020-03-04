<?php $ptitle='Registration'; include'modules/_head.php'; ?>
<?php include'modules/_header.php'; ?>
<?php include'modules/_nav.php'; ?>

<?php
require('db.php');
//session_start();
$fname= $_SESSION['fname']; 
$lname=$_SESSION['lname'];
$sname=$_SESSION['sname'];
$sdob=$_SESSION['sdob'];
$email=$_SESSION['email'];
$phone=$_SESSION['phone'];
$ename= $_SESSION['ename'];
$ephone=$_SESSION['ephone'];
$uname = $_SESSION['uname'];
$pword=$_SESSION['pword'];
            
?>



<div class="profile">  
    <div class="registrationPage">
        <h2>Hi, <?php echo $fname; ?></h2>
        <p>This is your personal profile:</p>

        <p>Parent's Name: <?php echo $fname; echo $lname; ?> </p> <br>
        <p>Student's Name: <?php echo $fname; ?> </p> 
    
        <p>Student's Date of Birth: <?php echo $sdob; ?> </p> 
        <br>
        <p><strong>Contact Information</strong></p>
        <p> Phone: <?php echo $phone; ?> </p> 
        <p>Email Address: <?php echo $email; ?> </p> 
        <br>
        <p><strong>Emergency Contact</strong></p> 
        <p>Name: <?php echo $ename; ?> </p> 
        <p>Phone Number: <?php echo $ephone; ?> </p> 
        <br>
        <p><strong>Login Information</strong></p> 
        <p>Username <?php echo $uname;?> </p> 
        
         <button class="loginButton" onclick="window.location.href='logout.php'">Logout</button>
        

  </div>              
                
 <?php include'modules/_footer.php'; ?>