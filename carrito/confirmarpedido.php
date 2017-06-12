<?php session_start()?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="finalizarPedido.php">
<h1>Confirmar Pedido
</h1>

<table width="200" border="0">
  <tr>
    <td colspan="5" align="center">LISTADO DE COMPRAS</td>
  </tr>
  <tr>
    <td bgcolor="#FF9900">PRODUCTO</td>
    <td bgcolor="#FF9900">PRECIO</td>
    <td bgcolor="#FF9900">CANTIDAD</td>
    <td colspan="2" bgcolor="#FF9900">SUBTOTAL</td>
  </tr>
<?php 
if(isset($_SESSION['carrito'])){
  	$mi_carrito=$_SESSION['carrito'];
}
	if(isset($mi_carrito)){
			$total=0;
			for($i=0;$i<count($mi_carrito);$i++){
				if($mi_carrito[$i]<>null) {				
?>
  <tr>
    <td bgcolor="#FFFFCC"><?php echo $mi_carrito[$i]['nombre'] ?></td>
    <td bgcolor="#FFFFCC"><?php echo $mi_carrito[$i]['precio'] ?></td>
    <td bgcolor="#FFFFCC"><?php echo $mi_carrito[$i]['cantidad'] ?></td>
    <?php 
		$subtotal= $mi_carrito[$i]['precio']*$mi_carrito[$i]['cantidad'];
		$total=$total+$subtotal;
		?>
    <td bgcolor="#FFFFCC"><?php echo $subtotal ?></td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
  </tr>
<?php 
				}
			}
		}

?>

  <tr>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC">TOTAL</td>
    <td colspan="2" bgcolor="#FFFFCC"><?php echo $total ?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC">
      </td>
    <td colspan="2" bgcolor="#FFFFCC">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" bgcolor="#FFFFCC">Datos del comprador</td>
    </tr>
  <tr>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td colspan="4" bgcolor="#FFFFCC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC">Nombre:</td>
    <td colspan="4" bgcolor="#FFFFCC"><label for="nombre"></label>
      <input type="text" name="nombre" id="nombre" /></td>
    </tr>
  <tr>
    <td bgcolor="#FFFFCC">Dirección:</td>
    <td colspan="4" bgcolor="#FFFFCC"><input type="text" name="direccion" id="direccion" /></td>
    </tr>
  <tr>
    <td bgcolor="#FFFFCC">Teléfono:</td>
    <td colspan="4" bgcolor="#FFFFCC"><input type="text" name="tel" id="tel" /></td>
    </tr>
  <tr>
    <td bgcolor="#FFFFCC">E-mail:</td>
    <td colspan="4" bgcolor="#FFFFCC"><input type="text" name="correo" id="correo" /></td>
    </tr>
  <tr>
    <td bgcolor="#FFFFCC">&nbsp;</td>
    <td bgcolor="#FFFFCC"><input type="submit" name="comprar" id="comprar" value="Comprar" /></td>
    <td bgcolor="#FFFFCC"></td>
    <td colspan="2" bgcolor="#FFFFCC">&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>