<?php $title = "User Register";
      $filename = "user_register.php";
      $date = "2017-09-08";
      $description = "null";
      $banner = "Register";
include "header.php";?>


<form>
    <hr/>
    <p>
      Enter your information to register.<br/>
    </p>
    <table border="0" cellpadding="10" style="margin: auto;">
    <tr>
    	<td><strong>User ID:</strong></td>
    	<td><input type="text" name="user_id" value="" size="20" /></td>
    </tr>
    <tr>
    	<td><strong>Password:</strong></td>
    	<td><input type="password" name="password" value="" size="20" /></td>
    </tr>
    <tr>
      <td><strong>E-Mail Address:</strong></td>
    	<td><input type="text" name="email_address" value="" size="20" /></td>
    </tr>
    <tr>
      <td><strong>First Name:</strong></td>
    	<td><input type="text" name="first_name" value="" size="20" /></td>
    </tr>
    <tr>
      <td><strong>Last Name:</strong></td>
    	<td><input type="text" name="last_name" value="" size="20" /></td>
    </tr>
    <tr>
      <td><strong>Date of Birth:</strong></td>
    	<td><input type="date" name="birth_date"></td>
    </tr>
    <tr>
    	<td colspan="2"><input type="submit" value = "Register"/></td>
    </tr>
    </table>
</form>

<?php include "footer.php";?>
