<?php date_default_timezone_set('Asia/Manila'); ?>
<?php require_once('head.php'); ?>      
	<form name="login" method="get" action="view_attendance.php" accept-charset="utf-8">
		<label for="usermail">DENR Item Number</label>
			<input type="text" name="user_id" placeholder="for J.O. use TIN#" required>
		<!--<label for="password">Pin/Password</label>
			<input type="pin" name="pin" placeholder="PIN" required>-->
			<input type="hidden" name="date" value="<?php echo date('Y-m-d') ?>">
          	<input type="submit" value="Continue">
	</form>
<p><b>Note:</b> On July 3, 2023, monday. We will only recognize TIN ID No on entry.</p>

<p>Click <a href="https://drive.google.com/drive/folders/1NJyJ9xiUV13s1kZCnKr-_96vkR76juY9?usp=sharing"target="_blank">here</a> for official list of downtime and advisories .</p>
<p>For questions, please read our <a href="https://drive.google.com/file/d/13mVfA9k2GrRRW9TDkiJUB2L51n5cbfiT/view?usp=sharing" target="_blank"><input type="button" value="USER MANUAL" /></a> or contact RICT unit</p>
<?php require_once('footer.php'); ?>
</body>
</html>