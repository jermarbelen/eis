<?php require_once('../Connections/connection.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO users_tb (user_id, username, password, email, group_id, firstname, middlename, lastname, address, birthdate, contactnumber, civilstatus, gender, image, office, aor, `section`, item, `position`, designation, salary_per_annum, division, esign_description, authorized_esign, details) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['user_id'], "text"),
                       GetSQLValueString($_POST['username'], "text"),
                       GetSQLValueString($_POST['password'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['group_id'], "text"),
                       GetSQLValueString($_POST['firstname'], "text"),
                       GetSQLValueString($_POST['middlename'], "text"),
                       GetSQLValueString($_POST['lastname'], "text"),
                       GetSQLValueString($_POST['address'], "text"),
                       GetSQLValueString($_POST['birthdate'], "text"),
                       GetSQLValueString($_POST['contactnumber'], "text"),
                       GetSQLValueString($_POST['civilstatus'], "text"),
                       GetSQLValueString($_POST['gender'], "text"),
                       GetSQLValueString($_POST['image'], "text"),
                       GetSQLValueString($_POST['office'], "text"),
                       GetSQLValueString($_POST['aor'], "text"),
                       GetSQLValueString($_POST['section'], "text"),
                       GetSQLValueString($_POST['item'], "text"),
                       GetSQLValueString($_POST['position'], "text"),
                       GetSQLValueString($_POST['designation'], "text"),
                       GetSQLValueString($_POST['salary_per_annum'], "text"),
                       GetSQLValueString($_POST['division'], "text"),
                       GetSQLValueString($_POST['esign_description'], "text"),
                       GetSQLValueString($_POST['authorized_esign'], "text"),
                       GetSQLValueString($_POST['details'], "text"));

  mysql_select_db($database_connection, $connection);
  $Result1 = mysql_query($insertSQL, $connection) or die(mysql_error());

  $insertGoTo = "confirmed.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<?php require_once('head.php'); ?>
<a href="timein.php"><input type="button" value="TIME-IN HERE" /></a>
<hr />
<h4>Registration Form</h4>
    <form method="post" name="form1" action="<?php echo $editFormAction; ?>" onsubmit="return confirm('Are you sure?')">
      <table align="center">
        <tr valign="baseline">
          <td nowrap align="right">TIN:</td>
          <td><input type="number" name="user_id" value="" placeholder="123-456-789-000" required></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Username:</td>
          <td><input type="text" name="username" value="" placeholder="fmlastname" required></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Password:</td>
          <td><input type="password" name="password" value="" required></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Repeat Password:</td>
          <td><input type="password" name="password2" value="" required></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Email Address:</td>
          <td><input type="email" name="email" value="" required></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Firstname:</td>
          <td><input type="text" name="firstname" value="" required></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Middlename:</td>
          <td><input type="text" name="middlename" value="" required></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Lastname:</td>
          <td><input type="text" name="lastname" value="" required></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Address:</td>
          <td><input type="text" name="address" value="" required></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Birthdate:</td>
          <td><input type="date" name="birthdate" value="1990-01-01" required></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Contact Number:</td>
          <td><input type="number" name="contactnumber" value="" required></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Civil Status:</td>
          <td><select name="civilstatus" required>
				<option value="">Please select option</option>
				<option value="Single">Single</option>
				<option value="Married">Married</option>
				<option value="Widow">Widow</option>
		</select></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Gender:</td>
          <td><select name="gender" required>
				<option value="">Please select option</option>
				<option value="Female">Female</option>
				<option value="Male">Male</option>
		</select></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Office:</td>
          <td>
<select name="office" value="" required />
<option value="">Please select option</option>
<option value="Central-Office">Central-Office</option>
<option value="Bureau">Bureau</option>
<option value="Regional-Office">Regional-Office</option>
<option value="PENRO">PENRO</option>
<option value="CENRO">CENRO</option>
<option value="PAMO">PAMO</option>
</select>
    </td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Area of Responsibility:</td>
      <td><select name="aor">
<option value="">Please select option</option>
<option value=""></option>
<option value="MIMAROPA-Region">Regional</option>
<option value="Marinduque">Marinduque</option>
<option value="Romblon">Romblon</option>
<optgroup label="Oriental-Mindoro">
	<option value="Oriental-Mindoro">PENR Office</option>
    <option value="Roxas-OrMin">Roxas</option>
    <option value="Socorro-OrMin">Socorro</option>
</optgroup>
<optgroup label="Occidental-Mindoro">
	<option value="Occidental-Mindoro">PENR Office</option>
	<option value="Sablayan-OcMin">Sablayan</option>
    <option value="San-Jose-OcMin">San Jose</option>
</optgroup>
<optgroup label="Palawan">
	<option value="Palawan">PENR Office</option>
    <option value="Brookes-Point-Palawan">Brookes-Point</option>
    <option value="Coron-Palawan">Coron</option>
    <option value="Puerto-Princesa-Palawan">Puerto-Princesa</option>
    <option value="Quezon-Palawan">Quezon-Palawan</option>
    <option value="Taytay-Palawan">Taytay</option>
    <option value="Roxas-Palawan">Roxas</option>
</optgroup>
</select>          
          </td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Division:</td>
          <td><select name="division" value="" required />
<option value="">Please select option</option>
<optgroup label="Central Office">
<option value="CO">CO</option>
</optgroup>                     
<optgroup label="Regional Office">
<option value="ORED">ORED</option>
<option value="NGP">NGP</option>
<option value="RSCIG">RSCIG</option>
<option value="ARDTS">ARDTS</option>
<option value="LPDD">LPDD</option>
<option value="SMD">SMD</option>
<option value="CDD">CDD</option>
<option value="ED">ED</option>
<option value="ARDMS">ARDMS</option>
<option value="LD">LD</option>
<option value="PMD">PMD</option>
<option value="AD">AD</option>
<option value="FD">FD</option>
</optgroup>
<optgroup label="Bureau">
<option value="MGB">MGB</option>
<option value="EMB">EMB</option>
</optgroup>
<optgroup label="PENRO">
<option value="OP">OP</option>
<option value="TSD">TSD</option>
<option value="MSD">MSD</option>
</optgroup>
<optgroup label="CENRO">
<option value="OC">OC</option>
<option value="CENRO">CENRO</option>
</optgroup>
<optgroup label="Protected Area">
<option value="PAMO">PAMO</option>
</optgroup>
<option value="OTHERS">Others</option>
</select></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Section:</td>
          <td><input type="text" name="section" value="" max="5" placeholder="ICT, GSS, MES, ETC" required></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Item No.:</td>
          <td><input type="text" name="item" value="" required></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Position:</td>
          <td><input type="text" name="position" value="" required></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Designation:</td>
          <td><select name="designation" required>
				<option value="">Please select option</option>
				<option value="Head-of-office">Head of office</option>
				<option value="Chief">Division Chief</option>
                <option value="Section-Chief">Section Chief</option>
				<option value="NA">NA</option>
				<option value="Job-Order">Job Order</option>
		</select></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">SG:</td>
          <td><input type="number" name="salary_per_annum" value="" placeholder="Salary per Annum for COS" required></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Details:</td>
          <td><input type="text" name="details" value=""></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">&nbsp;</td>
          <td><input type="submit" value="Register"></td>
        </tr>
      </table>
      <input type="hidden" name="group_id" value="2">
      <input type="hidden" name="esign_description" value="">
      <input type="hidden" name="image" value="	../eis/upload/logo3.jpg">
      <input type="hidden" name="authorized_esign" value="<?php echo $_GET['image'];?>">
      <input type="hidden" name="MM_insert" value="form1">
    </form>
<?php require_once('footer.php'); ?>