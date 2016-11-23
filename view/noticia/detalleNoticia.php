<?php

include "view/includes/head.php";
include "view/includes/menu.php";

?>
<article>
	<h1> <?php echo $noticia['subtitulo']?></h1>
	<p> <?php echo $noticia['descripcion']?></p>
	<img src="/go.es/view/imagenes/<?php echo $noticia['imagen']?>">

</article>

