$(document).ready(function() {

  //Cargar el valor del Select Pais
  var valorPais = $("#pais_hidden").val();

  var selectPais = document.getElementById("pais_id");
    var cantPaises = selectPais.length;
    for (i = 0; i < cantPaises; i++) {
      if (selectPais[i].value == valorPais) {
          selectPais[i].selected = true;
        }   
    }

   //Cargar el valor del Select ProvinciaRegion
   var valorProvincia = $("#provincia_hidden").val();
  
  var selectProvincia = document.getElementById("provincia_id");
    var cantProvincias = selectProvincia.length;
    for (i = 0; i < cantProvincias; i++) {
      if (selectProvincia[i].value == valorProvincia) {
          selectProvincia[i].selected = true;
        }   
    }
    
  var valorReclamada = $("#reclamada_hidden").val();
  if (valorReclamada == "1" ){
    $("#reclamada option[value='1']").attr("selected",true);
  }else{
    $("#reclamada option[value='0']").attr("selected",true);
  }

    var valorEstadoDatos = $("#datos_hidden").val();
    if (valorEstadoDatos == "1" ){
      $("#estado_datos option[value='1']").attr("selected",true);
    }else{
      $("#estado_datos option[value='0']").attr("selected",true);
    }
});

/*function Mostrar(btn){
   console.log(btn.value);
   var route = "http://localhost:8000/productor/"+btn.value+"/edit";

   $.get(route, function(res){
      $("#id").val(res.id);
      $("#nombre").val(res.nombre);
      $("#nombre_seo").val(res.nombre_seo);
      $("#descripcion").val(res.descripcion);
      $("#direccion").val(res.direccion);  
      $("#codigo_postal").val(res.codigo_postal);

      var selectPais = document.getElementById("pais_id");
      var cantPaises = selectPais.length;
      for (i = 0; i < cantPaises; i++) {
         if (selectPais[i].value == res.pais_id) {
            selectPais[i].selected = true;
         }   
      }

      var selectProvincia = document.getElementById("provincia_id");
      var cantProvincias = selectProvincia.length;
      for (i = 0; i < cantProvincias; i++) {
         if (selectProvincia[i].value == res.provincia_region_id) {
            selectProvincia[i].selected = true;
         }   
      }

      $("#persona_contacto").val(res.persona_contacto);
      $("#telefono").val(res.telefono);
      $("#telefono_opcional").val(res.telefono_opcional);
      $("#email").val(res.email);
      $("#website").val(res.website);
      $("#facebook").val(res.facebook);
      $("#instagram").val(res.instagram);
      $("#twitter").val(res.twitter);
      $("#reclamada").val(res.reclamada);
      $("#estado_datos").val(res.estado_datos);
      $("#latitud").val(res.latitud);
      $("#longitud").val(res.longitud);
      $("#tipo_suscripcion").val(res.tipo_suscripcion);   
   });
}

function actualizar(){
   var id = $("#id").val();
   var nombre = $("#nombre").val();
   var nombre_seo = $("#nombre_seo").val();
   var descripcion = $("#descripcion").val();
   var direccion = $("#direccion").val();
   var codigo_postal = $("#codigo_postal").val();
   var pais_id = $("#pais_id").val();
   var provincia_id = $("#provincia_id").val();
   var persona_contacto = $("#persona_contacto").val();
   var telefono = $("#telefono").val();
   var telefono_opcional = $("#telefono_opcional").val();
   var email = $("#email").val();
   var website = $("#website").val();
   var facebook = $("#facebook").val();
   var twitter = $("#twitter").val();
   var instagram = $("#instagram").val();
   var reclamada = $("#reclamada").val();
   var estado_datos = $("#estado_datos").val();
   var latitud = $("#latitud").val();
   var longitud = $("#longitud").val();
   var tipo_suscripcion = $("#tipo_suscripcion").val();

   var route = "http://localhost:8000/productor/"+id+"";
   var token = $("#token").val();

   $.ajax({
      url: route, 
      headers: {'X-CSRF-TOKEN': token},
      type: 'PUT',
      data:{nombre: nombre, nombre_seo: nombre_seo, descripcion: descripcion, direccion: direccion, codigo_postal: codigo_postal,
            pais_id: pais_id, provincia_id: provincia_id, persona_contacto: persona_contacto, telefono: telefono, telefono_opcional: telefono_opcional,
            email: email, website: website, facebook: facebook, twitter: twitter, instagram: instagram, reclamada: reclamada, 
            estado_datos: estado_datos, latitud: latitud, longitud: longitud, tipo_suscripcion: tipo_suscripcion},

      success: function(){
         $("#myModal").modal('toggle');
         $("#msj-success").show();
      },
      error: function (jqXHR, exception) {
        var msg = '';
        if (jqXHR.status === 0) {
            msg = 'Not connect.\n Verify Network.';
        } else if (jqXHR.status == 404) {
            msg = 'Requested page not found. [404]';
        } else if (jqXHR.status == 500) {
            msg = 'Internal Server Error [500].';
        } else if (exception === 'parsererror') {
            msg = 'Requested JSON parse failed.';
        } else if (exception === 'timeout') {
            msg = 'Time out error.';
        } else if (exception === 'abort') {
            msg = 'Ajax request aborted.';
        } else {
            msg = 'Uncaught Error.\n' + jqXHR.responseText;
        }
        $('#post').html(msg);
    },
   });
}*/