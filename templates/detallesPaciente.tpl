{include file='templates/header.tpl'}
<link href="css/patients.css" rel="stylesheet">

<img  class="img-detalle" src="templates\img\paciente.jpg"/>

<div class="data-container">

    <h1 class="paciente-nombre">{$dataPaciente->nombre} {$dataPaciente->apellido}</h1>
    <div class="btn-container">
    <a href="sacarTurno"><button class="btn">Sacar turno</button></a>
    <a href="verTurno"><button class="btn">Visulizar turno</button></a>
    </div>
</div>


{include file='templates/footer.tpl'}
