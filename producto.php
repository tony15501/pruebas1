<?php
include("conexion.php");
$datos = mysql_query("select * from producto", $conexion);
$total = mysql_num_rows($datos);
echo "<center>";
echo "<h1>Registro General De Productos</h1> <p>";
echo "<table border=3>";
echo "<tr><th></th>";
//echo "<th></th>";
echo "<th>Codigo</th>";
echo "<th>Nombre</th>";
echo "<th>Precio</th>";
echo "<th>Stock</th></tr>";
for($x = 0; $x<$total;$x++)
{
	echo"<tr>";
	echo "<td><a href='modificar.php?cod=". mysql_result($datos, $x, "idProducto") ."'>Modificar</a></td>";
	//echo "<td><a href='eliminar.php?cod=". mysql_result($datos, $x, "idProducto") ."'>Eliminar</a></td>";
	echo "<td>". mysql_result($datos, $x, "idProducto"). "</td>";
	echo "<td>". mysql_result($datos, $x, "nombreProducto"). "</td>";
	echo "<td>". mysql_result($datos, $x, "precioProducto"). "</td>";
	echo "<td>". mysql_result($datos, $x, "stockProducto"). "</td>";
	echo"</tr>"; 
}
echo "</table";
echo "<p><a href='nuevo.php'>Nuevo Producto</a>";
echo "</center>";
echo "Esta es una prueba de mensaje echo ingresado desde git"
?>

