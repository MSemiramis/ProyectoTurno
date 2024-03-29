{include file='templates/header.tpl'}
<link href="css/from.css" rel="stylesheet">
</head>


<div class="form-container">
    <h2>ALTA MEDICO</h2>
   <form class="from-alta" method="POST" action="agregarMedico">
        <div class="mb-3 mt-2">
            <label for="exampleFormControlInput1" class="form-label">Nombre de usuario</label>
            <input type="text" class="form-control" name="nombre_usuario" id="exampleFormControlInput1" placeholder="Ingrese el nombre de usuario">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="contrasenia" id="exampleFormControlInput1" placeholder="Ingrese la contraseña">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre del médico</label>
            <input type="text" class="form-control" name="nombre" id="exampleFormControlInput1" placeholder="Ingrese el nombre">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1"  class="form-label">Apellido</label>
            <input type="text" class="form-control" name="apellido" id="exampleFormControlInput1" placeholder="Ingrese el apellido">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Obra social</label>
            <input type="text" class="form-control" name="obra-social" id="exampleFormControlInput1" placeholder="Ingrese la OS">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Especialidad</label>
            <input type="text" class="form-control" name="especialidad" id="exampleFormControlInput1" placeholder="Ingrese su especialidad médica">
        </div>


        <select class="form-select mt-2 mb-4" name="nro_secretaria" aria-label="Default select example">
        <option selected>Elija la secretaria a asignar</option>
        {foreach from=$secretarias item=$secretaria}
            <option value={$secretaria->nro_secretaria}>{$secretaria->nombre}, {$secretaria->apellido}</option>
        {/foreach}
        </select>

        <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">AGREGAR MÉDICO</button>
        </div>


    </form>
</div>

<img class="add-img" src="templates\img\user.png" />

{include file='templates/footer.tpl'}