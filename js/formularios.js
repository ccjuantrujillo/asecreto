function editar_categoria(id,nombre,images){
    document.getElementById('codigo').value=id;
    document.getElementById('categoria').value=nombre;
    document.getElementById('btnCategoria').value="Actualizar Registro";
    document.getElementById('accion').value="update";
    document.getElementById('ruta_imagen').value=images;
    if(images==""){
    	document.getElementById('imgCategoria').src="../images/no_disponible.jpg";
    }
    else{
    	document.getElementById('imgCategoria').src="../images/"+images;
    }
}
function eliminar_categoria(id){
		if(confirm("¿Esta seguro que desea eliminar este producto?")){
    	document.getElementById('codigo').value=id;
    	document.getElementById('accion').value="delete";
    	document.form1.submit();
    }
}
function editar_producto(id,nomproducto,stock,peso,precio,descripcion,idcategoria,images){
    document.getElementById('codigo').value=id;
    document.getElementById('producto').value=nomproducto;
    document.getElementById('stock').value=stock
    document.getElementById('peso').value=peso;
    document.getElementById('precio').value=precio;
    document.getElementById('descripcion').value=descripcion;
    document.getElementById('categoria').value=idcategoria;    
    document.getElementById('btnCategoria').value="Actualizar Registro";
    document.getElementById('accion').value="update";
    document.getElementById('ruta_imagen').value=images;    
    if(images==""){
    	document.getElementById('imgProducto').src="../images/no_disponible.jpg";
    }
    else{
    	document.getElementById('imgProducto').src="../images/"+images;
    }    
}
function eliminar_producto(id){
	  if(confirm("¿Esta seguro que desea eliminar este producto?")){
			document.getElementById('codigo').value=id;
			document.getElementById('accion').value="delete";
			document.form1.submit();	  	
	  }
}
function cargar_imagen_producto(ruta_imagen){
	imagen=document.getElementById('fileProducto').value;
	alert(imagen);
}
