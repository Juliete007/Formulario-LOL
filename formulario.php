<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <title>Campeones de League of Legends</title>
        <link rel="stylesheet" href="estilos.css"/>
    </head>
    <body>
        <div id="contenedor">
            <h1>Resultado de la encuesta sobre nuestros campeones</h1>
            <?php
                print("<h1>El formulario de PHP. Resultados del formulario</h1>\n");
                $nombre = $_POST["user_name"];
                $apellidos = $_POST["user_surname"];
                $email = $_POST["user_email"];
                $ciudad = $_POST["user_city"];

                $campeon = $_POST["user_campeon"];
                $otrocampeon = $_POST["campeon_dispuesto"];
                $posicion = $_POST["user_position"];

                //Impresion de los datos recogidos
                print("<div id=\"datos\">");
                
                print("<p>Los datos que se han introducido son:</p>");

                print("<ul>\n");

                print("<li>Nombre del usuario: $nombre</li>\n");
                print("<li>Apellidos del usuario: $apellidos</li>\n");
                print("<li>Email del usuario: $email</li>\n");
                print("<li>Ciudad del usuario: $ciudad</li>\n");
                print("<li>Campeón favorito: $campeon</li>\n");
                print("<li>Otro campeón: $otrocampeon</li>\n");
                print("<li>Posición favorita: $posicion</li>\n");

                print("</ul>\n");

                print("</div>\n");
            ?>
        </div>
    </body>
</html>