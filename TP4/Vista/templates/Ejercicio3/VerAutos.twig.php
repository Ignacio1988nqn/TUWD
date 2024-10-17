{% extends 'base.twig.html' %}
{% block titulo%}Ver Autos{%endblock%}
{%block contenido%}

{% if hay %}
<h2>Lista de Autos</h2>
<hr>
<table cellspacing='20' style="border-collapse: separate">
    <tr>
        <td><strong> Patente </strong></td>
        <td><strong> Marca </strong></td>
        <td><strong> Modelo </strong></td>
        <td><strong> Nombre Dueño</strong></td>
        <td><strong> Apellido Dueño </strong></td>
    </tr>
    {% for auto in autos %}
    <tr>
        <td>{{ auto.getPatente() }} </td>
        <td>{{ auto.getMarca() }}</td>
        <td>{{ auto.getModelo() }}</td>
        <td>{{ auto.getDuenio().getNombre() }}</td>
        <td>{{ auto.getDuenio().getApellido() }}</td>
    </tr>
    {% endfor %}
</table>
<hr>
{% else %}
<h3>No hay autos cargados en la base de datos</h3>
{% endif %}
{%endblock%}