{include file='templates/header.tpl'}
<link href="css/.css" rel="stylesheet">

<div class="medico-container">

    <h2>Turnos Asociados</h2>
    {if $turnos}
        {foreach from=$turnos item=$t}
            <div class="data-medico">
                <span class="detalle-turno">{$t->nombreApellido_paciente} {$t->fecha_turno} - {$t->detalle}</span>
            </div>
        {/foreach}
    {else}
        <div class="detalle-turno">
            Este medico no posee turnos venideros.
        </div>
    {/if}

</div>

{include file='templates/footer.tpl'}
