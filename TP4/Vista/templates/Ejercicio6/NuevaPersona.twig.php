{% extends 'base.twig.html' %}
{% block titulo%}Nueva Persona{%endblock%}
{%block contenido%}
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <h2 class="text-center mb-4">Agregue a una nueva persona a la base de datos</h2>
                <form id="form-E6" action="./accionNuevaPersona.php" method="post">
                    <div class="form-group">
                        <label for="NroDni">DNI:</label>
                        <input type="text" name="NroDni" id="NroDni" class="form-control" required pattern="\d{8}">
                        <div class="invalid-feedback">El Dni debe tener 8 dígitos.</div>
                    </div>
                    <div class="form-group">
                        <label for="Apellido">Apellido:</label>
                        <input type="text" name="Apellido" id="Apellido" class="form-control" required>
                        <div class="invalid-feedback">El Apellido es obligatorio.</div>
                    </div>
                    <div class="form-group">
                        <label for="Nombre">Nombre:</label>
                        <input type="text" name="Nombre" id="Nombre" class="form-control" required>
                        <div class="invalid-feedback">El Nombre es obligatorio.</div>
                    </div>
                    <div class="form-group">
                        <label for="fechaNac">Fecha de nacimiento:</label>
                        <input type="date" name="fechaNac" id="fechaNac" class="form-control" required>
                        <div class="invalid-feedback">La fechaNac de nacimiento es obligatorio.</div>
                    </div>
                    <div class="form-group">
                        <label for="Telefono">Teléfono:</label>
                        <input type="number" name="Telefono" id="Telefono" class="form-control" required>
                        <div class="invalid-feedback">El teléfono es obligatorio.</div>
                    </div>
                    <div class="form-group">
                        <label for="Domicilio">Domicilio:</label>
                        <input type="text" name="Domicilio" id="Domicilio" class="form-control" required>
                        <div class="invalid-feedback">El Domicilio es obligatorio.</div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                </form>
            </div>
        </div>
    </div>
{%endblock%}