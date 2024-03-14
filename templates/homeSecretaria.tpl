{include file='templates/header.tpl'}
<link href="css/home.css" rel="stylesheet">

<div class="data-container">

    <a href="{BASE_URL}detallesCuentaSecretaria/{$dataSecretaria->nro_secretaria}"><img class="img-medico" src="templates\img\secretaria.jpg" /></a>
    <h2 class="paciente-title">{$dataSecretaria->nombre} {$dataSecretaria->apellido}</h2>

</div>


{include file='templates/footer.tpl'}