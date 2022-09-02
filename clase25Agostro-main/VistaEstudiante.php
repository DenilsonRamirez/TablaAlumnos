<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <h2>INGRESO DE DATOS DEL ESTUDIANTE</h2>
    </p>
    <form action="./" method="post">
        <p>
            <label for="apellidos">Apellidos</label> apellidos
            <input type="text" name="apellidos">
        </p>
        
        <p>
            <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        </p>
        
        <p>
            <label for="direccion">direccion</label>
            <input type="text" name="direccion">
        </p>
        
        <p>
            <label for="telefono">Telefono</label>
            <input type="number" name="telefono">
        </p>
        
        <p>
            <input type="submit" value="Guardar Registro">
        </p>
    </form>
    <hr>
    <h3>LISTADO DE ESTUDIANTES</h3>
    <hr>
    <table>
        <th>NOMBRE</th>
        <th>APELLIDOS</th>
        <th>DIRECCION</th>
        <th>TELEFONO</th>
        <th colspan="2">OPERACIONES</th>
    <?php
        {?>
          <tr>
                <td>  <?php echo "Diego"?> </td>
                <td>  <?php echo "Samayoa" ?> </td>
                <td>  <?php echo "Zona 6" ?> </td>
                <td>  <?php echo "11111111" ?> </td>
                <td><a href="eliminar.php"><img src="src\delete.png" alt="Editar"style="width:20px;height:20px;"></a></td>
                <td><a href="editar.php"><img src="src\edit.svg" alt="Eliminar"style="width:20px;height:20px;"/></a></td>
          </tr>
          <tr>
                <td>  <?php echo "Carlos"?> </td>
                <td>  <?php echo "Andres" ?> </td>
                <td>  <?php echo "Zona 8" ?> </td>
                <td>  <?php echo "22222222" ?> </td>
                <td><a href="eliminar.php"><img src="src\delete.png" alt="Editar"style="width:20px;height:20px;"></a></td>
                <td><a href="editar.php"><img src="src\edit.svg" alt="Eliminar"style="width:20px;height:20px;"/></a></td>
          </tr>
          <tr>
                <td>  <?php echo "Juan"?> </td>
                <td>  <?php echo "Amilcar" ?> </td>
                <td>  <?php echo "Zona 2" ?> </td>
                <td>  <?php echo "33333333" ?> </td>
                <td><a href="eliminar.php"><img src="src\delete.png" alt="Editar"style="width:20px;height:20px;"></a></td>
                <td><a href="editar.php"><img src="src\edit.svg" alt="Eliminar"style="width:20px;height:20px;"/></a></td>
          </tr>
          <tr>
                <td>  <?php echo "Jan"?> </td>
                <td>  <?php echo "De leon" ?> </td>
                <td>  <?php echo "Zona 0" ?> </td>
                <td>  <?php echo "000000000" ?> </td>
                <td><a href="eliminar.php"><img src="src\delete.png" alt="Editar"style="width:20px;height:20px;"></a></td>
                <td><a href="editar.php"><img src="src\edit.svg" alt="Eliminar"style="width:20px;height:20px;"/></a></td>
          </tr>
          
       <?php } ?>
    
    </table>
</body>
</html>