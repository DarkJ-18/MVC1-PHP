<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta htt-equiv="contet-type" content="text/html; charset=utf-8"/>
        <title>Nuevo registro </title>
    </head>
    <body>
        <h1>Nuevo Resgistro</h1>    
        <form name="form1" method="POST" action="index.php?accion=guardar">
            <p>Nombre: <input type="text" name="txtnombre"></p>
            <p>Edad: <input type="text" name="txtedad"></p>
            <p><input type="submit" name="btnguardar" value="Guardar"></p>
        </form>
        <br>
        <a href="index.php">Volver</a>
    </body>
</html>