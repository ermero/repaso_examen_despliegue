<?php
require_once "model/noticia.class.php";
$titulo_pagina='Noticia';
$activo="noticia";



if(isset($_GET['id'])==true){
	$noticia=Noticia::getById($_GET['id']);
	include "view/noticia/detalleNoticia.php";
} else {
	//CUANDO MUESTRO TODAS LAS NOTICIAS
	$noticias = Noticia::getAll();
	include "view/noticia/index.php";
}












//PARA PRUEBAS
//Noticia::insert('Fiebre Pokémon en el Salón del Manga', 'Pokémon llegará a la feria, que se celebrará del sábado 29 de octubre al martes 1 de noviembre en Fira Montjuïc, con un espectacular balance de más de 275 millones de videojuegos vendidos en todo el mundo, 21,5 millones de cartas distribuidas en 74 países y una serie de animación de 18 temporadas.', date('Y-m-d'), 'noticia1.jpg');