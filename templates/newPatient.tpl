{include file='templates/header.tpl'}
<link href="css/formulario.css" rel="stylesheet">
</head>

   <h2>ALTA PACIENTE: </h2>

   <form class="from-new" method="POST" action="agregarPaciente2">
        <div class="mb-3 mt-2">
            <label for="exampleFormControlInput1" class="form-label">DNI del paciente</label>
            <input type="text" class="form-control" name="dni_paciente" id="exampleFormControlInput1" placeholder="Ingrese su DNI">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre del paciente</label>
            <input type="text" class="form-control" name="nombre" id="exampleFormControlInput1" placeholder="Ingrese su nombre">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1"  class="form-label">Apellido del paciente</label>
            <input type="text" class="form-control" name="apellido" id="exampleFormControlInput1" placeholder="Ingrese su apellido">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1"  class="form-label">Dirección del paciente</label>
            <input type="text" class="form-control" name="direccion" id="exampleFormControlInput1" placeholder="Ingrese su direccion">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1"  class="form-label">Teléfono del paciente</label>
            <input type="text" class="form-control" name="telefono" id="exampleFormControlInput1" placeholder="Ingrese su teléfono">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1"  class="form-label">Email del paciente</label>
            <input type="text" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Ingrese su email">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Obra social</label>
            <input type="text" class="form-control" name="obra-social" id="exampleFormControlInput1" placeholder="Ingrese la OS">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Número de afiliado</label>
            <input type="text" class="form-control" name="afiliado" id="exampleFormControlInput1" placeholder="Ingrese su número de afiliado">
        </div>

        <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Guardar</button>
        </div>


    </form>

    {include file='templates/footer.tpl'}