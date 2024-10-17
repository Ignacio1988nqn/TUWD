{% extends 'base.twig.html' %}
{% block titulo%}Nueva Persona{%endblock%}
{%block contenido%}
<div class="row justify-content-center">
            {% if esta %}
                <div class="col-md-6">
                <h2 class="text-center mb-4">Puede actualizar los datos del DNI: {{ dni }}</h2> 
                <form id="form-E6" action="./ActualizarDatosPersona.php" method="post">
                    <input type="hidden" name="NroDni" value="{{objPer.getNroDni()}}" >
                    <div class="form-group">
                        <label for="Apellido">Apellido:</label>
                        <input type="text" name="Apellido" id="Apellido" class="form-control" value="{{objPer.getApellido()}}"  required>
                        <div class="invalid-feedback">El Apellido es obligatorio.</div>
                    </div>
                    <div class="form-group">
                        <label for="Nombre">Nombre:</label>
                        <input type="text" name="Nombre" id="Nombre" class="form-control" value="{{objPer.getNombre()}}" required  >
                        <div class="invalid-feedback">El Nombre es obligatorio.</div>
                    </div>
                    <div class="form-group">
                        <label for="fechaNac">Fecha de nacimiento:</label>
                        <input type="date" name="fechaNac" id="fechaNac" class="form-control" value="{{objPer.getFechaNac() }}" required>
                        <div class="invalid-feedback">La fechaNac de nacimiento es obligatorio.</div>
                    </div>
                    <div class="form-group">
                        <label for="Telefono">Teléfono:</label>
                        <input type="text" name="Telefono" id="Telefono" class="form-control" value="{{objPer.getTelefono() }}" required>
                        <div class="invalid-feedback">El teléfono es obligatorio.</div>
                    </div>
                    <div class="form-group">
                        <label for="Domicilio">Domicilio:</label>
                        <input type="text" name="Domicilio" id="Domicilio" class="form-control" value="{{objPer.getDomicilio()}}" required >
                        <div class="invalid-feedback">El Domicilio es obligatorio.</div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Realizar cambios</button>
                </form>
            </div>
            {% else %}
                <div class="col-md-6">
                    <h2 class="text-center mb-4">Este DNI no está registrado en nuestra base. Intente nuevamente.</h2>
                    <a href="../Ejercicio9/BuscarPersona.php" class="btn btn-primary btn-block">Volver</a> <br>
                </div>
            {% endif %}
        </div>
{%endblock%}



