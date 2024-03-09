{include file='templates/header.tpl'}
<link href="css/patient.css" rel="stylesheet">

<div class="data-container">
{foreach from=$dataPaciente item=$dp}
    <img  class="img-medico-detalle" src="templates\img\people.jpg"/>
        <div class="data-Paciente">
        <h1 class="paciente-nombre">{$dp->nombre} {$dp->apellido}</h1>
        </div>
    {/foreach}
</div>

{include file='templates/footer.tpl'}