<html>
<head>
   <link rel="stylesheet" type="text/css" href="sam.css">

<script>
function clr()
{document.getElementById("NAME").value="";
document.getElementById("PASSWORD").value="";
}
</script>
</head>



<body>


<div id="head">
<div class="e">
<img src="i.png">
</div>

<div class="w">
<h1>WELCOME</h1>

</div>

</div>



<div class="nav">
<ul>
<li><a href="sam.php">HOME</a></li>
<li><a href="details.php">DETAILS</a></li>
<li><a href="potos.php">POTOS</a></li>
<li><a href="signin.php">SIGN-IN</a></li>
<li><a href="contact.php">CONTACT</a></li>
</ul>

</div>



<div class="center">

<h1> NEW USER REGISTRY </h1>

<fieldset id="si">

<legend>NEW USER</legend>
<form>
<table class="tab">
<tr>
<td>NAME</td>
<td><input type="text"></td>
<br>
<br>
</tr>
<tr>
<td>sex</td>
<td><input type="radio" name="sex">MALE<input type="radio">FEMALE</td>
</tr>
<tr>
<td>PASSWORD</td>
<td><input type="password"></td>
</tr>
<tr>
<td> CONFIRM PASSWORD</td>
<td><input type="password"></td>
</tr>
<tr>
<td>E-MAIL ID</td>
<td><input type="text"></td>
</tr>
<tr>
<td>SECURITY QUESTION</td>
<td><select>
<option>what is ur mom name</option>
<option>which is fav color</option>
<option>whic is ur fav book</option>
</select></td>
</tr>

<tr>
<td ><input type="button" value="submit"></td>
<td><button onclick="clr();">clear</button></td>
</tr>

<tr>
<td><a href="signin.php">ALREADY A USER</a></td>
</tr>
</table>
</form>


</fieldset>

</div>

<div id="foot">
<h1>thank you </h1>
</div>








</body>
</html>

