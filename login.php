<?php $ptitle='Login'; include'modules/_head.php'; ?>
<?php include'modules/_header.php'; ?>
<?php include'modules/_nav.php'; ?>

<?php
require('db.php');
//session_start();
// If form submitted, insert values into the database.
if (isset($_POST['uname'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['uname']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['pword']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM register WHERE uname='$username'
AND pword='$password'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result); 
        if($rows==1){
            
            $row = mysqli_fetch_assoc($result);
            $_SESSION['fname']= $row['fname'];
            $_SESSION['lname']=$row['lname'];
            $_SESSION['sname']=$row['sname'];
            $_SESSION['sdob']=$row['sdob'];
            $_SESSION['email']=$row['email'];
            $_SESSION['phone']=$row['phone'];
            $_SESSION['ename']=$row['ename'];
            $_SESSION['ephone']=$row['ephone'];
            $_SESSION['uname']=$row['uname'];
            $_SESSION['pword']=$row['pword'];
            
            // Redirect user to index.php
     header("Location: profile.php");
            
         }else{
 echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/><p>Click here to return to <a href='login.php'>Login page</a></p></div>";
 }
    }else{
?>


    <div class="loginContainer">
        <form action="" method="post" name="login">
            <div class="imgcontainer">
                <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
            </div>
    
            <input type="text" name="uname" placeholder="Username" required />
            <input type="password" name="pword" placeholder="Password" required />
            <input name="submit" type="submit" value="Login" />
        </form>
        <div class="loginContainer">    
            <span class="psw">Forgot <a href="retrievePassword.php">password?</a></span>
            <span class="newUser">New User? <a href="registration.php">Click Here to Register</a></span>
        </div>
<?php } ?>

   <?php include'modules/_footer.php'; ?>

          

     