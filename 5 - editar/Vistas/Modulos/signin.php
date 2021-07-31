

<h1>Mi Diario</h1>
      Iniciar sesión
      <form method="post" action=""> 
		Usuario  <input type="text" name="username1" required>
		Password <input type="password" name="password1" required>
				<input type="submit" value="INGRESAR">
      </form>
      <p>
      <a href='signup.php'>
      Registrarse</a>
      </p>

<?php
$ingreso1 = new AdminC();
$ingreso1->entrar();

?>