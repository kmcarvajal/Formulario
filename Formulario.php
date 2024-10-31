<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="css/estilo.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <title>Resgistro</title>
</head>

<body>
  <div id="fondo2">
    <fieldset>
      <header>
        <legend>
          <h2>Registrado!</h2>
        </legend>
      </header>
      <section class="contenido">
        <p>
          <?php
          header('Content-Type: text/html; charset=utf-8');
          //Recuperar Datos
          $ejecutivo = $_POST['ejecutivo'];
          $empresa = $_POST['empresa'];
          $umodificacion = $_POST['umodificacion'];
          $ccalidad = $_POST['ccalidad'];
          $eventa = $_POST['eventa'];
          $eactual = $_POST['eactual'];
          $descripcion = $_POST['descripcion'];
          $nregistro = $_POST['nregistro'];
          $fventa = $_POST['fventa'];
          $nombre = $_POST['nombre'];
          $documento = $_POST['documento'];
          $fnacimiento = $_POST['fnacimiento'];
          $telefono1 = $_POST['telefono1'];
          $whatsapp = $_POST['whatsapp'];
          $telefono2 = $_POST['telefono2'];
          $direccion = $_POST['direccion'];
          $barrio = $_POST['barrio'];
          $departamento = $_POST['departamento'];
          $ciudad = $_POST['ciudad'];
          $email = $_POST['email'];
          $rgeografica = $_POST['rgeografica'];
          $observaciones = $_POST['observaciones'];
          $observaciones2 = $_POST['observaciones2'];
          $tventa = $_POST['tventa'];
          $beneficiario1 = $_POST['beneficiario1'];
          $parentesto1 = $_POST['parentesto1'];
          $beneficiario2 = $_POST['beneficiario2'];
          $parentesto2 = $_POST['parentesto2'];
          $mtipo = $_POST['mtipo'];
          $mnombre = $_POST['mnombre'];
          $raza = $_POST['raza'];
          $medad = $_POST['medad'];
          $ebeneficiario1 = $_POST['ebeneficiario1'];
          $eparentesto1 = $_POST['eparentesto1'];
          $ebeneficiario2 = $_POST['ebeneficiario2'];
          $eparentesto2 = $_POST['eparentesto2'];
          $vehiculo = $_POST['vehiculo'];
          $vplaca = $_POST['vplaca'];
          $vsoat = $_POST['vsoat'];
          $vtriesgo = $_POST['vtriesgo'];
          $moto = $_POST['moto'];
          $mplaca = $_POST['mplaca'];
          $msoat = $_POST['msoat'];
          $mtriesgo = $_POST['mtriesgo'];
          $eps = $_POST['eps'];
          $mprepagada = $_POST['mprepagada'];
          $hijos = $_POST['hijos'];
          $edad = $_POST['edad'];
          $grado = $_POST['grado'];
          $vventa = $_POST['vventa'];
          $ncuotas = $_POST['ncuotas'];
          $vmaproximado = $_POST['vmaproximado'];
          $tcredito = $_POST['tcredito'];
          $consigna = $_POST['consigna'];
          $transaccion = $_POST['transaccion'];
          $efectivo = $_POST['efectivo'];
          $titular = $_POST['titular'];
          $banco = $_POST['banco'];
          $tipo = $_POST['tipo'];
          $numero = $_POST['numero'];
          $mes = $_POST['mes'];
          $ano = $_POST['ano'];
          $cvv = $_POST['cvv'];
          $emensajeria = $_POST['emensajeria'];
          $guia = $_POST['guia'];
          $eenvio = $_POST['eenvio'];
          $gestionado = $_POST['gestionado'];
          $fgestion = $_POST['fgestion'];
          //Conexión
          include('config.php');
          mysqli_query($conexion, "insert registro (Ejecutivo,Empresa,UltimaModificacion,ControlCalidad,EstatusVenta,EstadoActual,Descripcion,NumeroRegistro,FechaVenta,Nombre,Documento,
          FechaNacimiento,Telefono1,Whatsapp,Telefono2,Direccion,Barrio,Departamento,Ciudad,Email,ReferenciaGeografica,Observaciones,Observaciones2,TipoVenta,Beneficiario1,Parentesto1,
          Beneficiario2,Parentesto2,TipoMascota,NombreMascota,Raza,EdadMascota,ExequialBeneficiario1,ExequialParentesto1,ExequialBeneficiario2,ExequialParentesto2,Vehiculo,PlacaVehiculo,
          SoatVehiculo,TodoRiesgoVehiculo,Moto,PlacaMoto,SoatMoto,TodoRiesgoMoto,eps,MedicinaPrepagada,Hijos,Edad,Grado,ValorVenta,NumeroCuotas,ValorMensualAproximado,TarjetasCredito,
          Consignaciones,Transacciones,Efectivo,Titular,Banco,Tipo,Numero,Mes,Ano,CVV,EmpresaMensajeria,Guia,EstadoEnvio,Gestionado,FechaGestion) 
          values ('$ejecutivo','$empresa','$umodificacion','$ccalidad','$eventa','$eactual','$descripcion','$nregistro','$fventa','$nombre','$documento','$fnacimiento','$telefono1',
          '$whatsapp','$telefono2','$direccion','$barrio','$departamento','$ciudad','$email','$rgeografica','$observaciones','$observaciones2','$tventa','$beneficiario1','$parentesto1',
          '$beneficiario2','$parentesto2','$mtipo','$mnombre','$raza','$medad','$ebeneficiario1','$eparentesto1','$ebeneficiario2','$eparentesto2','$vehiculo','$vplaca','$vsoat',
          '$vtriesgo','$moto','$mplaca','$msoat','$mtriesgo','$eps','$mprepagada','$hijos','$edad','$grado','$vventa','$ncuotas','$vmaproximado','$tcredito','$consigna','$transaccion',
          '$efectivo','$titular','$banco','$tipo','$numero','$mes','$ano','$cvv','$emensajeria','$guia','$eenvio','$gestionado','$fgestion')")
            or die("Problemas en el select" . mysqli_error($conexion));
          // Cerrar conexión a la base de datos
          mysqli_close($conexion);
          echo "Datos guardados correctamente en la base de datos Registro!";
          ?>
        </p>
      </section>
      <footer>
        <p>
          <a href="Formulario.html">Aceptar</a>
        </p>
      </footer>
    </fieldset>
  </div>
</body>

</html>