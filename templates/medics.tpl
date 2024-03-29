{include file='templates/header.tpl'}
<link href="css/medic.css" rel="stylesheet">

<div class="medico-container">

<h1 class="title">Listado de Médicos</h1>

{foreach from=$medics item=$medico}
    {if (isset($idSecretaria))}
        {if $medico->nro_secretaria != $idSecretaria}
        <a class="set-medico" href="{BASE_URL}asignarMedico/{$idSecretaria}/{$medico->nro_medico}"><div>
            <div class="data-medico">
                <span class="nombre-medico">{$medico->nombre_usuario} - {$medico->nombre} {$medico->apellido}</span>
                <a class="edit-medico" href=""><img src="templates/img/edit-icon.png" /></a>
                <a class="delete-medico" href="{BASE_URL}eliminarMedico/{$medico->nro_medico}">X</a>
            </div>
        </a>
        {/if}
    {/if}
    {if (!isset($idSecretaria))}
        <div class="data-medico">
            <span class="nombre-medico">{$medico->nombre_usuario} - {$medico->nombre} {$medico->apellido}</span>
            <a class="edit-medico" href=""><img src="templates/img/edit-icon.png" /></a>
            <a class="delete-medico" href="{BASE_URL}eliminarMedico/{$medico->nro_medico}">X</a>
        </div>

        <a class="btn btn-primary btn-asignar-secretaria" href="{BASE_URL}secretarias" role="button">ASIGNAR SECRETARIA</a>
    {/if}

{/foreach}
</div>

    <a class="btn btn-primary btn-agregar-medico" href="{BASE_URL}nuevoMedico" role="button"><img class="img-btn" src="templates/img/plus-icon.png"/>AGREGAR MÉDICO</a>
</div>



{include file='templates/footer.tpl'}