<h1 class="nombre-pagina" >Crear cuenta</h1>
<p class="descripcion-pagina">Llena el siguiente formulario para crear una cuenta</p>

<form class="formulario" method="POST" action="/crear-cuenta">
    <div class="campo">
        <label for = "nombre">Nombre</label>
        <input 
        type = "text"
        id = "nombre"
        mane = "nombre"
        placeholder = "Tu Nombre"
        />
    </div>
    <div class="campo">
        <label for = "apellido">Apellido</label>
        <input 
        type = "text"
        id = "apellido"
        mane = "apellido"
        placeholder = "Tu Apellido"
        />
    </div>
    <div class="campo">
        <label for = "telefono">Telefono</label>
        <input 
        type = "tel"
        id = "telefono"
        mane = "telefono"
        placeholder = "Tu telefono"
        />
    </div>
    <div class="campo">
        <label for = "email">E-mail</label>
        <input 
        type = "email"
        id = "email"
        mane = "email"
        placeholder = "Tu email"
        />
    </div>
    <div class="campo">
        <label for = "password">Password</label>
        <input 
        type = "password"
        id = "password"
        mane = "password"
        placeholder = "Tu password"
        />
    </div>

    <input type="submit" value="Crear Cuenta" class="boton">
</form>

<div class="acciones">
    <a href="/index.php">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/index.php/olvide">¿Olvidaste tu password?</a>

</div>
