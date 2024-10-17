{% extends 'base.twig.html' %}
{% block titulo%}Nueva Persona{%endblock%}
{%block contenido%}

<div class="container mt-5">
    {% if res == false%}
        <h2>{{men}}</h2>
        <h4>Ingrese los datos de una persona valida para luego agregar los datos del nuevo auto con dicha persona</h4>
        <br>
        <a href="../Ejercicio6/NuevaPersona.php" class="btn btn-primary"> Cargar a una persona</a>
    {% else %}
        {% if  resAuto|length == 0 %}
            {% if autoControl.alta(datos) %}
                <h2>El auto se ha registrado con exito </h2>
            {% else %}
                <h2>ERROR. No se pudo registrar el auto. Revise los datos.</h2>
            {% endif %}
        {% else %}
            <h2>ERROR. Esta patente ya esta registrada</h2>
        {% endif %}
    {% endif %}
    <hr>
</div>
{%endblock%}