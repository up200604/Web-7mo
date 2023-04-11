function login() {
    // Obtener los valores ingresados en los campos de usuario y contraseña del formulario
    var usuario = document.getElementById("usuario").value;
    var contrasena = document.getElementById("contrasena").value;
  
    // Leer el archivo de texto con las credenciales de los usuarios
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "usuarios.txt", false);
    xmlhttp.send();
    var usuarios = xmlhttp.responseText.split("\n");
  
    // Verificar si las credenciales ingresadas son válidas
    var credenciales_validas = false;
    for (var i = 0; i < usuarios.length; i++) {
      var usuario_actual = usuarios[i].split(":");
      if (usuario_actual[0] == usuario && usuario_actual[1] == contrasena) {
        credenciales_validas = true;
        break;
      }
    }
  
    // Mostrar un mensaje dependiendo del resultado de la verificación
    var mensaje = document.getElementById("mensaje");
    if (credenciales_validas) {
      mensaje.innerHTML = "Inicio de sesión exitoso";
    } else {
      mensaje.innerHTML = "Usuario o contrasena incorrectos";
    }
  }
  