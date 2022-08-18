<h1 class="nombre-pagina">Olvide Password</h1>
<p class="descipcion-pagina">Reestablece tu password escribiendo tu email a continuaicón </p>

<form class="formulario" action="/olvide" method="POST">
    <div class="campo">
        <label for = "email">E-mail</label>
        <input 
        type = "email"
        id = "email"
        mane = "email"
        placeholder = "Tu email"
        />
    </div>

    <input type="submit" class="boton" value="Enviar Instrucciones">
</form>

<div class="acciones">
    <a href="/index.php">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/index.php/crear-cuenta">¿Aún no tienes una cuenta? Crea una</a>

</div>