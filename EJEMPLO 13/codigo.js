const getName = async ()=>{
	let nombre = document.querySelector(".d-nombre");
	
    try{
    	informacion = await axios("informacion.txt");
    	nombre.innerHTML = informacion.data.nombre;
    }catch(e){
    	nombre.innerHTML = "No se encontro la informacion";
    }
		// .then(res=> {
		// 	if (res.ok) Promise.resolve(res)
		// 	else Promise.reject(res);
		// })
		// .then(res => console.log(res))
		// .catch(e=>console.log(e))
}

const getAge = async ()=>{
	let edad = document.querySelector(".d-edad");

	try{
    	informacion = await axios("informacion.txt");
    	edad.innerHTML = informacion.data.edad;
    }catch(e){
    	edad.innerHTML = "No se encontro la informacion"
    }
}

const getBorrar = async ()=>{
	let borrar = document.querySelector(".d-nombre");
    let borrar2 = document.querySelector(".d-edad");
	
	borrar.innerHTML = "";
	borrar2.innerHTML = "";
}


const btn1 = async ()=>{
    let b1 = document.querySelector(".d-nombre");
    b1.innerHTML = "Apretaste el boton 1"
}

const btn2 = async ()=>{
    let b2 = document.querySelector(".d-nombre");
    b2.innerHTML = "Apretaste el boton 2"
}

const btn3 = async ()=>{
    let b3 = document.querySelector(".d-nombre");
    b3.innerHTML = "Apretaste el boton 3"
}

const btn4 = async ()=>{
    let b4 = document.querySelector(".d-nombre");
    b4.innerHTML = "Apretaste el boton 4"
}

const btn5 = async ()=>{
    let b5 = document.querySelector(".d-nombre");
    b5.innerHTML = "Apretaste el boton 5"
}

const btn6 = async ()=>{
    let b6 = document.querySelector(".d-nombre");
    b6.innerHTML = "Apretaste el boton 6"
}



document.getElementById('boton-nombre').addEventListener("click",getName);

document.getElementById('boton-edad').addEventListener("click",getAge);

document.getElementById('borrar').addEventListener("click",getBorrar)

document.getElementById('boton-1').addEventListener("click",btn1);
document.getElementById('boton-2').addEventListener("click",btn2);
document.getElementById('boton-3').addEventListener("click",btn3);
document.getElementById('boton-4').addEventListener("click",btn4);
document.getElementById('boton-5').addEventListener("click",btn5);
document.getElementById('boton-6').addEventListener("click",btn6);

// LIBRERIA AXIOS

// axios("informacion.txt")
// 	.then(res=>console.log(res.data))

// const deserializado = { "variable1" : "JOSE", "variable2" : "JORGE" };
// //JSON
// const serializado = JSON.stringify(deserializado)
// console.log(typeof serializado)