<h1 class="nombre_pagina">Login</h1>
<p class="descripcion-pagina">Inicia sesión con tus datos</p>

<form class="formulario" method="POST" action="/">
    <div class="campo">
        <label for="email">Email</label>
        <input 
        type="email"
        id="email"
        placeholder="Tu Email"
        name="email"
        />
    </div>

    <div class="campo">
        <label for="password">Password</label>
        <input 
        type="password"
        id="password"
        placeholder="Tu Password"
        name="password"
        />
    </div>
    <input type="submit" class="boton" value="Iniciar Sesión">

</form>

<div class="acciones">
    <a href="index.php/crear-cuenta">¿Aún no tienes una cuenta? Crea una</a>
    <a href="index.php/olvide">¿Olvidaste tu password?</a>

</div>


