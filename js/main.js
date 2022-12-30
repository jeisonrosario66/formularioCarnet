const carnet = document.querySelector('#carnet'),
    dato_1_ID = document.querySelector('#carnet .dato_1_inp'),
    dato_2_ID = document.querySelector('#carnet .dato_2_inp'),
	dato_3_ID = document.querySelector('#carnet .dato_3_inp'),
	formulario = document.querySelector('#formulario-carnet'),
	  //nitCarnet = document.querySelector('#carnet .numero'),
	foto = document.querySelector('#foto'),
	  //firma = document.querySelector('#carnet .firma p'),
	  //marcaVehiculo = document.querySelector('#carnet .direccion'),
	telResponsable = document.querySelector('#carnet .telefono');
	  
//input foto de perfil
$("#inputFoto").on("change", function(){
	var imagen = $(this)[0].files[0];
	var fileReader = new FileReader();
	fileReader.readAsDataURL(imagen);
	
	foto.innerHTML = '';
	fileReader.onload = function(){
		$("#foto").append("<img src= '" + fileReader.result + "'>");
	};	
});

//Input dato 1 (type text)
formulario.dato_1.addEventListener('keyup', (e) => {
	let valorInput = e.target.value;

	formulario.dato_1.value = valorInput
	//elinamos los numeros que se escriban en el input de nombre
	.replace(/[0-9]/g,'');

	dato_1_ID.textContent = valorInput;

	if (valorInput == '') {
		dato_1_ID.textContent = 'Dato 1 input';
	}
});

//Input dato 2 (type text)
formulario.dato_2.addEventListener('keyup', (e) => {
	let valorInput = e.target.value;

	formulario.dato_2.value = valorInput
	//elinamos los numeros que se escriban en el input de nombre
	.replace(/[0-9]/g,'');

	dato_2_ID.textContent = valorInput;

	if (valorInput == '') {
		dato_2_ID.textContent = 'Dato 1 input';
	}
});

//input telefono de responsable
formulario.dato_3.addEventListener('keyup', (e) =>{
	let valorInput = e.target.value;

	formulario.dato_3.value = valorInput
	//eliminamos espacios en blanco
	.replace(/\s/g,'')
	//eliminar las letras 
	.replace(/\D/g,'')
	//ponemos espacio cada 4 numeros
	//.replace(/([0-9]{4})/g,'$1 ')
	//elimina el ultimo espacio
	.trim();

	dato_3_ID.textContent = valorInput;


	if(valorInput == ''){
		dato_3_ID.textContent = 'Dato 3 input';
	}
});
