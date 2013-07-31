<html>
<head>
<title>Transaction Sample</title>
</head>
<body>
<?php
if(isset($_REQUEST["mb_cmid"]))
        {
		print_r($_REQUEST);	
		}
?>
<div align="center"><form action="https://www.mybillpayment.com/testing/validate.php"; method="post">
<input type="text" name="crefnum" maxlength="16" value="QQ0000000001">
<input type="text" name="camount" value="0.01">
<input type="text" name="cdesc" value="Testing the space">
<input type="hidden" name="cmobile" value="8669480" maxlength="8">
<input type="hidden" name="cmid" value="000003013012374" maxlength="15">
<input type="hidden" name="ccurrency" value="092">
<input type="hidden" name="cstatusurl" value="">
<input type="hidden" name="CardHolderName" value="Mr. Ben T. Singko">
<input type="hidden" name="EmailAdd" value="arman@threegmedia.com">
<input type="hidden" name="creturnurl" value="http://socialdeal.com.bn/sample.php";>
<input type="hidden" name="cpaymode" value ="55">
<input type="submit" value="Buy This">
</form>
</div>
</body>
</html>