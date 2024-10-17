{% extends 'base.twig.html' %}
{% block titulo%}Nueva Persona{%endblock%}
{%block contenido%}
     <div class="container mt-5">
         <div class="row justify-content-center">
             <div class="col-md-6">
             <h2 class="text-center mb-4">Ingrese un Dni </h2>
                 <form id="form" action="./accionBuscarPersona.php" method="post">
                     <div class="form-group">
                         <label for="NroDni">Dni:</label>
                         <input type="text" name="NroDni" id="NroDni" class="form-control" required>
                         <div class="invalid-feedback">El Dni es obligatorio.</div>
                     </div>
                     <button type="submit" class="btn btn-primary btn-block">Buscar Dni</button>
                 </form>
             </div>
         </div>
     </div>
{%endblock%}