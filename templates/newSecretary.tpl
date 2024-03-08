{include file='templates/header.tpl'}
<link href="css/formulario.css" rel="stylesheet">
</head>

   <h2>{$title}</h2>

   <form class="from-new" method="POST" action="agregarSecretaria">
        <div class="mb-3 mt-2">
            <label for="nombreSecretaria" class="form-label">Nombre </label>
            <input type="text" class="form-control" name="nombre" id="nombreSecretaria" placeholder="Ingrese el nombre">
        </div>

        <div class="mb-3">
            <label for="apellidoSecretaria"  class="form-label">Apellido</label>
            <input type="text" class="form-control" name="apellido" id="apellidoSecretaria" placeholder="Ingrese el apellido">
        </div>

       <div class="mb-3 mt-2">
           <label for="exampleFormControlInput1" class="form-label">Nombre de usuario </label>
           <input type="text" class="form-control" name="nombre_usuario_secretaria" id="exampleFormControlInput1" placeholder="Ingrese el nombre de usuario">
       </div>

       <div class="mb-3">
           <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
           <input type="password" class="form-control" name="contrasenia_secretaria" id="exampleFormControlInput1" placeholder="Ingrese la contraseña">
       </div>
        
        <button type="submit" class="btn btn-primary mb-3">AGREGAR SECRETARIA</button> 


    </form>

    {include file='templates/footer.tpl'}