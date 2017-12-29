jQuery(function ($) {
	$('#basic-modal .basic').click(function (e) {
		//Aqui colo esto nuevo.
		usuario    = $("input#txtUsuario").val();
		clave      = $("input#txtPassword").val();
		dataString = 'txtUsuario='+ usuario + '&txtPassword=' + clave;
                obl        = new Array('txtUsuario','txtPassword');
                if(validablancos(obl)){
                    $.ajax({
                            type    : "GET",
                            url     : "index.php?accion=ingreso_administrador",
                            data    : dataString,
                            success : function(response) {
                                    if(response == '1'){
                                      $('#basic-modal-content').modal();
                                    }
                                    else if(response == '2'){
                                       location.href="index.php?accion=muro_de_grupo";
                                    }
                                    else if(response == '3'){
                                        alert("Usuario y/o contrasena \nequivocados");
                                    }
                                    else if(response == '4'){
                                        alert("El usuario es administrador \nde mas de 2 grupo");
                                    }
                            }
                    });
                }
	});

	$('#btn_creategrup .basic').click(function (e) {
		location.href="index.php?accion=ingresa_datos_grupo";
	});

        /***************************Otro modal************************/
	$('#basic-modal2 .crear').click(function (e) {
              dataString  = $('form').serialize();
              nombreGrupo = $('#txtNombreGrupo').val();
              nombreGrupo = nombreGrupo.toUpperCase();
              obl         = new Array('txtNombreGrupo','txtConfirmaNombre','txtNumeroAmigos');
              if(validablancos(obl)){
                    $.ajax({
                            type    : "GET",
                            url     : "index.php?accion=crear_grupo",
                            data    : dataString,
                            success : function(response) {
                                    if(response){
                                      $('#valGrupo').html(nombreGrupo);
                                      $('#basic-modal-content').modal();
                                      
                                    }
                            }
                    });
                }
	});
	
	$('#btn_invitar .basic').click(function (e) {
		location.href="index.php?accion=invitar_amigos";
	});
	
	/***************************Modal enviar invitaciones************************/
    	$('#basic-modal3 .basic').click(function (e) {
              dataString  = $('form').serialize();
              cantidad    = $("#txtCantidad").val();
              if(valida_frmInvitacion(cantidad)){
                    $.ajax({
                            type    : "GET",
                            url     : "index.php?accion=enviar_invitaciones",
                            data    : dataString,
                            success : function(response) {
                                    if(response){
                                      $('#basic-modal-content').modal();
                                    }
                            }
                    });
                }
	});

        $('#btn_verpag .basic').click(function (e) {
            location.href="index.php?accion=muro_de_grupo";
	});

});

function activaNombreEmpresa(obl){
    if(obl.value=='3'){
        $("#txtNombreEmpresa").attr("disabled",false);
        $("#txtNombreEmpresa").focus();
    }
    else{
        $("#txtNombreEmpresa").val('');
        $("#txtNombreEmpresa").attr("disabled",true);
        $("#txtNumeroAmigos").focus();
    }
}

function validablancos(a){
    var cant= a.length;
    for(i=0;i<cant;i++){
        campo = "input#"+a[i];
        x=$(campo).val();
        t=$(campo).attr("title");
        if(x==''){
            alert('Debe ingresar los datos de '+t+'!');
            $(campo).focus();
            return false;
        }
    }
    return true;
}

/***********************************  Funciones para validar *********************************************/
function validFormSalt(opcion,objeto,evento,salto){
    key=evento.which ? evento.which : evento.keyCode;
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
        valor=$(salto).val();
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
            resp=ValidateEmail(evento,objeto);
            proxsalto = resp==true?salto:objeto;
            $(proxsalto).focus();
        }
        break;
    case 'web':
        if(key==9 || evento.keyCode==13 || evento.keyCode==9){
            $(salto).focus();
        }
        return dirwebonly(objeto,evento);
    break;
    case 'cbo':
        $(salto).focus();
        break;
    }
}

function comparaCampos(txt,evento,txt1,txt2){
    txt1 = "#"+txt1;
    txt2 = "#"+txt2;
    obj  = $(txt);
    obj1 = $(txt1);
    obj2 = $(txt2);
    key=evento.which ? evento.which : evento.keyCode;
    if(key==9 || evento.keyCode==13 || evento.keyCode==9){
        if(obj.val() != obj1.val()){
            titulo1    = obj.attr("title");
            titulo2    = obj1.attr("title");
            alert('El campo '+titulo1+' no es igual al campo ' + titulo2);
            obj.val('');
            evento.preventDefault();
            obj.focus();
        }
        else{
            evento.preventDefault();
            obj2.focus();
        }
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
    email     = $(obj).val();
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

function valida_frmInvitacion(cantidad){
    resultado = true;
    for(i=0;i<cantidad;i++){
        a = "txtNombre["+i+"]";
        b = "txtEmail["+i+"]";
        txtNombre = document.getElementById(a).value;
        txtEmail  = document.getElementById(b).value;
        if(txtNombre!='' && txtEmail==''){
            resultado = false;
            alert('Debe escribir una direccion de correo para el invitado');
            break;
        }
        else if(txtNombre=='' && txtEmail!=''){
            resultado = false;
            alert('Debe escribir el nombre del invitado');
            break;
        }
        else if(txtNombre=='' && txtEmail==''){
            if(i<4){
                resultado = false;
                alert('Debe invitar al menos a 4 amigos.');
                break;
            }
        }
    }
    return resultado;
}