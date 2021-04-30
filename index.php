<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="global">
        <div id="contenedor">
            <label for="form" class="titulo">Formulario Insertar</label>
                <div class="form-insertar">
                    <div class="html-form">
                        <div class="grupo">
                            <form action="class/insertar.php" method="post" id="form_insert">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="name" id="name">

                                <label for="apellidos">Apellidos</label>
                                <input type="text" name="apellidos" id="apellidos">

                                <input type="submit" value="enviar" id="enviar">
                            </form>                
                            <div class="message">
                                <h4>Se ha insertado con exito los datos</h4>
                            </div>
                        </div>
                    </div>
             </div>
        </div>
    </div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/main.js"></script>
    
</body>
</html>