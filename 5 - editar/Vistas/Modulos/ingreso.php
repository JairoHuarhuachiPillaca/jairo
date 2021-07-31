<br> <!-- Vistas/Modulos/ingreso.php -->
<h1>INGRESAR</h1>

<form method="post" action="">
	<input type="text" placeholder="Usuario" name="usuarioI" required>
	<input type="password" placeholder="Contraseña" name="claveI" required>
	<input type="submit" value="Ingresar">
</form>


<h1>Mi Diario</h1>
      Iniciar sesión
      <form method="post" action=""> 
		Usuario  <input type="text" name="username" required>
		Password <input type="password" name="password" required>
				<input type="submit" value="INGRESAR">
      </form>
      <p>
      <a href='signup.php'>
      Registrarse</a>
      </p>

<?php
$ingreso1 = new AdminC();
$ingreso1->IngresoC1();

?>