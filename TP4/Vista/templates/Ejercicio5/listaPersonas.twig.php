{% extends 'base.twig.html' %}
{% block titulo%}Lista de personas{%endblock%}
{%block contenido%}
{% if hay %}
    <h2>Lista de personas</h2>
    <hr>
    <table cellspacing='20' style="border-collapse: separate">
       <tr>
        <td><strong>  Nro Dni </strong></td>
        <td><strong> Apellido </strong></td>
        <td><strong> Nombre </strong></td>
        <td><strong> Fecha Nacimiento</strong></td>
        <td><strong> Telefono </strong></td>
        <td><strong> Domicilio </strong></td>
    </tr>
        {% for persona in personas %}
        <tr>
            <td>{{ persona.getNroDni() }} </td>
           <td>{{ persona.getApellido() }}</td>
            <td>{{ persona.getNombre() }}</td>
            <td>{{ persona.getFechaNac() }}</td>
            <td>{{ persona.getTelefono() }}</td>
            <td>{{ persona.getDomicilio() }}</td>
        </tr>
        {% endfor %}
    </table>
    <hr>
{% else %}
    <h3>No hay personas cargados en la base de datos</h3>
{% endif %}
 <a href="../Ejercicio5/autosPersona.php" class="btn btn-primary">Ver los autos de una persona</a> <br>
{%endblock%}


