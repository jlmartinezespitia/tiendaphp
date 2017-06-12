<?php include('includes/libreria.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<p>Tienda on line</p>
<table width="845" border="0">
  <tr>
    <td width="147"><form id="form2" name="form1" method="post" action="usuarios/pidodatos.php">
      <input type="submit" name="login" id="login" value="Login" />
    </form></td>
    <td width="688" align="right"><p><a href="carrito/carrito.php">Ver carrito</a></p></td>
  </tr>
</table>
<p>
  <?php $a=verListadoProductos('comprar',$conexion)?>
</p>
	
</body>
</html>