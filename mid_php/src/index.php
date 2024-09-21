<?php
echo '<img src="1.jpg" alt="" style="width: 500px; height: auto;" /><br>';
highlight_file('source.txt');
echo "<br><br>";

$flag = 'FLAGFLAGFLAG';
$kunkun = 'Give me the flag!';
$ii = 'No this. Get out!';
if(!isset($_GET['flag'])){
	exit($kunkun);
}

if($_GET['flag'] === 'flag'){
    exit($ii);
}

foreach ($_GET as $key => $value) {
	$$key = $$value;
}

echo 'the flag is : ' . $flag;

?>