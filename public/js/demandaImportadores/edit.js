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

    //Cargar el valor del Select ClaseBebida
   var valorProducto = $("#producto_hidden").val();
  
  var selectProductos = document.getElementById("producto_id");
    var cantProductos = selectProductos.length;
    for (i = 0; i < cantProductos; i++) {
      if (selectProductos[i].value == valorProducto) {
          selectProductos[i].selected = true;
        }
    }

     var valorStatus = $("#status_hidden").val();
    if (valorStatus == "1" ){
      $("#status option[value='1']").attr("selected",true);
    }else{
      $("#status option[value='0']").attr("selected",true);
    }
});