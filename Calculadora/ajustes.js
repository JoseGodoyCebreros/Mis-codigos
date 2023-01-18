var pantalla = document.getElementById('pantalla');

var operadorA;
var operadorB;
var operacion;

function init(){

	var reset = document.getElementById('reiniciar');
	var suma = document.getElementById('suma');
	var resta = document.getElementById('resta');
	var multiplicacion = document.getElementById('multiplicacion');
	var division = document.getElementById('division');
	var igual = document.getElementById('igual');
	
	var uno = document.getElementById('uno');
	var dos = document.getElementById('dos');
	var tres = document.getElementById('tres');
	var cuatro = document.getElementById('cuatro');
	var cinco = document.getElementById('cinco');
	var seis = document.getElementById('seis');
	var siete = document.getElementById('siete');
	var ocho = document.getElementById('ocho');
	var nueve = document.getElementById('nueve');
	var cero = document.getElementById('cero');

	
	uno.onclick = function(e){
		pantalla.textContent = pantalla.textContent + "1";
	}

	dos.onclick = function(e){
		pantalla.textContent = pantalla.textContent + "2";
	}
	tres.onclick = function(e){
		pantalla.textContent = pantalla.textContent + "3";
	}
	cuatro.onclick = function(e){
		pantalla.textContent = pantalla.textContent + "4";
	}
	cinco.onclick = function(e){
		pantalla.textContent = pantalla.textContent + "5";
	}
	seis.onclick = function(e){
		pantalla.textContent = pantalla.textContent + "6";
	}
	siete.onclick = function(e){
		pantalla.textContent = pantalla.textContent + "7";
	}
	ocho.onclick = function(e){
		pantalla.textContent = pantalla.textContent + "8";
	}
	nueve.onclick = function(e){
		pantalla.textContent = pantalla.textContent + "9";
	}

	cero.onclick = function(e){
		pantalla.textContent = pantalla.textContent + "0";
	}

	reset.onclick = function(e){
		pantalla.textContent = "";
	}

	suma.onclick = function(e){
		operadorA = pantalla.textContent;
		operacion = "+",
		limpiar();
	}

	resta.onclick = function(e){
		operadorA = pantalla.textContent;
		operacion = "-",
		limpiar();
	}

	multiplicacion.onclick = function(e){
		operadorA = pantalla.textContent;
		operacion = "*",
		limpiar();
	}

	division.onclick = function(e){
		operadorA = pantalla.textContent;
		operacion = "/",
		limpiar();
	}

	igual.onclick = function(e){
		operadorB = pantalla.textContent;
		resolver();
	}

}

function limpiar(){
	pantalla.textContent = "";
}

function resetear(){
	pantalla.textContent = "";
	operadorA = 0;
	operadorB = 0;
	operacion = "";
}


function resolver(){
	var res = 0;

	switch(operacion){
		case "+":
			res = parseFloat(operadorA) + parseFloat(operadorB);
			break;

		case "-":
			res = parseFloat(operadorA) - parseFloat(operadorB);
			break;

		case "*":
			res = parseFloat(operadorA) * parseFloat(operadorB);
			break;

		case "/":
			res = parseFloat(operadorA) / parseFloat(operadorB);
			break;
		}

		resetear();

		pantalla.textContent = res;
	}


init();

// let numero = prompt("Ingresa un numero: ")

// numero *= 12;

// document.write("su numero multiplicado por 12 es: " + numero)