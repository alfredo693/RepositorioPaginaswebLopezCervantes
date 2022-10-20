//Expresion de funcion
var fecha = new date();

function saludar(nombre){
    console.log('Hola $(Nombre).');
}
saludar('Alfredo');

//IFE
(function saludar(nombre){
    console.log('Hola $(Nombre).');
})
saludar('Alfredo');

//Funcion flecha

var saludar = (nombre) => "Hola" + nombre;
console.log(saludar("Alfredo"));

//Constructor de funcion