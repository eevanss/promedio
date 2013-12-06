<?php
$i=0;
$cont=0;
$cal= array(90,100,50,70,75,85,69);
echo"PROMEDIO";
echo "<br>";
foreach($cal as $cal){
		$i++;
	$cont=$cont+$cal;

echo "la calificacion ". $i." = ". $cal;
echo "<br>";
}

$prom=$cont/$i;
echo"El promedio total es :". $prom;


?>