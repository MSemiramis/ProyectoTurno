{include file='templates/header.tpl'}
<link href="css/home.css" rel="stylesheet">

<div class="data-container">
    {foreach from=$dataMedico item=$dm}
        <a href="{BASE_URL}detallesCuenta/{$dm->nro_medico}"><img class="img" src="templates\img\medico.png" /></a>
        <h2 class="title">{$dm->nombre} {$dm->apellido}</h2>
    {/foreach}

</div>



{include file='templates/footer.tpl'}