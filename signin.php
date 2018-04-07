<html>
<head>
   <link rel="stylesheet" type="text/css" href="sam.css">
<script>
function clr()
{document.getElementById("USER-NAME").value="";
document.getElementById("PASSWORD").value="";
}
function log()
{
alert("NOT A USER");
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

<h1> SIGN-IN </h2>

<fieldset id="sign">

<legend>SIGN-IN</legend>
<form>
<table class="tab">
<tr>
<td>USER-NAME</td>
<td><input type="text"></td>
<br>
<br>
</tr>
<tr>
<td>PASSWORD</td>
<td><input type="password"></td>
</tr>
<tr>
<td><button onclick="log();">login</button></td>
<td><button onclick="clr();">clear</button></td>
</tr>
<tr>
<td><a href="#">forgot password?</a></td>
<td><a href="new.php">NEW USER REGISTRATIION</a></td>
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

