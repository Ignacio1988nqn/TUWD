{% extends 'base.twig.html' %}
{% block titulo%}Nueva Persona{%endblock%}
{%block contenido%}
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Ingrese los datos de un nuevo auto </h2>
            <form id="form-E7" action="./accionNuevoAuto.php" method="post">
                <div class="form-group">
                    <label for="Patente">Patente</label>
                    <input type="text" name="Patente" id="Patente" class="form-control" required pattern="[A-Za-z]{3} ?[0-9]{3}">
                    <div class="invalid-feedback">La patente debe contener 3 letras y tres numeros</div>
                </div>
                <div class="form-group">
                    <label for="Marca">Marca:</label>
                    <input type="text" name="Marca" id="Marca" class="form-control" required>
                    <div class="invalid-feedback">La marca es obligatorio.</div>
                </div>
                <div class="form-group">
                    <label for="Modelo">Modelo:</label>
                    <input type="text" name="Modelo" id="Modelo" class="form-control" required>
                    <div class="invalid-feedback">El modelo es obligatorio.</div>
                </div>
                <div class="form-group">
                    <label for="DniDuenio">DNI del dueño:</label>
                    <input type="number" name="DniDuenio" id="DniDuenio" class="form-control" required>
                    <div class="invalid-feedback">El DNI del dueño es obligatorio.</div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Registrar</button>
            </form>
        </div>
    </div>
</div>
{%endblock%}