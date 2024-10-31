<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/estilo.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Registro</title>
</head>

<body>
    <div id="fondo2">
        <fieldset>
            <header>
                <legend>
                    <h2>Cargado!</h2>
                </legend>
            </header>
            <section class="contenido">
                <p>
                    <?php
                    header('Content-Type: text/html; charset=utf-8');

                    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["excelFile"])) {
                        $csvFile = $_FILES["excelFile"]["tmp_name"];
                        // Abrir archivo CSV
                        $csv = fopen($csvFile, 'r');
                        //Conexión
                        include('config.php');
                        // Leer primera línea y descártala si es necesario
                        $firstRow = fgetcsv($csv, 0, ',');
                        // Procesa el archivo línea por línea
                        while (($row = fgetcsv($csv, 0, ',')) !== false) {
                            $ejecutivo = $row[0];
                            $empresa = $row[1];
                            $umodificacion = $row[2];
                            $ccalidad = $row[3];
                            $eventa = $row[4];
                            $eactual = $row[5];
                            $descripcion = $row[6];
                            $nregistro = $row[7];
                            $fventa = $row[8];
                            $nombre = $row[9];
                            $documento = $row[10];
                            $fnacimiento = $row[11];
                            $telefono1 = $row[12];
                            $whatsapp = $row[13];
                            $telefono2 = $row[14];
                            $direccion = $row[15];
                            $barrio = $row[16];
                            $departamento = $row[17];
                            $ciudad = $row[18];
                            $email = $row[19];
                            $rgeografica = $row[20];
                            $observaciones = $row[21];
                            $observaciones2 = $row[22];
                            $tventa = $row[23];
                            $beneficiario1 = $row[24];
                            $parentesto1 = $row[25];
                            $beneficiario2 = $row[26];
                            $parentesto2 = $row[27];
                            $mtipo = $row[28];
                            $mnombre = $row[29];
                            $raza = $row[30];
                            $medad = $row[31];
                            $ebeneficiario1 = $row[32];
                            $eparentesto1 = $row[33];
                            $ebeneficiario2 = $row[34];
                            $eparentesto2 = $row[35];
                            $vehiculo = $row[36];
                            $vplaca = $row[37];
                            $vsoat = $row[38];
                            $vtriesgo = $row[39];
                            $moto = $row[40];
                            $mplaca = $row[41];
                            $msoat = $row[42];
                            $mtriesgo = $row[43];
                            $eps = $row[44];
                            $mprepagada = $row[45];
                            $hijos = $row[46];
                            $edad = $row[47];
                            $grado = $row[48];
                            $vventa = $row[49];
                            $ncuotas = $row[50];
                            $vmaproximado = $row[51];
                            $tcredito = $row[52];
                            $consigna = $row[53];
                            $transaccion = $row[54];
                            $efectivo = $row[55];
                            $titular = $row[56];
                            $banco = $row[57];
                            $tipo = $row[58];
                            $numero = $row[59];
                            $mes = $row[60];
                            $ano = $row[61];
                            $cvv = $row[62];
                            $emensajeria = $row[63];
                            $guia = $row[64];
                            $eenvio = $row[65];
                            $gestionado = $row[66];
                            $fgestion = $row[67];

                            // Inserción en la base de datos
                            $sql = "INSERT INTO 
                    registro (Ejecutivo,Empresa,UltimaModificacion,ControlCalidad,EstatusVenta,EstadoActual,Descripcion,NumeroRegistro,FechaVenta,Nombre,Documento,FechaNacimiento,
                    Telefono1,Whatsapp,Telefono2,Direccion,Barrio,Departamento,Ciudad,Email,ReferenciaGeografica,Observaciones,Observaciones2,TipoVenta,Beneficiario1,Parentesto1,
                    Beneficiario2,Parentesto2,TipoMascota,NombreMascota,Raza,EdadMascota,ExequialBeneficiario1,ExequialParentesto1,ExequialBeneficiario2,ExequialParentesto2,Vehiculo,
                    PlacaVehiculo,SoatVehiculo,TodoRiesgoVehiculo,Moto,PlacaMoto,SoatMoto,TodoRiesgoMoto,Eps,MedicinaPrepagada,Hijos,Edad,Grado,ValorVenta,NumeroCuotas,ValorMensualAproximado,
                    TarjetasCredito,Consignaciones,Transacciones,Efectivo,Titular,Banco,Tipo,Numero,Mes,Ano,CVV,EmpresaMensajeria,Guia,EstadoEnvio,Gestionado,FechaGestion) 
                    VALUES ('$ejecutivo','$empresa','$umodificacion','$ccalidad','$eventa','$eactual','$descripcion','$nregistro','$fventa','$nombre','$documento','$fnacimiento','$telefono1',
                    '$whatsapp','$telefono2','$direccion','$barrio','$departamento','$ciudad','$email','$rgeografica','$observaciones','$observaciones2','$tventa','$beneficiario1',
                    '$parentesto1','$beneficiario2','$parentesto2','$mtipo','$mnombre','$raza','$medad','$ebeneficiario1','$eparentesto1','$ebeneficiario2','$eparentesto2','$vehiculo',
                    '$vplaca','$vsoat','$vtriesgo','$moto','$mplaca','$msoat','$mtriesgo','$eps','$mprepagada','$hijos','$edad','$grado','$vventa','$ncuotas','$vmaproximado','$tcredito',
                    '$consigna','$transaccion','$efectivo','$titular','$banco','$tipo','$numero','$mes','$ano','$cvv','$emensajeria','$guia','$eenvio','$gestionado','$fgestion')";

                            if ($conexion->query($sql) === true) {
                                echo "Carga insertada con éxito<br>";
                            } else {
                                echo "Error al insertar Carga: " . $conexion->error . "<br>";
                            }
                        }
                        // Cerrar archivo CSV
                        fclose($csv);
                        // Cerrar conexión a la base de datos
                        $conexion->close();
                        echo "Datos cargados correctamente en la base de datos Registro!";
                    } else {
                        echo "No se recibió ningún archivo.";
                    }
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