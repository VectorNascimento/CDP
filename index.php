<?php
$i = "home";
$pagina = array('home', 'sobre', 'voluntariar', 'doar');

if (isset($_GET["i"])){
	$i = addslashes($_GET["i"]);
}

include "php/header.php";

switch ($pagina) {

	case $i == $pagina[0]:
		include "php/home.php";
		break;

	case $i == $pagina[1]:
		include "php/sobre.php";
		break;

	case $i == $pagina[2]:
		include "php/voluntariar.php";
		break;

	case $i == $pagina[3]:
		include "php/doacao.php";
		break;

	default: include "php/home.php";
}

include "php/footer.php";