{% extends 'base.twig.html' %}
{% block titulo%}Lista de personas{%endblock%}
{%block contenido%}
 <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <h2 class="text-center mb-4">Ingrese un DNI para ver los autos asociados</h2>
                <form id="form" action="../Ejercicio5/actionAutosPersona.php" method="post">
                    <div class="form-group">
                        <label for="DniDuenio">DNI:</label>
                        <input type="text" name="DniDuenio" id="DniDuenio" class="form-control" required>
                        <div class="invalid-feedback">El DNI del dueño es obligatorio.</div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Ver autos asociados</button>
                </form>
            </div>
        </div>
    </div>
{%endblock%}


