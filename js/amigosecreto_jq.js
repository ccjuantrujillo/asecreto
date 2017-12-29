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

$('#txtEmail').live('keydown', function(e) {
  var keyCode = e.keyCode || e.which;
  if (keyCode == 9 || keyCode == 13) {
        e.preventDefault();
        $("#txtEmail2").focus();
  }
});

function validar_campo(e){
  var keyCode = e.keyCode || e.which;
  if (keyCode == 9 || keyCode == 13) {
        e.preventDefault();
        $("#txtEmail2").focus();
  }
}

function validFormSalt(opcion,objeto,evento,salto){
    key=evento.which ? evento.which : evento.keyCode;
    salto="#"+salto;
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
            var resp=ValidateEmail(objeto.value);
            var proxsalto = resp==true?salto:objeto.value;
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

function ValidateEmail(txtEmail){
    return true;
}