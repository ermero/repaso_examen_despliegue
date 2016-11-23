<?php
include "view/includes/head.php";
include "view/includes/menu.php";

?>
<h1> ÚLTIMAS NOTICIAS DE NUESTRA WEB </h1>
<div id="noticias-web">
<?php

for($i=0;$i<sizeof($noticias);$i++){
	$noticia = $noticias[$i];
	?>
	<article class="noticia">
		<h2><a href="?p=noticia&id=<?=$noticia['id_noticia']?>"><?=$noticia['subtitulo']?></a></h2>
		<img class="imagen" src="/go.es/view/imagenes/<?=$noticia['imagen']?>" />
		<p><?=$noticia['descripcion']?></p>
	</article>
	<?php
}
?>
</div>
<?php

include "view/includes/footer.php";