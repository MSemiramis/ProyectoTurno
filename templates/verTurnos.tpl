{include file='templates/header.tpl'}
<link href="css/.css" rel="stylesheet">

<div class="turno-container">

        <h2>Turnos Asociados</h2>
        {foreach from=$turnos item=$t}
            {if (isset($turnos))}
                <div>
                    <p class="detalle-turno">{$t->nombreApellido_medico} {$t->fecha_turno} - {$t->detalle}</p>
                </div>
            {else}
                <div class="detalle-turno">
                    El paciente no posee turnos venideros.
                </div>
            {/if}


        {/foreach}
    </div>

{include file='templates/footer.tpl'}