<nav>
	<ul id="menu_principal">
		<li class="<?php if($activo == 'home'){ echo 'active'; }?>">
			<a href="/go.es"  >Home</a>
		</li>
		<li class="<?php if($activo == 'noticias'){ echo 'active';}?>">
			<a href="?p=noticia" >Noticias</a>
		</li>
		<li class="<?php if($activo == 'contacto'){ echo 'active';}?>">
			<a href="?p=contacto" >Contacto</a>
		</li>
		<li class="<?php if($activo == 'login'){ echo 'active';}?>">
			<a href="?p=login" >Login</a>
		</li>
	</ul>
</nav>