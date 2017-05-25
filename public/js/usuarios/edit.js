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

    var valorEstadoDatos = $("#datos_hidden").val();
  
  var selectEstadoDatos = document.getElementById("estado_datos");
    var cantDatos = selectEstadoDatos.length;
    for (i = 0; i < cantDatos; i++) {
      if (selectEstadoDatos[i].value == valorEstadoDatos) {
          selectEstadoDatos[i].selected = true;
        }
    } 
});