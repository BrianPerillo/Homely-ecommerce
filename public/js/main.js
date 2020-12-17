// Select de paises
var selectPaises = document.querySelector('#country');

fetch('https://restcountries.eu/rest/v2/all')
    .then(function(respuesta){
      return respuesta.json();
    })

    .then(function(paises){
      for (var i = 0; i < paises.length; i++) {
        var nuevoPais = document.createElement('option');
        nuevoPais.setAttribute('value', paises[i].name);
        nuevoPais.innerText = paises[i].name;
        selectPaises.append(nuevoPais);
      }
    })

    .catch(function(error){
      console.log(error)
    })



window.onload = function(){

    var provincia = document.getElementById('state')
    provincia.style.display = "none";
    var selectProv = document.querySelector('#prov');


    fetch('https://dev.digitalhouse.com/api/getProvincias')
        .then(function(respuesta){
          return respuesta.json();
        })

        .then(function(provincias){
          for (var i = 0; i < provincias.data.length; i++) {
            var nuevaProv = document.createElement('option');
            nuevaProv.setAttribute('value', provincias.data[i].state);
            nuevaProv.innerText = provincias.data[i].state;
            selectProv.append(nuevaProv);
          }
        })

        .catch(function(error){
          console.log(error)
        })



      document.getElementById("state").addEventListener("change", listadoProvincias);
      function listadoProvincias(){
        var provincia = document.getElementById('state')
        provincia.style.display = "block";
        console.log("Listado de provincias ok");
      }



      document.querySelector("#country").onchange = function() {
        if (this[this.selectedIndex].value === "Argentina") {
          var provincia = document.getElementById('state')
          provincia.style.display = "block";
            // document.querySelector("#second").className = "show";
          } else {
            var provincia = document.getElementById('state')
            provincia.style.display = "none";
              // document.querySelector("#second").className = "";
        }
      };


}

// Primero capturamos los campos
// // Validamos los campos
var campoNombre = document.querySelector('input[name=name]');
campoNombre.onblur = function(){
  console.log(campoNombre.value);
  if(this.value == ''){
    alert("El campo nombre no puede quedar vacio");
  }
}

// NO FUNCIONA LA VALIDACION DE LENGHT
var campoUsername = document.querySelector('input[name=username]');
var username = campoUsername;


//var username = new String( "This is string" );
//         document.write("str.length is:" + str.length);

campoUsername.onblur = function(){
//  console.log(username.value.length);
  if(this.value == ''){
    alert("El campo usuario no puede quedar vacio");
  } else if (username.value.length < 5){
        alert("El nombre de usuario debe tener al menos 5 caracteres");
      }
}
//campoUsername.onchange = function(){
//  if (this.value.lenght < 5){
//    alert("El nombre de usuario debe tener al menos 5 caracteres");
//  }
//}
//




// // Expresion regular para verificar que tenga el formato de email
// NO ESTA FUNCIONANDO!!

var campoEmail = document.querySelector('input[name=email]');
var emailRegex = "[A-Z0-9a-z._%+-]+@[A-Za-z0-9.-]+\\.[A-Za-z]{2,64}";
campoEmail.onblur = function(){
  if(this.value == ''){
    alert("El campo email no puede quedar vacio");
  } else if(!emailRegex.test(this.value)){
    alert("El mail debe tener un formato valido");
  }
}
//
// // Corroboramos que el formulario no se envie si estos campos no estan bien completados
var elFormulario = document.querySelector('.theForm');
elFormulario.onsubmit = function(event){
  if(campoNombre.value == '' || campoNombre.value == '' ){
    alert("Faltan completar campos obligatorios");
    event.preventDefault();
  }
}


//window.addEventListener("load", function() {
//  document.querySelector("form").addEventListener("submit", function(event) {
//
//    event.preventDefault()
//
//  })
//});
