<?php

    include_once 'conexion.php'

    if (isset($_GET['id']))
    {
       $id=$GET_['id'] 
       $sql="select * from contacto where id_conacto='$id'";
       $resultado=mysqli_query($con,$sql);

       if($fila=mysqli_fectch_assoc($resultado))
       {
        //mostrar los valores en las cajas de texto
       }
    }
    if ($_SERVER["REQUEST_METHOD"]=="POST")
    {
       $id=$_POST['id'];
       $nombre=$_POST['nombre'];
       $direccion=$_POST['direccion'];
       $email=$_POST['email'];
       $tel=$_POST['tel'];
       $cel=$_POST['cel'];
       $whatsapp=$_POST['whatsapp'];

       $sql="update contacto set nombre_suc='$nombre', direccion='$direccion', email='$email', tel='$tel', cel='$cel', whatsapp='$whatsapp' where id_contacto='$id'";


       $resultado=mysqli_query($con,$sql);


       if ($resultado)
       {
          echo "<script>
                  alert('¡Contacto Actualizado con éxito!');
                  location.href='administrar.php';
                </script>";
       }
       else
       {
          echo "<script>
                    alert('No fue posible actualizar correctamente, intentelo de nuevo ...');
                    location.href='administrar.php';
                </script>";
       }

    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar contacto</title>
</head>
<body>
   <br>
   <h3><a href="administrar.php">Contactos->Administrar</a></h3> 
   <hr>
   <center>
    <h1>Actualizar contactos</h1>
    <hr>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <table border=1>
            <tr>
                <td label for="nombre">Nombre:</td>
                <td input for="text" name="nombre" value="<?php echo $fila[''] ?>" require></td>
            </tr>
            <tr>
                <td label for="direccion">Direccion:</td>
                <td input type="direccion" name="direccion" value="<?php echo $fila[''] ?> " require></td>
            </tr>
            <tr>
                <td label for="telefono">Telefono:</td>
                <td input type="text" name="telefono" value="<?php echo $fila[''] ?>" require></td>
            </tr>
            <tr>
                <td label for="celular">Celular:</td>
                <td input for="text" name="celular" value="<?php echo $fila[''] ?>" require></td>
            </tr>
            <tr>
                <td label for="whatsapp">Whatsapp:</td>
                <td input type="tel" name="whatsapp" value="<?php echo $fila[''] ?>" require></td>
            </tr>
            <tr>
                <td label for="whatsapp">Whatsapp:</td>
                <td input type="tel" name="whatsapp" value="" require></td>
            </tr>
        </table>
    </form>
   </center>
</body>
</html>