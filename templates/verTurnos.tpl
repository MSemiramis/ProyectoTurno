{include file='templates/header.tpl'}
<link href="css/turnos.css" rel="stylesheet">

<div class="turno-container">
    <h2>Turnos Asociados</h2>
    {if $turnos}
        <table>
            <thead>
            <tr>
                <th>Médico</th>
                <th>Fecha - Hora</th>
                <th>Detalle</th>
            </tr>
            </thead>

            {foreach from=$turnos item=$t}
                <tr>
                    <td>{$t->nombreApellido_medico}</td>
                    <td>{$t->fecha_turno}</td>
                    <td>{$t->detalle}</td>
                </tr>
            {/foreach}

        </table>
    {else}
        <div class="detalle-turno">
            El paciente no posee turnos venideros.
        </div>
    {/if}
</div>

{include file='templates/footer.tpl'}
