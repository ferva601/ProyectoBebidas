$(document).ready(function() {
	var valorProducto = $("#producto_hidden").val();
  
  	var selectProductos = document.getElementById("producto_id");
    var cantProductos = selectProductos.length;
    for (i = 0; i < cantProductos; i++) {
      if (selectProductos[i].value == valorProducto) {
          selectProductos[i].selected = true;
        }
    }
}