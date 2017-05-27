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

   var valorTipoHoreca = $("#tipo_hidden").val();
  
  var selectTipoHoreca = document.getElementById("tipo_horeca");
    var cantHorecas = selectTipoHoreca.length;
    for (i = 0; i < cantHorecas; i++) {
      if (selectTipoHoreca[i].value == valorTipoHoreca) {
          selectTipoHoreca[i].selected = true;
        }
    } 
});