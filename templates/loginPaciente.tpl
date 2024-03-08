{include file='templates/header.tpl'}
<link href="css/login.css" rel="stylesheet">

<div class="form-container">
    <form class="login-form" method="POST" action="loginPaciente">
        <input type="text" class="username" name="dni" placeholder="Número de dni" required></input>
        <button type="submit" class="btn-submit">Ingresar</button>
        <button  class="btn-submit">Crear cuenta</button>

    </form>
</div>

<img class="login-img" src="templates\img\login-img.png" />

{include file='templates/footer.tpl'}