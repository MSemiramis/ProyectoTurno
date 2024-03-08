{include file='templates/header.tpl'}
<link href="css/secretaries.css" rel="stylesheet">

<h1 class="title">Listado de secretarias</h1>

{foreach from=$secretaries item=$secretaria}
    <a href="secretaria/{$secretaria->nro_secretaria}"> <div>
        <div class="data-secretaria">
            <span class="nombre-secretaria">{$secretaria->nombre} {$secretaria->apellido}</span>
            <a class="edit-secretaria" href=""><img src="templates/img/edit-icon.png" /></a>
            <a class="delete-secretaria" href="{BASE_URL}eliminarSecretaria/{$secretaria->nro_secretaria}" >X</a>
        </div>
    </div>
    </a>
{/foreach}


<button class="agregar-secretaria"><a class="go-asignar-medico" href="{BASE_URL}nuevaSecretaria"><img src="templates/img/plus-icon.png"/>AGREGAR SECRETARIA</button>
{include file='templates/footer.tpl'} 
