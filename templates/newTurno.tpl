include file='templates/header.tpl'}
<link href="css/from.css" rel="stylesheet">

</head>

<div class="form-container">
    <h2>Solicitar un turno </h2>
    <form class="from-alta" method="POST" action="nuevoTurno">
        <div class="mb-3 mt-2">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" required><br><br>
        </div>

        <div class="mb-3">
            <label for="hora">Hora:</label>
            <input type="time" id="hora" name="hora" required><br><br>
        </div>




        <button type="submit" class="btn btn-primary mb-3">Guardar</button>

    </form>
</div>


{include file='templates/footer.tpl'}