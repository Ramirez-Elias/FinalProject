<?php $ptitle='Registration'; include'modules/_head.php'; ?>
<?php include'modules/_header.php'; ?>
<?php include'modules/_nav.php'; ?>

<?php
require('db.php');
//session_start();
// If form submitted, insert values into the database.
if (isset($_POST['email'])){
        // removes backslashes
 $email = stripslashes($_REQUEST['email']);
        //escapes special characters in a string
 $email = mysqli_real_escape_string($con,$username);
 
 //Checking is user existing in the database or not
        $query = "SELECT * FROM register WHERE email='$email' ";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result); 
        if($rows==1){
            
            $row = mysqli_fetch_assoc($result);
            $_SESSION['pword']=$row['pword'];
            
            //Send Email 
            $to = $email;
            $subject = "Your Password";
            $txt = $_SESSION['pword'];
            $headers = "From: Contact@cypresslittlefins.com";

            mail($to,$subject,$txt,$headers);
         
            // Redirect user to index.php
     header("Location: thanksEmail.php");
            
         }else{
 echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/><p>Click here to return to <a href='login.php'>Login page</a></p></div>";
 }
  }else{}
?>

    <div class="loginContainer">
        <form action="thanksEmail.php" method="post" name="login">
            <h2>Please enter your email address</h2>
    
            <input type="text" name="email" placeholder="email" required />
           
            <input name="submit" type="submit" value="Submit" />
        </form>
</div>
        
          <?php include'modules/_footer.php'; ?>