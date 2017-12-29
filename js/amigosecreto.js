function link(accion){
	if(accion==''){
		url="index.php?accion=";
	}
	else{
		url="index.php?accion="+accion;
	}
	location.href=url;
}

function catalogo_detalle(categoria){
	location.href="index.php?accion=catalogo_detalle&categoria="+categoria;	
}

function checkear(obj){
	valor=obj.value;
	nuevovalor=(obj.checked)?'1':'0';
	obj.value=nuevovalor;
}

function ingresar_datos_personales() {
	url    = 'index.php?accion=ingresar_datos_personales';
	obl    = new Array('txtEmail','txtEmail2','txtContrasena','txtContrasena2','txtNombres','txtApellidos','txtNumeroDocumento','txtTelefono','txtCiudad');
	params = Form.serialize($("frmRegistro"));
	if(validablancos(obl)){
		new Ajax.Request(url, {
                                method: 'get',
                                parameters: params,
                                onComplete: function(transport) {
                                        /*if(transport.responseText.length > 0){
                                                        document.getElementById(contenedor_id).innerHTML=transport.responseText;
                                        }*/
                                        location.href="index.php?accion=gracias";
                                }
                });
	}
}

function ingreso_sistema_administrador(){
	var url    = 'index.php?accion=ingreso_sistema_administrador';
	var params = Form.serialize($("frmIngresoCuenta"));
	if(validar_frmIngresoCuenta()){
		new Ajax.Request(url, {
								method: 'get', 
								parameters: params,
								onComplete: function(transport) {
									//if(transport.responseText > 0){
										location.href="index.php?accion=ingreso_sistema_administrador";
									//}
								}
						});
	}
}

function ingreso_sistema(){
	var url    = 'index.php?accion=ingreso_sistema';
	var params = Form.serialize($("frmHome"));
	if(validar_frmHome()){
		new Ajax.Request(url, {
								method: 'get', 
								parameters: params,
								onComplete: function(transport) {
									tipo_usuario = transport.responseText;
									if(tipo_usuario=='1'){
										location.href="index.php?accion=ingreso_sistema_administrador";
									}
									else if(tipo_usuario=='2'){
										location.href="index.php?accion=ingreso_sistema_usuario";
									}
									else if(tipo_usuario=='0'){
										alert('Usuario o contrase�a no valida');
									}
								}
						});
	}
}

function ingreso_administrador(){
    var url    = 'index.php?accion=ingreso_administrador';
    var params = Form.serialize($("frmIngresoCuenta"));
    if(validar_frmIngresoCuenta()){
        new Ajax.Request(url, {
                        method: 'get',
                        parameters: params,
                        onComplete: function(transport) {
                                tipo = transport.responseText;
                                if(tipo=='1'){//Primer ingreso, mensaje de bienvenida
                                    alert('Ventana modal');
                                }
                                else if(tipo=='2'){//Sucesivos ingresos
                                    alert('Ingresar al muro');
                                }
                                else if(tipo=='3'){
                                   alert('Usuario o contraseña incorrecto');
                                }
                        }
                     });
    }

}

function escribir_mensaje_muro(){
	var url    = 'index.php?accion=escribir_mensaje_muro';
	var params = Form.serialize($("frmMuro"));
	if(validar_frmMuro()){
		new Ajax.Request(url, {
								method: 'get', 
								parameters: params,
								onComplete: function(transport) {
									tipo_usuario = transport.responseText;
									location.href="index.php?accion=muro_de_grupo";
								}
						});
	}
}

function crear_grupo(){
	var url    = 'index.php?accion=crear_grupo';
	var params = Form.serialize($("frmGrupo"));
	//alert(params);
	if(validar_frmGrupo()){
		new Ajax.Request(url, {
                                    method: 'get',
                                    parameters: params,
                                    onComplete: function(transport) {
                                            if(transport.responseText){
                                                    location.href="index.php?accion=invita_a_tus_amigos";
                                            }
                                    }
                    });
	}
}

function enviar_invitaciones(){
	var url    = 'index.php?accion=enviar_invitaciones';
	var params = Form.serialize($("frmInvitacion"));
	//alert(params);
	if(validar_frmInvitacion()){
		new Ajax.Request(url, {
                                        method: 'get',
                                        parameters: params,
                                        onComplete: function(transport) {
                                            if(transport.responseText){
                                                    idgrupo = transport.responseText;
                                                    location.href="index.php?accion=invitaciones_enviadas";
                                            }
                                        }
                        });
	}
}

function agregar_comentario(){
	var url    = 'index.php?accion=agregar_comentario';
	var params = Form.serialize($("frmComentario"));
	if(validar_frmComentario()){
		new Ajax.Request(url, {
								method: 'get', 
								parameters: params,
								onComplete: function(transport) {
									if(transport.responseText){
										location.href="index.php?accion=muro_de_grupo";	
									}
								}
						});
	}
}

function realizar_sorteo(){
	var url    = 'index.php?accion=realizar_sorteo';
	new Ajax.Request(url, {
							method: 'get', 
							onComplete: function(transport) {
							alert(transport.responseText);
								if(transport.responseText){
									location.href="index.php?accion=crear_fecha_entrega";	
								}
							}
					});
}

function escribir_mensaje_amigo(){
	var url    = 'index.php?accion=escribir_mensaje_amigo';
	var params = Form.serialize($("frmMsgAmigo"));
	if(validar_frmMsgAmigo()){
		new Ajax.Request(url, {
								method: 'get', 
								parameters: params,
								onComplete: function(transport) {
									if(transport.responseText){
										location.href="index.php?accion=soy_amigo_secreto_de";	
									}
								}
						});
	}
}

function activa_cuenta_miembro(){
	var url    = 'index.php?accion=activa_cuenta_miembro';
	var params = Form.serialize($("frmActivaCuenta"));
	if(validar_frmActivaCuenta()){
		new Ajax.Request(url, {
								method: 'get', 
								parameters: params,
								onComplete: function(transport) {
									if(transport.responseText){
										location.href="index.php?accion=muro_de_grupo";	
									}
								}
						});
	}
}

////Validaciones

function validar_frmRegistro(){
	resultado=true;
	objeto=$('chkSexo');
	if($('chkSexo').value==null){
		alert('Debe seleccionar el sexo de la persona');
		resultado=false;
	}
	return resultado;
}

function validar_frmIngresoCuenta(){
	resultado=true;
	return resultado;
}

function validar_frmHome(){
	resultado=true;
	return resultado;
}

function validar_frmMuro(){
	resultado=true;
	return resultado;
}

function validar_frmGrupo(){
	resultado=true;
	return resultado;
}

function validar_frmInvitacion(){
	resultado=true;
	return resultado;
}

function validar_frmComentario(){
	resultado=true;
	return resultado;
}

function validar_frmMsgAmigo(){
	resultado=true;
	return resultado;
}

function validar_frmActivaCuenta(){
	resultado=true;
	return resultado;
}
function validar_frmIngresoCuenta(){
	resultado=true;
	return resultado;
}
/************************************* FUNCIONES DE VALIDACION ******************************/
function validablancos(a){
    var cant= a.length;
    for(i=0;i<cant;i++){
            var x=$(a[i]).value;
            var t=$(a[i]).title;
            if(x==''){
            alert('Debe ingresar los datos de '+t+'!');
            $(a[i]).focus();
            return false;
        }
    }
    return true;
}

function validFormSalt(opcion,objeto,evento,salto){
    var key=evento.which ? evento.which : evento.keyCode;
    switch(opcion)
    {
    case 'nro':
        if(key==9 || evento.keyCode==13 || evento.keyCode==9){
            evento.preventDefault();
            $(salto).focus();
        }
        return numbersonly(objeto,evento,'');
        break;
    case 'date':
        if(key==9 || evento.keyCode==13 || evento.keyCode==9){
            evento.preventDefault();
            lic_validarHoraFinal();
        }
    break;
    case 'txt':

        if(key==9 || evento.keyCode==13 || evento.keyCode==9){
            evento.preventDefault();
            $(salto).focus();
        }
        return textoonly(objeto,evento);
        break;
    case 'alf':
        if(key==9 || evento.keyCode==13 || evento.keyCode==9){
            evento.preventDefault();
            $(salto).focus();
        }
        break;
    case 'email':
        if(key==9 || evento.keyCode==13 || evento.keyCode==9){
            resp      = ValidateEmail(evento,objeto);
            proxsalto = resp==true?salto:objeto;
            evento.preventDefault();
            $(proxsalto).focus();
        }
        break;
    case 'web':
        if(key==9 || evento.keyCode==13 || evento.keyCode==9){
            evento.preventDefault();
            $(salto).focus();
        }
        return dirwebonly(objeto,evento);
    break;
    case 'cbo':
        if(key==9 || evento.keyCode==13 || evento.keyCode==9){
            evento.preventDefault();
            $(salto).focus();
        }
        break;
    }
}

function numbersonly(myfield, e, dec) 
{
	var key;
	var keychar;
	if (window.event)	
		key = window.event.keyCode;	
	else if (e)	
		key = e.which;
	else	
		return true;	
	keychar = String.fromCharCode(key);
	// control keys
	//if ((key==13) )	
			//alert("aaaaaaaa");
	
	if ((key==null) || (key==0) || (key==8) || (key==9) || (key==13) || (key==27) )	
		return true;
	// numbers  
	if (dec && (keychar == "." || keychar == ","))  
	{ 
		var temp=""+myfield.value;	
		if(temp.indexOf(keychar) > -1) 
			return false;  
	}  
	else if ((("0123456789").indexOf(keychar) > -1))  
		return true;
	// decimal point jump  
	else  
	return false;  
}

function textoonly(myfield, e) 
{
	var key;
	var keychar;
	if (window.event)	
		key = window.event.keyCode;	
	else if (e)	
		key = e.which;
	else	
		return true;	
	keychar = String.fromCharCode(key);
	// control keys
	//if ((key==13) )	
			//alert("aaaaaaaa");
	
	if ((key==null) || (key==0) || (key==8) || (key==9) || (key==13) || (key==27) )	
		return true;
	// numbers  
	if ((("ABCDEFGHIJKLMN�OPQRSTUVWXYZabcdefghijklmn�opqrstuvwxyz ").indexOf(keychar) > -1))  
		return true;
	// decimal point jump  
	else  
	return false;  
}

function ValidateEmail(evento,obj){
    email      = obj.value;
    if(email != ''){
        respuesta  = false;
        emailRegEx = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(email.match(emailRegEx)){
            respuesta = true;
        }
        else{
            alert('Debe introducir un coreo valido');
            evento.preventDefault();
            $(obj).focus();
            respuesta = false;
        }
        return respuesta;
    }
}

function comparaCampos(txt,evento,txt1,txt2){
    obj  = $(txt);
    obj1 = $(txt1);
    obj2 = $(txt2);
    key=evento.which ? evento.which : evento.keyCode;
    if(key==9 || evento.keyCode==13 || evento.keyCode==9){
        if(obj.value != obj1.value){
            titulo1    = obj.title;
            titulo2    = obj1.title;
            alert('El campo '+titulo1+' no es igual al campo ' + titulo2);
            obj.value = '';
            evento.preventDefault();
            obj.focus();
        }
        else{
            evento.preventDefault();
            obj2.focus();
        }
    }
}

function enabled_formulario_adm(op){
read = new Array('txtNombres','txtApellidos','txtNumeroDocumento','txtTelefono','txtCiudad');
butt = new Array('btn_reg');
desh = new Array('dia','mes','year','cboTipoDocumento');
switch(op){
	case 1:	
		habi = new Array('v','f','v','v','v','v','v','v','v');                
		$('p_acc').update('update');
		buclesMulti('readOnly',read,false);
		buclesMulti('enable',desh,'');
		buclesMulti('btnHab',butt,habi);
	break;
	case 2:
		habi = new Array('f','v','f','f','f','f','f','f');
		$('p_acc').update('inserted');
		buclesMulti('readOnly',read,true);
		buclesMulti('disable',desh,'');
		buclesMulti('btnHab',butt,habi);
        $('botones').setStyle({display:'anone'});
	break;
	case 3:
		habi = new Array('v','f','f','f','v');
		$('acciontit').update($('accion').value='nuevo');
		buclesMulti('value',read,'');
		buclesMulti('value',desh,'');
		buclesMulti('btnHab',butt,habi);
	break;
	case 4:
		habi = new Array('v','f','f','f','v');
		$('acciontit').update($('accion').value='nuevo submenu');
		buclesMulti('value',read,'');
		buclesMulti('value',desh,'');
		buclesMulti('btnHab',butt,habi);
	break;
	case 5:
		habi = new Array('v','f','v','v','v','v','v','v','v');
		$('p_acc').update('update');
		buclesMulti('readOnly',read,false);
		buclesMulti('enable',desh,'');
		buclesMulti('btnHab',butt,habi);
	break;
	}
	$('form_detalle').focusFirstElement(); 
}

function buclesMulti(op,array,val){
switch(op){	
	case 'disable':
		for(i=0;i<array.length;i++){
          $(array[i]).disable();
		}
	break;
	case 'enable':
		for(i=0;i<array.length;i++){
           $(array[i]).enable();
		}
	break;
	case 'value':
		for(i=0;i<array.length;i++){
			$(array[i]).value='';
		}
	break;
	case 'readOnly':
		for(i=0;i<array.length;i++){
            $(array[i]).readOnly=val;
	}
	break;
	case 'btnHab':
            $('botones').setStyle({display:'block'});
            for(i=0;i<array.length;i++){
            var dis=val[i]=='v'?'inline':'none';
            $(array[i]).setStyle({display:dis});
            }
	break;
    case 'tabHab':
		for(i=0;i<array.length;i++){
                var valor = array[i].split("-");
		var classN=valor[0]==val.id?'tabsel':'tab';
                var divDis=valor[0]==val.id?'block':'none';
		$(valor[0]).className=classN;
                $('div_'+valor[0]).setStyle({display:divDis});
                if(valor[1] && valor[0]==val.id) $(valor[1]).select();
		}
	break;
	}
}