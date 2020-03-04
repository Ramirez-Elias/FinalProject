<?php $ptitle='Registration'; include'modules/_head.php'; ?>
<?php include'modules/_header.php'; ?>
<?php include'modules/_nav.php'; ?>

<div class="registrationPage">
<form id="regForm" action="insert.php" method="post" >
    <h2>Register:</h2>
    <!-- One "tab" for each step in the form: -->
    <div class="tab">Parent's Name:
        <p><input placeholder="First name..." type="text" oninput="this.className = ''" name="fname"></p>
        <p><input placeholder="Last name..." type="text"  oninput="this.className = ''" name="lname"></p>
    </div>
    <div class="tab">Student's Name:
        <p><input placeholder="First name..." type="text"  oninput="this.className = ''" name="sname"></p>
    </div>
    <div class="tab">Student's Date of Birth:
        <p><input placeholder="mm/dd/yy" type="date" oninput="this.className = ''" name="sdob"></p>
    </div>
    <div class="tab">Contact Info:
        <p><input placeholder="E-mail..." type="email" oninput="this.className = ''" name="email"></p>
        <p><input placeholder="Phone..." type="tel" oninput="this.className = ''" name="phone"></p>
    </div>
    <div class="tab">Emergency Contact:
        <p><input placeholder="Name..." type="text"  oninput="this.className = ''" name="ename"></p>
        <p><input placeholder="Phone..." type="tel" oninput="this.className = ''" name="ephone"></p>
  </div>
  <div class="tab">Login Info:
    <p><input placeholder="Username..." type="text"  oninput="this.className = ''" name="uname"></p>
    <p><input placeholder="Password..." type="password" oninput="this.className = ''" name="pword" type="password"></p>
  </div>
 
 <button type="submit">Create User</button>

</form>
</div>



























 <?php include'modules/_footer.php'; ?>