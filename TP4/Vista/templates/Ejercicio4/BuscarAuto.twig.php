{% extends 'base.twig.html' %}
{% block titulo%}Ver Autos{%endblock%}
{%block contenido%}
<form id="form" action="../Ejercicio4/accionBuscarAuto.php" method="post">

<h1>Buscar un auto</h1>
<hr>
<br>
<table>
    <tr>
        <th></th>
        <th></th>
    </tr>
    <tr>
        <td>Ingrese un número de patente </td>
        <td><input type="text" class="form-control" name="patente" id="patente" required pattern="[A-Za-z]{3}\s?[0-9]{3}"></td>
    </tr>
</table>
<div style="margin-top: 40px;">
    <button type="submit" class="btn btn-primary">Enviar</button>
</div>
</form>
{%endblock%}