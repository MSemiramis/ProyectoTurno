{include file='templates/header.tpl'}
<link href="css/from.css" rel="stylesheet">

</head>

<div class="form-container">
    <h2>ALTA PACIENTE </h2>
   <form class="from-alta" method="POST" action="agregarPaciente">
        <div class="mb-3 mt-2">
            <label for="exampleFormControlInput1" class="form-label">DNI del paciente</label>
            <input type="text" class="form-control" name="dni" id="exampleFormControlInput1" placeholder="Ingrese su DNI">
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
            <input type="text" class="form-control" name="nro-afiliado" id="exampleFormControlInput1" placeholder="Ingrese su número de afiliado">
        </div>

        <button type="submit" class="btn btn-primary mb-3">Guardar</button>

    </form>
</div>

<img class="add-img" src="templates\img\user.png" />

{include file='templates/footer.tpl'}