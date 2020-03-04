<?php $ptitle='Contact us'; include'modules/_head.php'; ?>
<?php include'modules/_header.php'; ?>
<?php include'modules/_nav.php'; ?>

<div class="contactUs">
    <h2>Contact Us</h2>
    <p>You can call us at <strong>281.546.8940</strong> or send us a message below and we will get in contact with you as soon as possible.</p>

    <div class="contactUsForm">
        <form action="sendEmail.php" method="post" enctype="multipart/form-data" name="reportStorm" id="stormReporting">
            <fieldset>
                <legend><span>Personal Information</span></legend>
                <label><span>Full Name:</span><input name="fullname" type="text" value="" placeholder="Full Name" pattern="[a-zA-Z -._]{5,99}" required></label>
                <label><span>Email:</span><input name="email" type="email" value="" placeholder="someone@example.com" required></label>
                <label><span>Phone Number:</span><input name="phone" type="tel" value="" placeholder="1234567890" pattern="[0-9]{10,20}" required></label>
                <label><span>Write your message here:</span></label>
                <textarea name="comments"> 
                </textarea>
            </fieldset>      
            <input type="submit" value="Submit" class="submitButton">
            <input name="redirect" type="hidden" value="thanks.php">
        </form>
    </div>
</div>
 <?php include'modules/_footer.php'; ?>