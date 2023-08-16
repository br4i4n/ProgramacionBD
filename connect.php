<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BasedeDatos</title>
</head>
<body>              
    <h1>Base de Datos</h1>



    
    // $server = 'localhost';
    // $username = 'root';
    // $password = '';
    // $database = 'mydb';

    // try {
    //     $conn = mysqli_connect($server, $username, $password, $database);
    //     echo "La conexión se realizó con éxito!";
    // } catch (\Throwable $th) {
    //     die('Connected failed: ' . $th->getMessage());
    // }

</body>
</html> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BasedeDatos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            background-image: url("https://images5.alphacoders.com/114/thumb-1920-1141137.jpg");
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
           
            backdrop-filter: blur(10px);
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
        }
        h2{
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-bottom: 10px;
        }

        input[type="text"] {
            padding: 5px;
            width: 200px;
        }

        input[type="submit"] {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .message {
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Base de Datos</h1>

        <?php
        $server = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'mydb';

        try {
            $conn = mysqli_connect($server, $username, $password, $database);
            echo "<p class='message'>La conexión se realizó con éxito!</p>";
        } catch (\Throwable $th) {
            die('Connected failed: ' . $th->getMessage());
        }
        ?>

        <div class="form-container">
            <h2>Crear una nueva tabla:</h2>
            <form action="" method="post">
                <label for="nuevaTabla">Nombre de la tabla:</label>
                <input type="text" name="nuevaTabla" id="nuevaTabla">
                <input type="submit" name="crearTabla" value="Crear">
            </form>
        </div>

        <div class="form-container">
            <h2>Eliminar una tabla:</h2>
            <form action="" method="post">
                <label for="tablaEliminar">Nombre de la tabla:</label>
                <input type="text" name="tablaEliminar" id="tablaEliminar">
                <input type="submit" name="eliminarTabla" value="Eliminar">
            </form>
        </div>
    </div>
</body>
</html



https://prod.liveshare.vsengsaas.visualstudio.com/join?247881FD7F0CE0046F003938826C29C96B81
