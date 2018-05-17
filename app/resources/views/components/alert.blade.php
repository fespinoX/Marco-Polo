<?php
// A un componente le podemos pasar cualquier variable
// que queramos, como en mi caso, $tipo.
?>
<div class="alert alert-{{ $tipo }}">
	<div class="alert-title">Notificación</div>
	<?php
	// La variable $slot va a contener automágicamente
	// el contenido del componente cuando lo llamen.
	?>
	{{ $slot }}
</div>