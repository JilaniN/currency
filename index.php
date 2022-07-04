<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Holidays currency planner</title>

	<link rel="stylesheet" href="style.css">

</head>

<body>

<form align="center" action="index.php" method="post">

<div id="box">
<h2><center>Currency Converter</center></h2>
<table>
	<tr>
	<td>
		Enter Amount:<input type="text" name="amount"><br>
	</td>
</tr>
<tr>
<td>
	<br><center>From:<select name='cur1'>
	 <option value="USD" >US Dollar(USD)</option>
	 <option value="BTC" selected>Bitcoin(BTC)</option>
	 <option value="EUR" >Euros(EUR)</option>
	 <option value="YUAN" >Yuan(YUAN)</option>
	 <option value="YEN" >Yen(YEN)</option>

	 </select>
</td>
</tr>
<tr>
	<td>
	<br><center>To:<select name='cur2'>
	 <option value="USD" >US Dollar(USD)</option>
	 <option value="BTC" >Bitcoin(BTC)</option>
	 <option value="EUR" selected>Euros(EUR)</option>
	 <option value="YUAN" >Renminbi(YUAN)</option>
	 <option value="YEN" >Yen(YEN)</option>
	
	</select>
</td>
</tr>
<tr>
<td><center><br>
<input type='submit' name='submit' value="Convert"></center>
</div>
<br>
</td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit'])){
	
$amount = $_POST['amount'];
$cur1 = $_POST['cur1'];
$cur2 = $_POST['cur2'];



// BTC => ALL
if($cur1=="BTC" AND $cur2=="USD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*19265.70 . "</center>";
}

if($cur1=="BTC" AND $cur2=="EUR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 18528.40 . "</center>";
}

if($cur1=="BTC" AND $cur2=="YUAN"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 129247.80 . "</center>";
}

if($cur1=="BTC" AND $cur2=="YEN"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 2608758.80 . "</center>";
}

// USD => ALL
if($cur1=="USD" AND $cur2=="BTC"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 0.000051 . "</center>";
}

if($cur1=="USD" AND $cur2=="EUR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.96  . "</center>";
}

if($cur1=="USD" AND $cur2=="YUAN"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*6.71  . "</center>";
}

if($cur1=="USD" AND $cur2=="YEN"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*135.37  . "</center>";
}

// EUR => ALL
if($cur1=="EUR" AND $cur2=="BTC"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.000054 . "</center>";
}

if($cur1=="EUR" AND $cur2=="USD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 1.04 . "</center>";
}

if($cur1=="EUR" AND $cur2=="YUAN"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 6.98 . "</center>";
}

if($cur1=="EUR" AND $cur2=="YEN"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 140.49 . "</center>";
}

// YUAN => ALL
if($cur1=="YUAN" AND $cur2=="BTC"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.0000076 . "</center>";
}

if($cur1=="YUAN" AND $cur2=="USD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 0.15 . "</center>";
}

if($cur1=="YUAN" AND $cur2=="EUR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 0.14 . "</center>";
}

if($cur1=="YUAN" AND $cur2=="YEN"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 20.18. "</center>";
}

// YEN => ALL
if($cur1=="YEN" AND $cur2=="BTC"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*0.00000000000000000001 . "</center>";
}

if($cur1=="YEN" AND $cur2=="USD"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 0.0074 . "</center>";
}

if($cur1=="YEN" AND $cur2=="EUR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 0.0071 . "</center>";
}

if($cur1=="YEN" AND $cur2=="YUAN"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 0.05 . "</center>";
}
}

?>


</body>
</html>

