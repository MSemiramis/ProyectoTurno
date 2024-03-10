{include file='templates/header.tpl'}
<link href="css/home.css" rel="stylesheet">

<div class="data-container">

        <a href="{BASE_URL}detallesCuentaPaciente/{$dataPaciente->dni}"><img class="img-medico" src="templates\img\people.png" /></a>
        <h2 class="paciente-title">{$dataPaciente->nombre} {$dataPaciente->apellido}</h2>

</div>


{include file='templates/footer.tpl'}