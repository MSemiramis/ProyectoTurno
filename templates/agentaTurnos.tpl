{include file='templates/header.tpl'}
<link href="css/from.css" rel="stylesheet">

</head>

<div class="form-container">
    <h2>Agendar turnos </h2>
    <form class="from-alta" method="POST" action="agendarTurno">
        <div class="mb-3 mt-2">
            <label for="fecha">Fecha:</label>
            <input type="datetime-local" id="fecha" name="fecha_turno" required><br><br>
        </div>
        <div class="mb-3">
            <label for="detalle">detalle:</label>
            <input type="text" id="detalle" name="detalle" required><br><br>
        </div>
        <select class="form-select mt-2 mb-4" name="nro_medico" aria-label="Default select example">
            <option selected>seleccione el medico </option>
            {foreach from=$medicos item=$medico}
                <option value={$medico->nro_medico}>{$medico->nombre}, {$medico->apellido}</option>
            {/foreach}

        </select>



{include file='templates/footer.tpl'}