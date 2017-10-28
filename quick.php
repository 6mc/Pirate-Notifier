<?php 


$linka = 'http://arsivciamca.org/forum-7yuz';



$datb =file_get_contents($linka);



$titlu = explode('tid_', $datb);

$mitlu = explode('"><a href="', $titlu[1]);


echo $mitlu[0];

 ?>