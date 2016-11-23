<?php
class Noticia{

	static function getAll(){

		$db=new mysqli("localhost","root","root","bbdd_pokemon");
		$consulta="SELECT * FROM noticia";
		$resultado=$db->query($consulta);
		return $resultado->fetch_all(MYSQLI_ASSOC);
	}
	static function insert($titulo, $texto, $fecha, $imagen){
		$db=new mysqli("localhost","root","root","bbdd_pokemon");
		$consulta="INSERT INTO noticia (subtitulo, descripcion,fecha_publicacion,imagen)
				   VALUES ('$titulo','$texto','$fecha','$imagen');";
		$resultado=$db->query($consulta);
		return $resultado;
	}

	static function getById($id){

		$bd=new mysqli('localhost','root','root','bbdd_pokemon');
		$consulta="SELECT * FROM noticia WHERE id_noticia=$id";
		$resultado=$bd->query($consulta);
		return $resultado->fetch_assoc();
	}



}//fin de la clase