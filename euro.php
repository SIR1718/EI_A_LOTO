<?php 
//$a = 5;

$keyJSON = file_get_contents('http://62.28.241.149/~pmoreira/KEYSERVER/KeyServerJSON.php');

$keyPHP = json_decode($keyJSON);

var_dump($keyJSON);
echo("<br/>");
var_dump($keyPHP);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Chave do Euromilhões</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="euro.css">

	<style type="text/css">
		
		/* body {background-color: pink;} */
		/* ul {background-color: skyblue;} */
	
	</style>
</head>

<body>

<h1>Chaves Ganhadoras</h1>
<h2>nota: 50% são para o prof.</h2>
<?php 
// $a = 20;
/*
for($i = 0; $i < $a ; $i++) {
	echo "<h3>"."este é o olá número ".$i." de um total de ".$a."</h3>";
}
*/
?>

<div>
<ul class="numbers">
<?php  

for ($i=0; $i < count($keyPHP->numbers); $i++) {
	echo "<li>".$keyPHP->numbers[$i]."</li>";
}

?>
</ul>
<ul class="stars">

<?php  

foreach ($keyPHP->stars as $star) {
	echo "<li>".$star."</li>";
}

?>
</ul>
</div>

<div>
<ul class="numbers">
	<!-- <li style="color:red;">3</li> -->
	<li>3</li>
	<li>5</li>
	<li>17</li>
	<li>24</li>
	<li>43</li>
</ul>
<ul class="stars">
	<li>4</li>
	<li>8</li>
</ul>
</div>

</body>

</html>