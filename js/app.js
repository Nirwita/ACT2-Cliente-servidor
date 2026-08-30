// Seleccionamos el formulario
const formulario = document.querySelector("form");

// Añadimos un evento cuando se envía el formulario
formulario.addEventListener("submit", function (event) {
  // Evitamos que la página se recargue
  event.preventDefault();

  // Obtenemos los valores de los campos
  const nombre = document.querySelector("#nombre").value;
  const correo = document.querySelector("#correo").value;
  const asunto = document.querySelector("#asunto").value;
  const mensaje = document.querySelector("#mensaje").value;

  // Comprobamos que ningún campo esté vacío
  if (nombre === "" || correo === "" || asunto === "" || mensaje === "") {
    console.log("Por favor, completa todos los campos.");
    return;
  }

  // Creamos un objeto con los datos
  const datosFormulario = {
    nombre: nombre,
    correo: correo,
    asunto: asunto,
    mensaje: mensaje,
  };

  // Mostramos los datos en la consola
  console.log(datosFormulario);
});
