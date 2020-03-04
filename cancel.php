<?php $ptitle='Cancel'; include'modules/_head.php'; ?>
<?php include'modules/_header.php'; ?>
<?php include'modules/_nav.php'; ?>

<div class="cancelPage">
    <img src="images/cancel-pngrepo-com.png" alt="cancelMark" >
    <h2>Your Transaction has been cancelled!</h2>
    <p>Click ok to go back to homepage.</p>    
    <form>
    <input type="button" value="OK" onclick="window.location.href='index.php'" />
    </form>
</div>

 <?php include'modules/_footer.php'; ?>