{include file='templates/header.tpl'}
<link href="css/home.css" rel="stylesheet">

<div class="data-container">
    {foreach from=$dataMedico item=$dm}
    <img  class="img-detalle" src="templates\img\medico.png"/>
        <div class="data-medico">
        <h1 class="medico-nombre">{$dm->nombre} {$dm->apellido}</h1>
        <h2 class="medico-os"><u>Atiende con:</u> {$dm->obra_social}</h2>
        <h2 class="medico-especialidad"><u>Especialidad:</u> {$dm->especialidad}</h2>
        </div>
    {/foreach}

</div>

<a href="agendaMedico"><button class="btn">Visulizar turno</button></a>



{include file='templates/footer.tpl'}