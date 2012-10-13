function sayHello() {
	alert('Bonjour '+document.getElementById('thename').value);
}

function moveMe() {
	document.getElementById('mydiv').style.top=0;
	document.getElementById('mydiv').style.left=0;
}

function hidePrenom() {
	var isHidden = document.getElementById('prenomLine').style.visibility=='hidden';
	if (!isHidden) { //si pas caché, alors à cacher
		document.getElementById('prenomLine').style.visibility='hidden';
	}else{//sinon à montrer
		document.getElementById('prenomLine').style.visibility='visible';
	}
}