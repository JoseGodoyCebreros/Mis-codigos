let pantalla = document.getElementById('pantalla');
let cantNumeros = 0;
let cantOperaciones = 0;
let auxiliar = "";
let numeros = [];
let operaciones = [];

function init(){

	let reset = document.getElementById('reiniciar');
	let suma = document.getElementById('suma');
	let resta = document.getElementById('resta');
	let multiplicacion = document.getElementById('multiplicacion');
	let division = document.getElementById('division');
	let igual = document.getElementById('igual');
	
	let uno = document.getElementById('uno');
	let dos = document.getElementById('dos');
	let tres = document.getElementById('tres');
	let cuatro = document.getElementById('cuatro');
	let cinco = document.getElementById('cinco');
	let seis = document.getElementById('seis');
	let siete = document.getElementById('siete');
	let ocho = document.getElementById('ocho');
	let nueve = document.getElementById('nueve');
	let cero = document.getElementById('cero');

	
	function recibeNumeros( numeroIngresado) {
    	auxiliar = auxiliar + numeroIngresado;
  	  mostrarEnPantalla( auxiliar );
	}

        
	uno.onclick = function(e){
		recibeNumeros(1)
	}

	dos.onclick = function(e){
		recibeNumeros(2)
	}

	tres.onclick = function(e){
		recibeNumeros(3)
	}

	cuatro.onclick = function(e){
		recibeNumeros(4)
	}
	
	cinco.onclick = function(e){
		recibeNumeros(5)
	}

	seis.onclick = function(e){
		recibeNumeros(6)
	}

	siete.onclick = function(e){
		recibeNumeros(7)
	}

	ocho.onclick = function(e){
		recibeNumeros(8)
	}

	nueve.onclick = function(e){
		recibeNumeros(9);
	}

	cero.onclick = function(e){
		pantalla.textContent === '0' || numeros.length === 0 
		? pantalla.textContent = 0
	 	: recibeNumeros(0);
	}

	reset.onclick = function(e){
		resetear();
	}

	suma.onclick = function(e){
		recibeOperaciones("+")
		limpiar();
	}

	resta.onclick = function(e){
		recibeOperaciones("-")
		limpiar();
	}

	multiplicacion.onclick = function(e){
		recibeOperaciones("*")
		limpiar();
	}

	division.onclick = function(e){
		recibeOperaciones("/")
		limpiar();
	}

	igual.onclick = function(e){
		recibeOperaciones("=")
	}

}

	function limpiar(){
		pantalla.textContent = "";
	}

	function resetear(){
		numeros = [];
		operaciones = [];
		cantNumeros = 0;
	    cantOperaciones = 0;
		auxiliar = ""
		limpiar();
	}

	function mostrarEnPantalla( numero ) {
	    pantalla.textContent = numero;
	}


function recibeOperaciones( operacionIngresada ) {
    numeros.push(pantalla.textContent);
    
    if( operacionIngresada == "=" ) {
    	
        resuelve();
    }
    else{

        operaciones.push( operacionIngresada );
        
        if (pantalla.textContent != "") {
        	cantOperaciones++;
        	cantNumeros++;
        }
        auxiliar = "";
    }
}

function resuelve() {

    let numeroA = numeros[ 0 ];

    for( i = 1; i <= cantNumeros; i++ ) {
        numeroA = operar( numeroA, numeros[ i ], operaciones[i - 1] );
	    
    }
    mostrarEnPantalla(numeroA);

    numeros = []
    operaciones = []
	cantOperaciones = 0;
	cantNumeros = 0;
}

function operar( numeroA, numeroB, operacion ) {
    if( operacion == "+" ) {
        return parseInt(numeroA) + parseInt(numeroB);
    }
    else if( operacion == "-" ) {
        return parseInt(numeroA) - parseInt(numeroB);
    }
    else if( operacion == "/" ) {
        return parseInt(numeroA) / parseInt(numeroB);
    }
    else if( operacion == "*" ) {
        return parseInt(numeroA) * parseInt(numeroB);
    }

}

init();
