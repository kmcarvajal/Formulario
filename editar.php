<?php
// Conexión a la base de datos
include('config.php');

// Verificar si se ha enviado un número de registro válido
if (isset($_GET['NumeroRegistro']) && is_numeric($_GET['NumeroRegistro'])) {
  $NumeroRegistro = $_GET['NumeroRegistro'];

  // Consulta para obtener los datos del registro
  $consulta = "SELECT * FROM registro WHERE NumeroRegistro = $NumeroRegistro";
  $resultado = mysqli_query($conexion, $consulta);

  if ($resultado) {
    $fila = mysqli_fetch_assoc($resultado);
  } else {
    echo 'Error en la consulta: ' . mysqli_error($conexion);
    exit;
  }
} else {
  echo 'Número de registro no válido.';
  exit;
}

// Verificar si se ha enviado un formulario de edición
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Obtener los datos actualizados del formulario
  $newEjecutivo = $_POST['ejecutivo'];
  $newEmpresa = $_POST['empresa'];
  $newumodificacion = $_POST['umodificacion'];
  $newccalidad = $_POST['ccalidad'];
  $neweventa = $_POST['eventa'];
  $neweactual = $_POST['eactual'];
  $newdescripcion = $_POST['descripcion'];
  $newnregistro = $_POST['nregistro'];
  $newfventa = $_POST['fventa'];
  $newnombre = $_POST['nombre'];
  $newdocumento = $_POST['documento'];
  $newfnacimiento = $_POST['fnacimiento'];
  $newtelefono1 = $_POST['telefono1'];
  $newwhatsapp = $_POST['whatsapp'];
  $newtelefono2 = $_POST['telefono2'];
  $newdireccion = $_POST['direccion'];
  $newbarrio = $_POST['barrio'];
  $newdepartamento = $_POST['departamento'];
  $newciudad = $_POST['ciudad'];
  $newemail = $_POST['email'];
  $newrgeografica = $_POST['rgeografica'];
  $newobservaciones = $_POST['observaciones'];
  $newobservaciones2 = $_POST['observaciones2'];
  $newtventa = $_POST['tventa'];
  $newbeneficiario1 = $_POST['beneficiario1'];
  $newparentesto1 = $_POST['parentesto1'];
  $newbeneficiario2 = $_POST['beneficiario2'];
  $newparentesto2 = $_POST['parentesto2'];
  $newmtipo = $_POST['mtipo'];
  $newmnombre = $_POST['mnombre'];
  $newraza = $_POST['raza'];
  $newmedad = $_POST['medad'];
  $newebeneficiario1 = $_POST['ebeneficiario1'];
  $neweparentesto1 = $_POST['eparentesto1'];
  $newebeneficiario2 = $_POST['ebeneficiario2'];
  $neweparentesto2 = $_POST['eparentesto2'];
  $newvehiculo = $_POST['vehiculo'];
  $newvplaca = $_POST['vplaca'];
  $newvsoat = $_POST['vsoat'];
  $newvtriesgo = $_POST['vtriesgo'];
  $newmoto = $_POST['moto'];
  $newmplaca = $_POST['mplaca'];
  $newmsoat = $_POST['msoat'];
  $newmtriesgo = $_POST['mtriesgo'];
  $neweps = $_POST['eps'];
  $newmprepagada = $_POST['mprepagada'];
  $newhijos = $_POST['hijos'];
  $newedad = $_POST['edad'];
  $newgrado = $_POST['grado'];
  $newvventa = $_POST['vventa'];
  $newncuotas = $_POST['ncuotas'];
  $newvmaproximado = $_POST['vmaproximado'];
  $newtcredito = $_POST['tcredito'];
  $newconsigna = $_POST['consigna'];
  $newtransaccion = $_POST['transaccion'];
  $newefectivo = $_POST['efectivo'];
  $newtitular = $_POST['titular'];
  $newbanco = $_POST['banco'];
  $newtipo = $_POST['tipo'];
  $newnumero = $_POST['numero'];
  $newmes = $_POST['mes'];
  $newano = $_POST['ano'];
  $newcvv = $_POST['cvv'];
  $newemensajeria = $_POST['emensajeria'];
  $newguia = $_POST['guia'];
  $neweenvio = $_POST['eenvio'];
  $newgestionado = $_POST['gestionado'];
  $newfgestion = $_POST['fgestion'];

  // Actualizar los datos en la base de datos
  $actualizarConsulta = "UPDATE registro SET 
    Ejecutivo = '$newEjecutivo', Empresa = '$newEmpresa', UltimaModificacion = '$newumodificacion', ControlCalidad = '$newccalidad', EstatusVenta = '$neweventa', EstadoActual = '$neweactual', 
    Descripcion = '$newdescripcion', NumeroRegistro = '$newnregistro', FechaVenta = '$newfventa', Nombre = '$newnombre', Documento = '$newdocumento', FechaNacimiento = '$newfnacimiento', 
    Telefono1 = '$newtelefono1', Whatsapp = '$newwhatsapp', Telefono2 = '$newtelefono2', Direccion = '$newdireccion', Barrio = '$newbarrio', Departamento = '$newdepartamento', 
    Ciudad = '$newciudad', Email = '$newemail', ReferenciaGeografica = '$newrgeografica', Observaciones = '$newobservaciones', Observaciones2 = '$newobservaciones2', TipoVenta = '$newtventa', 
    Beneficiario1 = '$newbeneficiario1', Parentesto1 = '$newparentesto1', Beneficiario2 = '$newbeneficiario2', Parentesto2 = '$newparentesto2', TipoMascota = '$newmtipo', 
    NombreMascota = '$newmnombre', Raza = '$newraza', EdadMascota = '$newmedad', ExequialBeneficiario1 = '$newebeneficiario1', ExequialParentesto1 = '$neweparentesto1', 
    ExequialBeneficiario2 = '$newebeneficiario2', ExequialParentesto2 = '$neweparentesto2', Vehiculo = '$newvehiculo', PlacaVehiculo = '$newvplaca', SoatVehiculo = '$newvsoat', 
    TodoRiesgoVehiculo = '$newvtriesgo', Moto = '$newmoto', PlacaMoto = '$newmplaca', SoatMoto = '$newmsoat', TodoRiesgoMoto = '$newmsoat', Eps = '$neweps', 
    MedicinaPrepagada = '$newmprepagada', Hijos = '$newhijos', Edad = '$newedad', Grado = '$newgrado', ValorVenta = '$newvventa', NumeroCuotas = '$newncuotas', 
    ValorMensualAproximado = '$newvmaproximado', TarjetasCredito = '$newtcredito', Consignaciones = '$newconsigna', Transacciones = '$newtransaccion', Efectivo = '$newefectivo', 
    Titular = '$newtitular', Banco = '$newbanco', Tipo = '$newtipo', Numero = '$newnumero', Mes = '$newmes', Ano = '$newano', CVV = '$newcvv', EmpresaMensajeria = '$newemensajeria', 
    Guia = '$newguia', EstadoEnvio = '$neweenvio', Gestionado = '$newgestionado', FechaGestion = '$newfgestion'
    
    WHERE NumeroRegistro = $NumeroRegistro";
  $resultadoActualizacion = mysqli_query($conexion, $actualizarConsulta);

  if ($resultadoActualizacion) {
    echo 'Registro actualizado correctamente.';
  } else {
    echo 'Error al actualizar el registro: ' . mysqli_error($conexion);
  }
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="css/estilo.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device=width, user-scalable=no">
  <title>Editar Dato</title>
</head>

<body>
  <div id="fondo">

    <header>
      <legend>
        <h1><u><strong>Edición de Registro</strong></u></h1>
      </legend>
    </header>

    <form method="POST" accept-charset="UTF-8">

      <fieldset>

        <navbar>
          <a href="Registros.php" class="navbarlink">► Volver a Registros</a>
        </navbar>

        <!--*****************************************************************************************************************************-->
        <header>
          <legend>
            <h1>Formato de Venta</h1>
          </legend>
        </header>

        <h3>Información general</h3>
        <section class="contenido">
          <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
          <div class="div1">
            <label for="ejecutivo"><strong>Ejecutivo</strong></label>
            <input type="text" id="ejecutivo" name="ejecutivo" value="<?php echo $fila['Ejecutivo']; ?>" maxlength="50">
          </div>

          <div class="div1">
            <label for="empresa"><strong>Empresa - Outsourcing</strong></label>
            <select id="empresa" name="empresa">
              <option <?php if ($fila['Empresa'] == 'Abogados & Asociados') echo 'selected'; ?>>Abogados & Asociados</option>
              <option <?php if ($fila['Empresa'] == 'Global Mark International') echo 'selected'; ?>>Global Mark International</option>
              <option <?php if ($fila['Empresa'] == 'Asesorando al dia') echo 'selected'; ?>>Asesorando al dia</option>
              <option <?php if ($fila['Empresa'] == 'Servicios Diturint') echo 'selected'; ?>>Servicios Diturint</option>
              <option <?php if ($fila['Empresa'] == 'Think Big') echo 'selected'; ?>>Think Big</option>
              <option <?php if ($fila['Empresa'] == 'Ambientes Digitales') echo 'selected'; ?>>Ambientes Digitales</option>
              <option <?php if ($fila['Empresa'] == 'Guadalupana') echo 'selected'; ?>>Guadalupana</option>
            </select>
          </div>

          <div class="div1">
            <label for="umodificacion"><strong>Ultima modificación</strong></label>
            <input type="date" id="umodificacion" name="umodificacion" value="<?php echo $fila['UltimaModificacion']; ?>">
          </div>
          <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
          <div class="div2">
            <label for="ccalidad"><strong>Control de calidad</strong></label>
            <input type="text" id="ccalidad" name="ccalidad" value="<?php echo $fila['ControlCalidad']; ?>" maxlength="40">
          </div>

          <div class="div2">
            <label for="eventa"><strong>Estatus venta</strong></label>
            <select id="eventa" name="eventa">
              <option <?php if ($fila['EstatusVenta'] == 'opción1') echo 'selected'; ?>>opción1</option>
              <option <?php if ($fila['EstatusVenta'] == 'opción2') echo 'selected'; ?>>opción2</option>
              <option <?php if ($fila['EstatusVenta'] == 'opción3') echo 'selected'; ?>>opción3</option>
            </select>
          </div>

          <div class="div2">
            <label for="eactual"><strong>Estado actual</strong></label>
            <input type="text" id="eactual" name="eactual" value="<?php echo $fila['EstadoActual']; ?>" maxlength="40">
          </div>

          <div class="div2">
            <label for="descripcion"><strong>Descripción</strong></label>
            <input type="text" id="descripcion" name="descripcion" value="<?php echo $fila['Descripcion']; ?>" maxlength="40">
          </div>

        </section>
        <!--*****************************************************************************************************************************-->

        <header>
          <legend>
            <h1>Información del Cliente</h1>
          </legend>
        </header>

        <section class="contenido">
          <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
          <div class="divotro">
            <div class="divlabelotro1">
              <label for="nregistro" class="labelotro11"><strong>Número de registro:</strong></label>
              <input type="number" id="nregistro" class="labelotro111" name="nregistro" value="<?php echo $fila['NumeroRegistro']; ?>">
            </div>
            <div class="divlabelotro1">
              <label for="fventa" class="labelotro11"><strong>Fecha de venta:</strong></label>
              <input type="date" id="fventa" class="labelotro111" name="fventa" value="<?php echo $fila['FechaVenta']; ?>">
            </div>
          </div>
          <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
          <div class="div1">
            <label for="nombre"><strong>Nombre</strong></label>
            <input type="text" id="nombre" name="nombre" value="<?php echo $fila['Nombre']; ?>" maxlength="50">
          </div>

          <div class="div1">
            <label for="documento"><strong>Documento</strong></label>
            <input type="number" id="documento" name="documento" value="<?php echo $fila['Documento']; ?>" oninput="limitNumberLength(this)">
          </div>

          <div class="div1">
            <label for="fnacimiento"><strong>Fecha de nacimiento</strong></label>
            <input type="date" id="fnacimiento" name="fnacimiento" value="<?php echo $fila['FechaNacimiento']; ?>">
          </div>
          <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
          <div class="div2">
            <label for="telefono1"><strong>Teléfono1</strong></label>
            <input type="number" id="telefono1" name="telefono1" value="<?php echo $fila['Telefono1']; ?>" oninput="limitNumberLength(this)">
          </div>

          <div class="div2">
            <label for="whatsapp"><strong>Whatsapp</strong></label>
            <input type="number" id="whatsapp" name="whatsapp" value="<?php echo $fila['Whatsapp']; ?>" oninput="limitNumberLength(this)">
          </div>

          <div class="div2">
            <label for="telefono2"><strong>Teléfono2</strong></label>
            <input type="number" id="telefono2" name="telefono2" value="<?php echo $fila['Telefono2']; ?>" oninput="limitNumberLength(this)">
          </div>
          <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
          <div class="div3">
            <label for="direccion"><strong>Dirección</strong></label>
            <input type="text" id="direccion" name="direccion" value="<?php echo $fila['Direccion']; ?>" maxlength="120">
          </div>

          <div class="div1">
            <label for="barrio"><strong>Barrio</strong></label>
            <input type="text" id="barrio" name="barrio" value="<?php echo $fila['Barrio']; ?>" maxlength="50">
          </div>
          <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
          <div class="div2">
            <label for="departamento"><strong>Departamento</strong></label>
            <select id="departamento" name="departamento">
              <option <?php if ($fila['Departamento'] == 'opción1') echo 'selected'; ?>>opción1</option>
              <option <?php if ($fila['Departamento'] == 'opción2') echo 'selected'; ?>>opción2</option>
              <option <?php if ($fila['Departamento'] == 'opción3') echo 'selected'; ?>>opción3</option>
            </select>
          </div>

          <div class="div2">
            <label for="ciudad"><strong>Ciudad</strong></label>
            <select id="ciudad" name="ciudad">
              <option <?php if ($fila['Ciudad'] == 'opción1') echo 'selected'; ?>>opción1</option>
              <option <?php if ($fila['Ciudad'] == 'opción2') echo 'selected'; ?>>opción2</option>
              <option <?php if ($fila['Ciudad'] == 'opción3') echo 'selected'; ?>>opción3</option>
            </select>
          </div>

          <div class="div2">
            <label for="email"><strong>Email</strong></label>
            <input type="email" id="email" name="email" value="<?php echo $fila['Email']; ?>" maxlength="40">
          </div>
          <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
          <div class="div4">
            <label for="rgeografica"><strong>Referencia geográfica</strong></label>
            <input type="text" id="rgeografica" name="rgeografica" value="<?php echo $fila['ReferenciaGeografica']; ?>" maxlength="190">
          </div>
          <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
          <div class="div4">
            <label for="observaciones"><strong>Observaciones</strong></label>
            <input type="text" id="observaciones" name="observaciones" value="<?php echo $fila['Observaciones']; ?>" maxlength="190">
          </div>
          <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
          <div class="div4">
            <label for="observaciones2"><strong>Observaciones2</strong></label>
            <input type="text" id="observaciones2" name="observaciones2" value="<?php echo $fila['Observaciones2']; ?>" maxlength="190">
          </div>

        </section>
        <!--*****************************************************************************************************************************-->

        <header>
          <legend>
            <h1>Información de la Venta</h1>
          </legend>
        </header>

        <section class="contenido">
          <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
          <div class="divotro">
            <div class="divlabelotro2">
              <label><input class="radio" type="radio" name="tventa" value="raasistencia" <?php if ($fila['TipoVenta'] == 'raasistencia') echo 'checked'; ?>>
                <strong class="strong2">Asistencia</strong></label>
            </div>
            <div class="divlabelotro2">
              <label><input class="radio" type="radio" name="tventa" value="ramascota" <?php if ($fila['TipoVenta'] == 'ramascota') echo 'checked'; ?>>
                <strong class="strong2">Mascota</strong></label>
            </div>
            <div class="divlabelotro2">
              <label><input class="radio" type="radio" name="tventa" value="rapexequial" <?php if ($fila['TipoVenta'] == 'rapexequial') echo 'checked'; ?>>
                <strong class="strong2">Previsión Exequial</strong></label>
            </div>
          </div>
          <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
          <div class="div6">
            <label for="asistencia"><strong>Asistencia:</strong></label>
          </div>

          <div class="div5">
            <label for="beneficiario1"><strong>Beneficiario1</strong></label>
            <input type="text" id="beneficiario1" name="beneficiario1" value="<?php echo $fila['Beneficiario1']; ?>" maxlength="40">
          </div>

          <div class="div5">
            <label for="parentesto1"><strong>Parentesto</strong></label>
            <input type="text" id="parentesto1" name="parentesto1" value="<?php echo $fila['Parentesto1']; ?>" maxlength="40">
          </div>

          <div class="div5">
            <label for="beneficiario2"><strong>Beneficiario2</strong></label>
            <input type="text" id="beneficiario2" name="beneficiario2" value="<?php echo $fila['Beneficiario2']; ?>" maxlength="40">
          </div>

          <div class="div5">
            <label for="parentesto2"><strong>Parentesto</strong></label>
            <input type="text" id="parentesto2" name="parentesto2" value="<?php echo $fila['Parentesto2']; ?>" maxlength="40">
          </div>
          <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
          <div class="div6">
            <label for="mascota"><strong>Mascota:</strong></label>
          </div>

          <div class="div5">
            <label for="mtipo"><strong>Tipo</strong></label>
            <select id="mtipo" name="mtipo">
              <option <?php if ($fila['TipoMascota'] == 'opción1') echo 'selected'; ?>>opción1</option>
              <option <?php if ($fila['TipoMascota'] == 'opción2') echo 'selected'; ?>>opción2</option>
              <option <?php if ($fila['TipoMascota'] == 'opción3') echo 'selected'; ?>>opción3</option>
            </select>
          </div>

          <div class="div5">
            <label for="mnombre"><strong>Nombre</strong></label>
            <input type="text" id="mnombre" name="mnombre" value="<?php echo $fila['NombreMascota']; ?>" maxlength="40">
          </div>

          <div class="div5">
            <label for="raza"><strong>Raza</strong></label>
            <input type="text" id="raza" name="raza" value="<?php echo $fila['Raza']; ?>" maxlength="40">
          </div>

          <div class="div5">
            <label for="medad"><strong>Edad</strong></label>
            <input type="text" id="medad" name="medad" value="<?php echo $fila['EdadMascota']; ?>" maxlength="40">
          </div>
          <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
          <div class="div6">
            <label for="pexequial"><strong>Previsión Exequial:</strong></label>
          </div>

          <div class="div5">
            <label for="ebeneficiario1"><strong>Beneficiario1</strong></label>
            <input type="text" id="ebeneficiario1" name="ebeneficiario1" value="<?php echo $fila['ExequialBeneficiario1']; ?>" maxlength="40">
          </div>

          <div class="div5">
            <label for="eparentesto1"><strong>Parentesto</strong></label>
            <input type="text" id="eparentesto1" name="eparentesto1" value="<?php echo $fila['ExequialParentesto1']; ?>" maxlength="40">
          </div>

          <div class="div5">
            <label for="ebeneficiario2"><strong>Beneficiario2</strong></label>
            <input type="text" id="ebeneficiario2" name="ebeneficiario2" value="<?php echo $fila['ExequialBeneficiario2']; ?>" maxlength="40">
          </div>

          <div class="div5">
            <label for="eparentesto2"><strong>Parentesto</strong></label>
            <input type="text" id="eparentesto2" name="eparentesto2" value="<?php echo $fila['ExequialParentesto2']; ?>" maxlength="40">
          </div>

        </section>
        <!--*****************************************************************************************************************************-->

        <header>
          <legend>
            <h1>Detalle del Cliente</h1>
          </legend>
        </header>

        <section class="contenido">
          <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
          <div class="div2">
            <label for="vehiculo"><strong>Vehículo</strong></label>
            <input type="text" id="vehiculo" name="vehiculo" value="<?php echo $fila['Vehiculo']; ?>" maxlength="40">
          </div>

          <div class="div2">
            <label for="vplaca"><strong>Placa</strong></label>
            <input type="text" id="vplaca" name="vplaca" value="<?php echo $fila['PlacaVehiculo']; ?>" maxlength="40">
          </div>

          <div class="div2">
            <label for="vsoat"><strong>Soat</strong></label>
            <input type="number" id="vsoat" name="vsoat" value="<?php echo $fila['SoatVehiculo']; ?>" oninput="limitNumberLength(this)">
          </div>

          <div class="div2">
            <label for="vtriesgo"><strong>Todo riesgo</strong></label>
            <input type="number" id="vtriesgo" name="vtriesgo" value="<?php echo $fila['TodoRiesgoVehiculo']; ?>" oninput="limitNumberLength(this)">
          </div>
          <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
          <div class="div2">
            <label for="moto"><strong>Moto</strong></label>
            <input type="text" id="moto" name="moto" value="<?php echo $fila['Moto']; ?>" maxlength="40">
          </div>

          <div class="div2">
            <label for="mplaca"><strong>Placa</strong></label>
            <input type="text" id="mplaca" name="mplaca" value="<?php echo $fila['PlacaMoto']; ?>" maxlength="40">
          </div>

          <div class="div2">
            <label for="msoat"><strong>Soat</strong></label>
            <input type="number" id="msoat" name="msoat" value="<?php echo $fila['SoatMoto']; ?>" oninput="limitNumberLength(this)">
          </div>

          <div class="div2">
            <label for="mtriesgo"><strong>Todo riesgo</strong></label>
            <input type="number" id="mtriesgo" name="mtriesgo" value="<?php echo $fila['TodoRiesgoMoto']; ?>" oninput="limitNumberLength(this)">
          </div>

        </section>
        <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

        <h3>Medicina prepagada</h3>
        <section class="contenido">
          <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
          <div class="div7">
            <label for="eps"><strong>EPS</strong></label>
            <input type="text" id="eps" name="eps" value="<?php echo $fila['Eps']; ?>" maxlength="40">
          </div>

          <div class="div7">
            <label for="mprepagada"><strong>Medicina prepagada</strong></label>
            <input type="text" id="mprepagada" name="mprepagada" value="<?php echo $fila['MedicinaPrepagada']; ?>" maxlength="40">
          </div>

        </section>
        <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

        <h3>Educativo</h3>
        <section class="contenido">
          <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
          <div class="div2">
            <label for="hijos"><strong>Hijos</strong></label>
            <input type="text" id="hijos" name="hijos" value="<?php echo $fila['Hijos']; ?>" maxlength="40">
          </div>

          <div class="div2">
            <label for="edad"><strong>Edad</strong></label>
            <input type="text" id="edad" name="edad" value="<?php echo $fila['Edad']; ?>" maxlength="40">
          </div>

          <div class="div2">
            <label for="grado"><strong>Grado</strong></label>
            <input type="text" id="grado" name="grado" value="<?php echo $fila['Grado']; ?>" maxlength="40">
          </div>

        </section>
        <!--*****************************************************************************************************************************-->

        <header>
          <legend>
            <h1>Datos de Pago</h1>
          </legend>
        </header>

        <section class="contenido">
          <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
          <div class="div2">
            <label for="vventa"><strong>Valor de la venta</strong></label>
            <input type="number" id="vventa" name="vventa" value="<?php echo $fila['ValorVenta']; ?>" oninput="limitNumberLength(this)">
          </div>

          <div class="div2">
            <label for="ncuotas"><strong>Número de cuotas</strong></label>
            <input type="number" id="ncuotas" name="ncuotas" value="<?php echo $fila['NumeroCuotas']; ?>" oninput="limitNumberLength(this)">
          </div>

          <div class="div2">
            <label for="vmaproximado"><strong>Valor mensual aproximado</strong></label>
            <input type="number" id="vmaproximado" name="vmaproximado" value="<?php echo $fila['ValorMensualAproximado']; ?>" oninput="limitNumberLength(this)">
          </div>

        </section>
        <!--*****************************************************************************************************************************-->

        <header>
          <legend>
            <h1>Forma de Pago</h1>
          </legend>
        </header>

        <section class="contenido">
          <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
          <div class="div2">
            <label for="tcredito"><strong>Tarjetas de crédito</strong></label>
            <input type="number" id="tcredito" name="tcredito" value="<?php echo $fila['TarjetasCredito']; ?>" oninput="limitNumberLength(this)">
          </div>

          <div class="div2">
            <label for="consigna"><strong>Consignaciones</strong></label>
            <input type="number" id="consigna" name="consigna" value="<?php echo $fila['Consignaciones']; ?>" oninput="limitNumberLength(this)">
          </div>

          <div class="div2">
            <label for="transaccion"><strong>Transacciones</strong></label>
            <input type="number" id="transaccion" name="transaccion" value="<?php echo $fila['Transacciones']; ?>" oninput="limitNumberLength(this)">
          </div>

          <div class="div2">
            <label for="efectivo"><strong>Efectivo</strong></label>
            <input type="number" id="efectivo" name="efectivo" value="<?php echo $fila['Efectivo']; ?>" oninput="limitNumberLength(this)">
          </div>
          <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
          <div class="div8">
            <label for="titular"><strong>Titular</strong></label>
            <input type="text" id="titular" name="titular" value="<?php echo $fila['Titular']; ?>" maxlength="40">
          </div>

          <div class="div8">
            <label for="banco"><strong>Banco</strong></label>
            <input type="text" id="banco" name="banco" value="<?php echo $fila['Banco']; ?>" maxlength="40">
          </div>

          <div class="div8">
            <label for="tipo"><strong>Tipo</strong></label>
            <input type="text" id="tipo" name="tipo" value="<?php echo $fila['Tipo']; ?>" maxlength="40">
          </div>

          <div class="div8">
            <label for="numero"><strong>Número</strong></label>
            <input type="number" id="numero" name="numero" value="<?php echo $fila['Numero']; ?>" oninput="limitNumberLength(this)">
          </div>

          <div class="div9">
            <label for="mes"><strong>Mes</strong></label>
            <input type="number" id="mes" name="mes" value="<?php echo $fila['Mes']; ?>" oninput="limitNumberLength(this)">
          </div>

          <div class="div9">
            <label for="ano"><strong>Año</strong></label>
            <input type="number" id="ano" name="ano" value="<?php echo $fila['Ano']; ?>" oninput="limitNumberLength(this)">
          </div>

          <div class="div10">
            <label for="cvv"><strong>CVV</strong></label>
            <input type="number" id="cvv" name="cvv" value="<?php echo $fila['CVV']; ?>" oninput="limitNumberLength(this)">
          </div>

        </section>
        <!--*****************************************************************************************************************************-->

        <header>
          <legend>
            <h1>Datos de Envío</h1>
          </legend>
        </header>

        <section class="contenido">
          <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
          <div class="div8">
            <label for="emensajeria"><strong>Empresa de mensajería</strong></label>
            <select id="emensajeria" name="emensajeria">
              <option <?php if ($fila['EmpresaMensajeria'] == 'opción1') echo 'selected'; ?>>opción1</option>
              <option <?php if ($fila['EmpresaMensajeria'] == 'opción2') echo 'selected'; ?>>opción2</option>
              <option <?php if ($fila['EmpresaMensajeria'] == 'opción3') echo 'selected'; ?>>opción3</option>
            </select>
          </div>

          <div class="div8">
            <label for="guia"><strong>Guía</strong></label>
            <input type="number" id="guia" name="guia" value="<?php echo $fila['Guia']; ?>" oninput="limitNumberLength(this)">
          </div>

          <div class="div8">
            <label for="eenvio"><strong>Estado del envío</strong></label>
            <select id="eenvio" name="eenvio">
              <option <?php if ($fila['EstadoEnvio'] == 'opción1') echo 'selected'; ?>>opción1</option>
              <option <?php if ($fila['EstadoEnvio'] == 'opción2') echo 'selected'; ?>>opción2</option>
              <option <?php if ($fila['EstadoEnvio'] == 'opción3') echo 'selected'; ?>>opción3</option>
            </select>
          </div>

          <div class="div8">
            <label for="gestionado"><small>Gestionado por:</small></label>
            <input type="text" id="gestionado" name="gestionado" value="<?php echo $fila['Gestionado']; ?>" maxlength="40">
          </div>

          <div class="div8">
            <label for="fgestion"><small>Fecha gestión:</small></label>
            <input type="datetime-local" id="fgestion" name="fgestion" value="<?php echo $fila['FechaGestion']; ?>">

          </div>

        </section>
        <!--*****************************************************************************************************************************-->
        <hr>
        <footer>
          <div class="divenviar" id="idenviar">
            <input type="submit" name="enviar" id="enviar" value="Guardar Cambios">
          </div>
        </footer>
      </fieldset>
    </form>

    <footer class="footboton">
      <p class="pboton">
        <a href="Registros.php" class="footlink" id="idfootlink">Volver a la página de Registros</a>
      </p>
    </footer>

    <!--///////////////////////////////////////////////////////////////////////////////////////////-->
    <script>
      function limitNumberLength(input) {
        const maxLength = 15;
        if (input.value.length > maxLength) {
          input.value = input.value.slice(0, maxLength);
        }
      }
    </script>
    <!--///////////////////////////////////////////////////////////////////////////////////////////-->

  </div>
</body>

</html>