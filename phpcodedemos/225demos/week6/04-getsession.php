<?php
session_start();
?>
<HTML>
 <HEAD>
  <TITLE> Get Session Info Demo </TITLE>
 </HEAD>

 <BODY bgcolor="<?php echo $_SESSION['theme']; ?>">
  <center><table bgcolor="white" cellpadding="10" border="0" width="75%" height="250">
    <tr>
	  <td align='center'><font size="+3"><b>Welcome, <?php echo $_SESSION['greeting'];?>!</b></font><br/><br/>
	  Your user name is:  <?php echo $_SESSION['username'];?><br/><br/>
	  Your password is:  <?php echo $_SESSION['password'];?><br/><br/>
 	  </td>
	</tr>
  </table></center>
 </BODY>
</HTML>