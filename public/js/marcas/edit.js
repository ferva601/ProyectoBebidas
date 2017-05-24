$(document).ready(function() {

	//Cargar el valor del Select ClaseBebida
   var valorReclamada = $("#reclamada_hidden").val();
	
	var selectReclamada = document.getElementById("reclamada");
  	var cantOpciones = selectReclamada.length;
   	for (i = 0; i < cantOpciones; i++) {
    	if (selectReclamada[i].value == valorReclamada) {
       		selectReclamada[i].selected = true;
       	}
    }

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

    var valorProductor = $("#productor_hidden").val();
	
	var selectProductor = document.getElementById("productor_id");
  	var cantProductores = selectProductor.length;
   	for (i = 0; i < cantProductores; i++) {
    	if (selectProductor[i].value == valorProductor) {
       		selectProductor[i].selected = true;
       	}
    } 
});