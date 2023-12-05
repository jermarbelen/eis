<?php require_once('../Connections/connection.php'); ?>
<?php require_once('head.php'); ?>
<a href="timein.php"><input type="button" value="TIME-IN HERE" /></a>
<hr />
<h3>Registration for new users (1/3)</h3>
<form action="upload_file.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<table border="0">
  <tr valign="top">
    <td>Upload your e-signature first (example): <img src="upload/default.png" width="100px" /></td>
  </tr>
  <tr>
    <td><input name="ufile" type="file" id="ufile" required /></td>
  </tr>
  <tr>
    <td><font size="-1">*Please do not put special characters and spaces on file names</font></td>
  </tr>
  <tr>
    <td><input type="submit" name="Submit" value="Upload | Next" /></td>
  </tr>
</table>
</form>
<?php require_once('footer.php'); ?>