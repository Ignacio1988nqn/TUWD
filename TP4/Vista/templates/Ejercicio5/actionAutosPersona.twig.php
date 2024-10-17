{% extends 'base.twig.html' %}
{% block titulo%}Lista de personas{%endblock%}
{%block contenido%}
{% if hay %}
    <h2> Informacion del dueño </h2><br>
    <strong> Nombre: </strong> {{duenio.getNombre()}} <br>
    <strong>Apellido:</strong> {{duenio.getApellido()}}  <br> 
    <strong>Fecha de nacimiento: </strong> {{duenio.getFechaNac()}} <br> 
    <strong>Telefono: </strong> {{duenio.getTelefono()}} <br> "
    <strong>Domicilio:</strong> {{duenio.getDomicilio()}}  <br> 
    <br>
    <tr>
    {% if  autos|length > 0 %}
        <h2>Datos de los autos asociados al DNI:  {{duenio.getNroDni()}}</h2><br>
        <table class='table table-striped'>
        <tr>
        <td><strong> Patente </strong></td>
        <td><strong> Marca  </strong></td>
        <td><strong> Modelo </strong></td>
        </tr>
        {% for auto in autos %}
            <td>{{ auto.getPatente() }} </td>
            <td>{{ auto.getMarca() }}</td>
            <td>{{ auto.getModelo() }}</td>
        {% endfor %}
        </table>
    {% else %}
        <h2 class='text-danger'> Esta persona no tiene autos cargados. </h2>
    {% endif %}
{% else %}
    <h3 class='text-danger'>El DNI  no se encuentra en nuestra base de datos</h3>
{% endif %}
 
{%endblock%}

