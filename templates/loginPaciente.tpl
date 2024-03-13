{include file='templates/header.tpl'}
<link href="css/login.css" rel="stylesheet">

<div class="form-container">
    <form class="login-form" method="POST" action="loginPatient">

        <input type="text" class="username" name="dni" placeholder="Número de dni" required></input>

        <button type="submit" class="btn-submit">Ingresar</button>

        {if isset($error) && $error}
            <div class="alert alert-danger mt-1">
                {$error}
            </div>
        {/if}

    </form>

    <a href="nuevoPaciente"><button class="btn-registrar">Crear cuenta</button></a>
</div>

<img class="login-img" src="templates\img\login-img.png" />

{include file='templates/footer.tpl'}