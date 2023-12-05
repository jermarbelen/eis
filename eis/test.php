<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  
  <legend>Registration Form</legend>
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">ID:</td>
      <td><input type="text" name="user_id" value=""  placeholder="123-456-789-000" required /><br/>
      <i>TIN ID Number (eg: 123-456-789-000)</i>
      </td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Username:</td>
      <td><input type="text" name="username" value="" placeholder="nmlastname" required />
      </td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Password:</td>
      <td><input type="password" name="password" value=""  required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Repeat Password:</td>
      <td><input type="password" name="password2" value=""  required /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Email Address:</td>
      <td><input type="email" name="email" value="" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Firstname:</td>
      <td><input type="text" name="firstname" value="" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Middlename:</td>
      <td><input type="text" name="middlename" value="" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Lastname:</td>
      <td><input type="text" name="lastname" value="" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Address:</td>
      <td><input type="text" name="address" value="" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Birthdate:</td>
      <td><input type="date" name="birthdate" value="" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Contact Number:</td>
      <td><input type="text" name="contactnumber" value="" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Civil Status:</td>
      <td><select name="civilstatus">
      <option value="Single">Single</option>
      <option value="Married">Married</option>
      <option value="Widow">Widow</option>
      </select></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Sex:</td>
      <td><select name="gender">
      <option>Female</option>
      <option>Male</option>
      </select></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Item:</td>
      <td><input type="text" name="item" value=""/></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Designation:</td>
      <td><input type="text" name="designation" value=""/></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Salary Grade:</td>
      <td><input type="number" name="salary_per_annum" value="" min="1" max="33" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">SG-Step:</td>
      <td><input type="number" name="sg-step" value="" min="1" max="10" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Office:</td>
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
      <td nowrap="nowrap" align="right">AOR:</td>
      <td><select name="aor">
<option value="MIMAROPA-Region">MIMAROPA-Region</option>
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
</select></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Division:</td>
      <td>
<select name="division" value="" required />                     
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
<option value="MGB-MIMAROPA">MGB</option>
<option value="EMB-MIMAROPA">EMB</option>
<option value="">---</option>
<option value="OP">OP</option>
<option value="TSD">TSD</option>
<option value="MSD">MSD</option>
</select>
    </td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Section:</td>
      <td><input list="section" name="details" required>
<datalist id="section">
  <option value="ICT">
  <option value="PPS">
  <option value="MES">
  <option value="RSCIG">
  <option value="GSS">
</datalist>
      </td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Details</td>
      <td><input type="text" name="unit" value="" placeholder="" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="SAVE" /></td>
    </tr>
  </table>
  <input type="hidden" name="group_id" value="<?php echo $_GET['group'];?>" required readonly />
  <input type="hidden" name="MM_insert" value="form1" />
</form>