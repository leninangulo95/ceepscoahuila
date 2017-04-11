<!DOCTYPE html>
<html>
<head>
  <title></title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/styles.css">
  <script type="text/javascript">

  $(document).ready(function(e){


   var id_user,nombre, correo, user, pass, tipo;
      $('#form_usuarios').submit(function(e){
       
       nombre = $("#nombre_usuario").val();
       correo = $("#correo_usuario").val();
       user = $("#usuario").val();
       pass = $("#pass_usuario").val();
       tipo = $("#tipo_usuario").val();

       var response = $.ajax({
        url: 'registro_usuario.php',
        type: 'POST',
        data: {nombre_usuario:nombre, correo_usuario:correo, usuario:user, pass_usuario:pass, tipo_usuario:tipo}
       });

       response.done(function(data, jqXHR, textStatus, errorThrown) {
        console.log(data, jqXHR, textStatus, errorThrown)
        if (textStatus.status === 202) {
         alert('Registrado Correctamente');
         window.location.replace("/ceepscoahuila/Admin/includes")
         // $('#table').apennd($('</tr>').html(nombre).apennd($('</div>').html(correo).apennd($('</div>').html(user).apendd($('</div>').html(pass).apendd($('</div>').html(tipo).apendd($('</div>')))))));
         $('#form_usuarios')[0].reset();
        } else {
         alert('Intentar Otra Vez');
         $('#form_usuarios')[0].reset();
        }
       });
       e.preventDefault();
      });


      var codigo_estado, nombre_estados;
      $('#form_estados').submit(function(e){
       codigo_estado = $("#codigoEstado").val();
       nombre_estados = $("#estado").val();

       var response1 = $.ajax({
        url: 'registro_estados.php',
        type: 'POST',
        data: {codigoEstado:codigo_estado, estado:nombre_estados}
       });

       response1.done(function(data, jqXHR, textStatus, errorThrown) {
        console.log(data, jqXHR, textStatus, errorThrown)
        if (textStatus.status === 202) {
         alert('Registrado Correctamente');
         $('#table_estado').append($('<tr/>').append($('<td/>').text(codigo_estado)).append($('<td/>').text(nombre_estados)).append($('#centrarbtn')));
         window.location.replace("/ceepscoahuila/Admin/includes")
         
         $('#form_estados')[0].reset();
        } else {
         alert('Intentar Otra Vez');
         $('#form_estados')[0].reset();
        }
       });
       e.preventDefault();
      });

      var codigo_factor, nombre_factor;
      $('#form_factores').submit(function(e){
       codigo_factor = $("#codigoFactor").val();
       nombre_factor = $("#factor").val()
       console.log(codigo_factor)
       var response2 = $.ajax({
        url: 'registro_factores.php',
        type: 'POST',
        data: {codigoFactor:codigo_factor, factor:nombre_factor}
       });

       response2.done(function(data, jqXHR, textStatus, errorThrown){
        console.log(data, jqXHR, textStatus, errorThrown)
        if (textStatus.status === 202) {
         alert('Registrado Correctamente');
          window.location.replace("/ceepscoahuila/Admin/includes")
         $("#form_factores")[0].reset();
        } else {
         alert('Intentar Otra Vez');
         $("#form_factores")[0].reset();
        }
       });
       e.preventDefault();
      });

      var codigo_variable, codigo_factor, nombre_variable;
      $('#form_variables').submit(function(e){
       codigo_variable = $("#codigoVariables").val();
       codigo_factor = $("#codFactor").val();
       nombre_variable = $("#variable").val();

       var response3 = $.ajax({
        url: 'registro_variables.php',
        type: 'POST',
        data: {codigoVariables:codigo_variable, codFactor: codigo_factor, variable:nombre_variable}
       });

       response3.done(function(data, jqXHR, textStatus, errorThrown){
        console.log(data, jqXHR, textStatus, errorThrown)
        if (textStatus.status === 202) {
         alert('Rgistrado Correctamente');
          window.location.replace("/ceepscoahuila/Admin/includes")
         $("#form_variables")[0].reset(); 
        } else {
         alert('Intentar Otra Vez');
         $("#form_variables")[0].reset();
        }
       });
       e.preventDefault();
      });

      
     
   var variable_datos, estado_datos,fecha_datos, total_datos, unidad_datos, fuente_datos;
      $('#form_datos').submit(function(e){
       variable_datos = $("#codVariable").val();
       estado_datos = $("#codiEstado").val();
       fecha_datos = $("#ano").val();
       total_datos = $("#total").val();
       unidad_datos = $("#unidad").val();
       fuente_datos = $("#fuente").val();

       var response4 = $.ajax({
        url: 'registro_datos.php',
        type: 'POST',
        data: {codVariable:variable_datos, codiEstado: estado_datos, ano:fecha_datos, total:total_datos, unidad: unidad_datos, fuente: fuente_datos}
       });

       response4.done(function(data, jqXHR, textStatus, errorThrown){
        console.log(data, jqXHR, textStatus, errorThrown)
        if (textStatus.status === 202) {
         alert('Rgistrado Correctamente');
          window.location.replace("/ceepscoahuila/Admin/includes/pagina_principal.php")
         $("#form_datos")[0].reset(); 
        } else {
         alert('Intentar Otra Vez');
         $("#form_datos")[0].reset();
        }
       });
       e.preventDefault();
      }); 
 });
  </script>
</head>
<body>

</body>
</html>
