function validaMail(m) {			
	//Expressão regular para validação de mail
	filtro =  /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	caixa_email = document.querySelector('.msg-email');
	if(m.value == "") 
		return true; 		// Mail vazio não valida
	if(filtro.test(m.value)){		// Mail cumpre as regras
		caixa_email.style.display = 'none';
	}
	else{				// Mail não cumpre as regras
		caixa_email.innerHTML = "*Formato de E-mail invalido";
		caixa_email.style.display = 'block';
	}
	
	if (m.value.length==0) { 
		document.getElementById("txtmail").innerHTML=""; 
		document.getElementById("txtmail").style.display="none"; 
		return;
	}
	if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
	} 
	else {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById("txtmail").style.display="block";
			document.getElementById("txtmail").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","includes/existemail.php?q="+m.value,true);
	xmlhttp.send();
}




function validaAlerta(m) {	

		//Expressão regular para validação de mail
	caixa_alerta = document.querySelector('.msg-alerta');

		
	
	if(m.value == "") 
		return true; 		// Mail vazio não valida
	if(filtro.test(m.value)){		// Mail cumpre as regras
		caixa_email.style.display = 'none';
	}
	else{				// Mail não cumpre as regras
		caixa_email.innerHTML = "*Formato de E-mail invalido";
		caixa_email.style.display = 'block';
	}

	if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
	} 
	else {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById("txtmail").style.display="block";
			document.getElementById("txtmail").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","Login/validacoes/alerta.php?q="+m.value,true);
	xmlhttp.send();
}




function valorNota(n) {
	filtron = /^[0-9]+$/;
	caixa_nota = document.querySelector('.msg-nota');
	if(n.value == "")
		return true;
	if(n.value > 10){
		caixa_nota.innerHTML = "*A nota não pode ser maior que 10";
		caixa_nota.style.display = 'block';	
	}
	else{
		caixa_nota.style.display = 'none';
	}	
}


function validaPass(m) {
	//Expressão regular para validação de pass
	var filtro = new RegExp("(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}");
	caixa_pass = document.querySelector('.msg-pass');
	if(m.value == "") 
		return true; 		// pass vazio não valida
	if(filtro.test(m.value)){		// pass cumpre as regras
		caixa_pass.style.display = 'none';
	}
	else{				// pass não cumpre as regras
		caixa_pass.innerHTML = "*Formato de pass invalido*";
		caixa_pass.style.display = 'block';
	}
	}
	


function validaCPass(){
	caixa_cpass = document.querySelector('.msg-cpass');
  if (document.getElementById('psw1').value != document.getElementById('psw').value) {
		caixa_cpass.innerHTML = "*A password não é igual!";
		caixa_cpass.style.display = 'block';
  } 
  else {
	  	caixa_cpass.innerHTML = '';
		caixa_cpass.style.display = 'none';

  }
}

function validaCPassPerfil(){
	caixa_cpass = document.querySelector('.msg-acpass');
  if (document.getElementById('altcpsw').value != document.getElementById('altpsw').value) {
		caixa_cpass.innerHTML = "*A confirmação da password não é igual com a password";
		caixa_cpass.style.display = 'block';
  } 
  else {
		caixa_cpass.style.display = 'none';
  }
}

function validaCPassPerfil2(){
	caixa_cpass = document.querySelector('.msg-acpass');
  if (document.getElementById('altcpsw').value != document.getElementById('altpsw').value || document.getElementById('altcpsw').value=="" || document.getElementById('altpsw').value == "") {
		caixa_cpass.innerHTML = "*A confirmação da password não é igual com a password ou está com os campos vazios!";
		caixa_cpass.style.display = 'block';
		return false;
  } 
  else {
		caixa_cpass.style.display = 'none';

  }
}

function validaCPassadd2(){
	caixa_cpass = document.querySelector('.msg-acpass');
  if (document.getElementById('cpassadd').value != document.getElementById('passadd').value || document.getElementById('cpassadd').value=="" || document.getElementById('passadd').value == "") {
		caixa_cpass.innerHTML = "*A confirmação da password não é igual com a password!";
		caixa_cpass.style.display = 'block';
		return false;
  } 
  else {
		caixa_cpass.style.display = 'none';

  }
}

function validaCPassAlt(){
	caixa_cpass = document.querySelector('.msg-acpass');
  if (document.getElementById('caltpasse').value != document.getElementById('altpasse').value || document.getElementById('caltpasse').value=="" || document.getElementById('altpasse').value == "") {
		caixa_cpass.innerHTML = "*A confirmação da password não é igual com a password!";
		caixa_cpass.style.display = 'block';
		return false;
  } 
  else {
		caixa_cpass.style.display = 'none';

  }
}

function validaRegisto(){
	caixa_nome = document.querySelector('.msg-nome');
	caixa_email = document.querySelector('.msg-email');
	caixa_data = document.querySelector('.msg-data');
	caixa_pass = document.querySelector('.msg-pass');
	caixa_cpass = document.querySelector('.msg-cpass');
	caixa_foto= document.querySelector('.msg-foto');
	nome=document.getElementById('rusrname');
	mail=document.getElementById('remail');
	data=document.getElementById('rdata');
	cp=document.getElementById('rcpsw');
	pass=document.getElementById('rpsw');
	foto=document.getElementById('rfoto');
	
	if(nome.value == "" || mail.value == "" || data.value == "" || pass.value == "" || cp.value == "" || foto.value == "" || pass.value != cp.value){
		if(nome.value == ""){
			caixa_nome.innerHTML = "*Obritatório preencher";
			caixa_nome.style.display = 'block';
		}
		if( mail.value == ""){
			caixa_email.innerHTML = "*Obritatório preencher";
			caixa_email.style.display = 'block';
		}
		if(data.value == "" ){
			caixa_data.innerHTML = "*Obritatório preencher";
			caixa_data.style.display = 'block';
		}
		if(pass.value == "" ){
			caixa_pass.innerHTML = "*Obritatório preencher";
			caixa_pass.style.display = 'block';
		}
		if(cp.value == ""){
			caixa_cpass.innerHTML = "*Obritatório preencher";
			caixa_cpass.style.display = 'block';
		}
		if(foto.value == "" ){
			caixa_foto.innerHTML = "*Obritatório preencher";
			caixa_foto.style.display = 'block';
		}
		if(pass.value != cp.value){
			caixa_cpass.innerHTML = "*A confirmação da password não é igual com a password";
			caixa_cpass.style.display = 'block';
		}
		return false;
	}
	else{
		caixa_nome.style.display = 'none';
		caixa_email.style.display = 'none';
		caixa_data.style.display = 'none';
		caixa_pass.style.display = 'none';
		caixa_cpass.style.display = 'none';
		caixa_foto.style.display = 'none';
	}
}

function validaRegistoAdd(){
	caixa_nome = document.querySelector('.msg-nome');
	caixa_email = document.querySelector('.msg-email');
	caixa_data = document.querySelector('.msg-data');
	caixa_pass = document.querySelector('.msg-pass');
	caixa_cpass = document.querySelector('.msg-acpass');
	caixa_foto= document.querySelector('.msg-foto');
	caixa_nivel= document.querySelector('.msg-nivel');
	nome=document.getElementById('addnome');
	mail=document.getElementById('addmail');
	data=document.getElementById('adddata');
	cp=document.getElementById('cpassadd');
	pass=document.getElementById('passadd');
	foto=document.getElementById('addfoto');
	nivel=document.getElementById('addnivel');
	
	if(nome.value == "" || mail.value == "" || data.value == "" || pass.value == "" || cp.value == "" || foto.value == "" || nivel.value == "" || pass.value != cp.value){
		if(nome.value == ""){
			caixa_nome.innerHTML = "*Obritatório preencher";
			caixa_nome.style.display = 'block';
		}
		if( mail.value == ""){
			caixa_email.innerHTML = "*Obritatório preencher";
			caixa_email.style.display = 'block';
		}
		if(data.value == "" ){
			caixa_data.innerHTML = "*Obritatório preencher";
			caixa_data.style.display = 'block';
		}
		if(pass.value == "" ){
			caixa_pass.innerHTML = "*Obritatório preencher";
			caixa_pass.style.display = 'block';
		}
		if(cp.value == ""){
			caixa_cpass.innerHTML = "*Obritatório preencher";
			caixa_cpass.style.display = 'block';
		}
		if(foto.value == "" ){
			caixa_foto.innerHTML = "*Obritatório preencher";
			caixa_foto.style.display = 'block';
		}
		if(pass.value != cp.value){
			caixa_cpass.innerHTML = "*A confirmação da password não é igual com a password";
			caixa_cpass.style.display = 'block';
		}
		if(nivel.value == ""){
			caixa_nivel.innerHTML = "*Obritatório preencher";
			caixa_nivel.style.display = 'block';
		}
		if(nivel.value > 2 ){
			caixa_nivel.innerHTML = "*O nivel só pode ser 1(Administrador) ou 2(Utilizador Normal)";
			caixa_nivel.style.display = 'block';
		}
		return false;
	}
	else{
		caixa_nome.style.display = 'none';
		caixa_email.style.display = 'none';
		caixa_data.style.display = 'none';
		caixa_pass.style.display = 'none';
		caixa_cpass.style.display = 'none';
		caixa_foto.style.display = 'none';
		caixa_nivel.style.display = 'none';
	}
}

function existenome(e) {
	if (e.value.length==0) { 
		document.getElementById("txtlogin").innerHTML=""; 
		document.getElementById("txtlogin").style.display="none"; 
		return;
	}
	if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
	} 
	else {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById("txtlogin").style.display="block";
			document.getElementById("txtlogin").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","includes/getexiste.php?q="+e.value,true);
	xmlhttp.send();
}

function validaLogin(){
	lnome=document.getElementById('lusrname');
	lpass=document.getElementById('lpsw');
	if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
	} 
	else {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById("loginvalida").style.display="block";
			document.getElementById("loginvalida").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","Login/validacoes/validalogin.php?ln="+lnome.value+"&lp="+lpass.value,false);
	xmlhttp.send();
	if(xmlhttp.responseText == false){
		return true;
	}
	else{
		return false;
	}
}

function validaLoginPaci(){
	lnome=document.getElementById('lusrnameP');
	lpass=document.getElementById('lpswP');
	if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
	} 
	else {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById("loginvalidaP").style.display="block";
			document.getElementById("loginvalidaP").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","Login/validacoes/validaloginP.php?ln="+lnome.value+"&lp="+lpass.value,false);
	xmlhttp.send();
	if(xmlhttp.responseText == false){
		return true;
	}
	else{
		return false;
	}
}

function validaLoginFami(){
	lnome=document.getElementById('lusrnameF');
	lpass=document.getElementById('lpswF');
	if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
	} 
	else {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById("loginvalidaF").style.display="block";
			document.getElementById("loginvalidaF").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","Login/validacoes/validaloginF.php?ln="+lnome.value+"&lp="+lpass.value,false);
	xmlhttp.send();
	if(xmlhttp.responseText == false){
		return true;
	}
	else{
		return false;
	}
}



function validaNivel(n) {
	filtron = /^[0-9]+$/;
	caixa_nivel = document.querySelector('.msg-nivel');
	if(n.value > 2){
		caixa_nivel.innerHTML = "*O nivel só pode ser 1(Administrador) ou 2(Utilizador Normal)";
		caixa_nivel.style.display = 'block';	
	}
	else{
		caixa_nivel.style.display = 'none';
	}	
}

