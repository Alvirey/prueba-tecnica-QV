<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Aprendiz</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <div id="logo">
            <img src="logos/logo.png" alt="Logo de la empresa">
        </div>
        <nav>
            <a href="#">Inicio</a>
            <div class="dropdown">
                <a href="#">Rutas de formación &dtrif;</a>
                <div class="submenu">
                    <a href="#">Científico de datos</a>
                    <a href="aprende.php">Rutas de formación en .Net</a>
                    <a href="#">Ruta de formación en automatización</a>
                </div>
            </div>
            <a href="#">Cursos de Formación &dtrif;</a>
            <a href="#">Cursos &dtrif;</a>
            <a href="#">Quiénes somos</a>
        </nav>
        <div id="search">
            <img src="logos/usuario.png" alt="Icono inicio de sesion">
            <a href="#"onclick="mostrarModal()">Iniciar Sesión </a>
            <img src="logos/lupa2.png" alt="Icono de búsqueda"> 
        </div>
    </header>
    <!-- modal iniciar sesion -->

    <div id="modalInicioSesion">
        <h2>Iniciar Sesión</h2>
        <label for="correo">Correo Electrónico:</label>
        <input type="text" id="correo">

        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena">

        <button id="btnacceder" onclick="validarInicioSesion()">Acceder</button>

        <!-- Botón para cerrar la ventana modal -->
        <button id="bncerrar" onclick="cerrarModal()">Cerrar</button>
    </div>
    
    <div id="fondoOscuro" class="fondo-oscuro" onclick="cerrarModal()"></div>
    <!-- script modal -->

    <script>
        function mostrarModal() {
            document.getElementById('modalInicioSesion').style.display = 'block';
            document.getElementById('fondoOscuro').style.display = 'block';
        }

        function cerrarModal() {
            document.getElementById('modalInicioSesion').style.display = 'none';
            document.getElementById('fondoOscuro').style.display = 'none';
        }

        function validarInicioSesion() {
        // Obtener valores del formulario
        var correo = document.getElementById('correo').value;
        var contrasena = document.getElementById('contrasena').value;

        // Comprobar credenciales
        if (correo === "prueba@correo.com" && contrasena === "12345678") {
            alert("Inicio de sesión exitoso");
            cerrarModal();
        } else {
            alert("Credenciales incorrectas. Inténtalo de nuevo.");
        }
    }
    </script>
    <main>
        <div class="portada">
            <div class="por">
                
                <h1>Continúa tu formación con IzyAcademy</h1>
                <p>Te ofrecemos una experiencia de aprendizaje basada en la formación por proyectos, apoyada en el uso de recursos interactivos para que tu aprendizaje sea efectivo.</p>
            

            </div>
        </div>

        <div class="titulo_novedades">
            <h2>Novedades</h2>
        </div>
            
        <div class="contenedor_novedades">

            <!-- Columna Izquierda -->
            <div class="columna1">
                <img src="logos/nv1.jpg" alt="Imagen 1">
                <div class="cuadro-azul">
                    <h3>Bienvenido a IzyAcademy</h3>
                </div>
                    <p class="texto-azul">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <hr class="linea-azul">
                
            </div>

            <!-- Columna Derecha -->
            <div class="columna2">
                <img src="logos/nv2.jpg" alt="Imagen 2">
                <div class="cuadro-azul">
                    <h3>Generación de comunidad</h3>
                </div>
                <p class="texto-azul">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

            <div class="columna3">
                <img src="logos/nv3.jpg" alt="Imagen 3">
                <div class="cuadro-azul">
                    <h3>Transferencia de conocimiento</h3>
                </div>
                <p class="texto-azul">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="columna4">
                <img src="logos/nv4.jpg" alt="Imagen 4">
                <div class="cuadro-azul">
                    <h3>Certificaciones e insignias</h3>
                </div>
                <p class="texto-azul">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="columna5">
                <img src="logos/nv5.jpg" alt="Imagen 5">
                <div class="cuadro-azul">
                    <h3>Apropiación del conocimiento</h3>
                </div>
                <p class="texto-azul">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            </div>

        </div>

        <div class="aliados">
            <h2>Aliados</h2>
            <p>Nuestros entrenamientos, procesos formativos y certificaciones cuentan con el respaldo de empresas que confían en nosotros.</p>
        </div>
            <!-- Imágenes de aliados -->
            <div class="imagenes-aliados">
                <img src="logos/aliado1.jpg" alt="Aliado 1" class="imagen-aliado">
                <img src="logos/aliado2.png" alt="Aliado 2" class="imagen-aliado">
                <img src="logos/aliado3.png" alt="Aliado 3" class="imagen-aliado">
                <img src="logos/aliado4.jpg" alt="Aliado 4" class="imagen-aliado">
                <img src="logos/aliado5.jpg" alt="Aliado 5" class="imagen-aliado">
                <img src="logos/aliado6.jpg" alt="Aliado 6" class="imagen-aliado">
                <img src="logos/aliado7.png" alt="Aliado 7" class="imagen-aliado">
                <img src="logos/aliado8.png" alt="Aliado 8" class="imagen-aliado">
            </div>
            <h2>Regístrarse</h2>
            <section class="registro">
            
            <div class="imagen-operadora">
                <img src="logos/regist.png" alt="Operadora">
            </div>
            <div class="formulario-registro">
                <form action="procesar_registro.php" method="POST">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>

                    <label for="apellidos">Apellidos:</label>
                    <input type="text" id="apellidos" name="apellidos" required>

                    <label for="correo">Correo electrónico:</label>
                    <input type="email" id="correo" name="correo" required>

                    <label for="contrasena">Contraseña:</label>
                    <input type="password" id="contrasena" name="contrasena" required>

                    <label for="confirmarContrasena">Confirmar contraseña:</label>
                    <input type="password" id="confirmarContrasena" name="confirmarContrasena" required>

                    <label>
                        <input type="checkbox" id="aceptoTerminos" required>
                            Acepto términos y condiciones
                    </label>

                    <label>
                        <input type="checkbox" id="aceptoPolitica" required>
                            Acepto Política de tratamiento de datos
                    </label>

                    <button type="submit" id="btnRegistrarse" onclick="validarRegistro()">Registrarse</button>
                </form>
             </div>
        </section>


    </main>

    <footer>
        <div class="columna">
        <p>Contáctanos</p><br><br>
        <p>E-mail: comercial@qvision.us</p>
        <p>WhatsApp: +300255025</p>
        <p>Comunícate con nosotros</p>
        </div>

        <div class="columna">
        <p>Categorías de cursos</p><br><br>
        <p>Desarrollo</p>
        <p>Metodología de Pruebas</p>
        <p>Pruebas Funcionales</p>
        <p>Pruebas No Funcionales</p>
        <p>DevOps</p>
        <p>Cloud</p>
        <p>Automatización</p>
        </div>

        <div class="columna">
        <p>Certificaciones</p><br><br>
        <p>Scrum Master</p>
        <p>Scrum Product Owner</p>
        <p>Scrum Developer</p>
        <p>Agile Coach</p>
        <p>Design Thinking</p>
        <p>Kanban</p>
        <p>OKR</p>
        <p>DevOps</p>
        </div>

        <div class="columna">
        <p>Q-Vision Technologies</p><br><br>
        <p>Desarrollo de software</p>
        <p>Aseguramiento de Calidad</p>
        <p>Automatización de Procesos con RPA</p>
        <p>Talento TI</p>
        <p>Gestión Inteligente de Datos</p>
        </div>

        <div class="columna">
        <p>Soporte</p><br><br>
        <p>Si tienes inconvenientes o dudas, contáctanos al correo:</p>
        <p>izyacademy@qvision.us</p>
        </div>

    <div class="logo">
        <img src="logos/logo.png" alt="Logo de la empresa">
    </div>

    <div class="terminos">
        <p>Terminos y condiciones - Política de tratamiento de datos</p>
    </div>

    <div class="redes">
        <a href="https://www.facebook.com/izyacademybk/" target="_blank">
            <img src="logos/face.png" alt="Icono de Facebook">
        </a>
    </div>

    <div class="copyright">
        <p>Copyright © 2023 IzyAcademy Marca Registrada By Qvision Technologies</p>
    </div>
</footer>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const btnRegistro = document.getElementById("btnRegistrarse");
            const terminosCheckbox = document.getElementById("aceptoTerminos");
            const politicaCheckbox = document.getElementById("aceptoPolitica");
            const formularioRegistro = document.getElementById("formularioRegistro");
            const nombreInput = document.getElementById("nombre");
            const apellidosInput = document.getElementById("apellidos");
            const emailInput = document.getElementById("correo");
            const passwordInput = document.getElementById("contrasena");
            const confirmarPasswordInput = document.getElementById("confirmarContrasena");

            function verificarCheckboxes() {
                return terminosCheckbox.checked && politicaCheckbox.checked;
            }

            // Función para validar el formulario
            function validarRegistro() {
                const regexSoloLetras = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/;

                if (!regexSoloLetras.test(nombreInput.value) || !regexSoloLetras.test(apellidosInput.value)) {
                    mostrarError("nombre", "Nombre y apellido deben contener solo letras y espacios.");
                    return;
                }

                const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!regexEmail.test(emailInput.value)) {
                    mostrarError("correo", "Correo electrónico inválido.");
                    return;
                }

                if (passwordInput.value !== confirmarPasswordInput.value) {
                    mostrarError("contrasena", "La contraseña y la confirmación de la contraseña no coinciden.");
                    return;
                }

                // Restablecer errores si se pasan todas las validaciones
                resetearErrores();

                // Actualiza el estado del botón de registro
                actualizarEstadoBoton();
            }

            // Función para mostrar mensajes de error
            function mostrarError(campo, mensaje) {
                const errorContainer = document.getElementById(`${campo}Error`);
                errorContainer.textContent = mensaje;
            }

            // Función para restablecer los mensajes de error
            function resetearErrores() {
                const errores = document.querySelectorAll(".error");
                errores.forEach((error) => (error.textContent = ""));
            }

            // Función para actualizar el estado del botón de registro
            function actualizarEstadoBoton() {
                btnRegistro.disabled = !verificarCheckboxes();
                btnRegistro.style.opacity = verificarCheckboxes() ? 1 : 0.5;
            }

            // Agregar eventos a los checkboxes para actualizar el estado del botón
            terminosCheckbox.addEventListener("change", actualizarEstadoBoton);
            politicaCheckbox.addEventListener("change", actualizarEstadoBoton);

            // Agregar evento al formulario para validar antes de enviar
            formularioRegistro.addEventListener("submit", function (event) {
                // Realiza las validaciones necesarias antes de enviar el formulario
                // Si alguna validación falla, puedes usar event.preventDefault();
                validarRegistro();
            });
        });
    </script>
</body>
</html>