{% extends 'base.twig.html' %}
{% block titulo%}Nueva Persona{%endblock%}
{%block contenido%}
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <h2 class="text-center mb-4">Ingrese los datos para cambiar al dueño de un auto </h2>
                <form id="form-E8" action="./accionCambioDuenio.php" method="post">
                    <div class="form-group">
                        <label for="Patente">Patente del auto: </label>
                        <input type="text" name="Patente" id="Patente" class="form-control" required pattern="[A-Za-z]{3}\s?[0-9]{3}">
                        <div class="invalid-feedback">La patente debe contener 3 letras y tres numeros</div>
                    </div>
                    <div class="form-group">
                        <label for="DniDuenio">DNI del nuevo dueño</label>
                        <input type="text" name="DniDuenio" id="DniDuenio" class="form-control" required>
                        <div class="invalid-feedback">El DNI del dueño es obligatorio.</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Realizar cambio</button>
                </form>
            </div>
        </div>
    </div>
{%endblock%}