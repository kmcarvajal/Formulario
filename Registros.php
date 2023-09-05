<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="css/estilo.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device=width, user-scalable=no">
  <title>Consulta de Datos</title>
</head>

<body>
  <div id="fondo">
    <fieldset>
      <header>
        <legend>
          <h2>Consulta de Registros</h2>
        </legend>
      </header>

      <section class="contenido">
        <label for="busqueda" id="labelbusqueda">Buscar:</label>
        <input type="text" id="busqueda" onkeyup="buscar()">
        <button onclick="buscar()" id="buscar">Buscar</button>
      </section>
      <script>
        function buscar() {
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById("busqueda");
          filter = input.value.toUpperCase();
          table = document.getElementsByTagName("table")[0];
          tr = table.getElementsByTagName("tr");

          // Recorre todas las filas de la tabla y muestra u oculta según el filtro
          for (i = 1; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td");
            for (var j = 0; j < td.length; j++) {
              if (td[j]) {
                txtValue = td[j].textContent || td[j].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                  tr[i].style.display = "";
                  break; // Muestra la fila y pasa a la siguiente
                } else {
                  tr[i].style.display = "none"; // Oculta la fila
                }
              }
            }
          }
        }
      </script>


      <section class="contenido" id="conttabla">
        <p>

          <?php
          // Conexión a la base de datos
          include('config.php');

          // Realizar la consulta
          $consulta = "SELECT * FROM registro";
          $resultado = mysqli_query($conexion, $consulta);

          if ($resultado) {
            // Mostrar los datos en una tabla
            echo '<table border="1">';
            echo '<tr><th>Ejecutivo</th><th>Empresa</th><th>UltimaModificacion</th><th>ControlCalidad</th><th>EstatusVenta</th><th>EstadoActual</th><th>Descripcion</th><th>NumeroRegistro</th>
        <th>FechaVenta</th><th>Nombre</th><th>Documento</th><th>FechaNacimiento</th><th>Telefono1</th><th>Whatsapp</th><th>Telefono2</th><th>Direccion</th><th>Barrio</th>
        <th>Departamento</th><th>Ciudad</th><th>Email</th><th>ReferenciaGeografica</th><th>Observaciones</th><th>Observaciones2</th><th>TipoVenta</th><th>Beneficiario1</th>
        <th>Parentesto1</th><th>Beneficiario2</th><th>Parentesto2</th><th>TipoMascota</th><th>NombreMascota</th><th>Raza</th><th>EdadMascota</th><th>ExequialBeneficiario1</th>
        <th>ExequialParentesto1</th><th>ExequialBeneficiario2</th><th>ExequialParentesto2</th><th>Vehiculo</th><th>PlacaVehiculo</th><th>SoatVehiculo</th><th>TodoRiesgoVehiculo</th>
        <th>Moto</th><th>PlacaMoto</th><th>SoatMoto</th><th>TodoRiesgoMoto</th><th>Eps</th><th>MedicinaPrepagada</th><th>Hijos</th><th>Edad</th><th>Grado</th><th>ValorVenta</th>
        <th>NumeroCuotas</th><th>ValorMensualAproximado</th><th>TarjetasCredito</th><th>Consignaciones</th><th>Transacciones</th><th>Efectivo</th><th>Titular</th><th>Banco</th>
        <th>Tipo</th><th>Numero</th><th>Mes</th><th>Ano</th><th>CVV</th><th>EmpresaMensajeria</th><th>Guia</th><th>EstadoEnvio</th><th>Gestionado</th><th>FechaGestion</th>
        <th>Visualizar</th><th>Editar</th><th>Eliminar</th></tr>';

            while ($fila = mysqli_fetch_assoc($resultado)) {
              echo '<tr>';
              echo '<td>' . $fila['Ejecutivo'] . '</td>';
              echo '<td>' . $fila['Empresa'] . '</td>';
              echo '<td>' . $fila['UltimaModificacion'] . '</td>';
              echo '<td>' . $fila['ControlCalidad'] . '</td>';
              echo '<td>' . $fila['EstatusVenta'] . '</td>';
              echo '<td>' . $fila['EstadoActual'] . '</td>';
              echo '<td>' . $fila['Descripcion'] . '</td>';
              echo '<td>' . $fila['NumeroRegistro'] . '</td>';
              echo '<td>' . $fila['FechaVenta'] . '</td>';
              echo '<td>' . $fila['Nombre'] . '</td>';
              echo '<td>' . $fila['Documento'] . '</td>';
              echo '<td>' . $fila['FechaNacimiento'] . '</td>';
              echo '<td>' . $fila['Telefono1'] . '</td>';
              echo '<td>' . $fila['Whatsapp'] . '</td>';
              echo '<td>' . $fila['Telefono2'] . '</td>';
              echo '<td>' . $fila['Direccion'] . '</td>';
              echo '<td>' . $fila['Barrio'] . '</td>';
              echo '<td>' . $fila['Departamento'] . '</td>';
              echo '<td>' . $fila['Ciudad'] . '</td>';
              echo '<td>' . $fila['Email'] . '</td>';
              echo '<td>' . $fila['ReferenciaGeografica'] . '</td>';
              echo '<td>' . $fila['Observaciones'] . '</td>';
              echo '<td>' . $fila['Observaciones2'] . '</td>';
              echo '<td>' . $fila['TipoVenta'] . '</td>';
              echo '<td>' . $fila['Beneficiario1'] . '</td>';
              echo '<td>' . $fila['Parentesto1'] . '</td>';
              echo '<td>' . $fila['Beneficiario2'] . '</td>';
              echo '<td>' . $fila['Parentesto2'] . '</td>';
              echo '<td>' . $fila['TipoMascota'] . '</td>';
              echo '<td>' . $fila['NombreMascota'] . '</td>';
              echo '<td>' . $fila['Raza'] . '</td>';
              echo '<td>' . $fila['EdadMascota'] . '</td>';
              echo '<td>' . $fila['ExequialBeneficiario1'] . '</td>';
              echo '<td>' . $fila['ExequialParentesto1'] . '</td>';
              echo '<td>' . $fila['ExequialBeneficiario2'] . '</td>';
              echo '<td>' . $fila['ExequialParentesto2'] . '</td>';
              echo '<td>' . $fila['Vehiculo'] . '</td>';
              echo '<td>' . $fila['PlacaVehiculo'] . '</td>';
              echo '<td>' . $fila['SoatVehiculo'] . '</td>';
              echo '<td>' . $fila['TodoRiesgoVehiculo'] . '</td>';
              echo '<td>' . $fila['Moto'] . '</td>';
              echo '<td>' . $fila['PlacaMoto'] . '</td>';
              echo '<td>' . $fila['SoatMoto'] . '</td>';
              echo '<td>' . $fila['TodoRiesgoMoto'] . '</td>';
              echo '<td>' . $fila['Eps'] . '</td>';
              echo '<td>' . $fila['MedicinaPrepagada'] . '</td>';
              echo '<td>' . $fila['Hijos'] . '</td>';
              echo '<td>' . $fila['Edad'] . '</td>';
              echo '<td>' . $fila['Grado'] . '</td>';
              echo '<td>' . $fila['ValorVenta'] . '</td>';
              echo '<td>' . $fila['NumeroCuotas'] . '</td>';
              echo '<td>' . $fila['ValorMensualAproximado'] . '</td>';
              echo '<td>' . $fila['TarjetasCredito'] . '</td>';
              echo '<td>' . $fila['Consignaciones'] . '</td>';
              echo '<td>' . $fila['Transacciones'] . '</td>';
              echo '<td>' . $fila['Efectivo'] . '</td>';
              echo '<td>' . $fila['Titular'] . '</td>';
              echo '<td>' . $fila['Banco'] . '</td>';
              echo '<td>' . $fila['Tipo'] . '</td>';
              echo '<td>' . $fila['Numero'] . '</td>';
              echo '<td>' . $fila['Mes'] . '</td>';
              echo '<td>' . $fila['Ano'] . '</td>';
              echo '<td>' . $fila['CVV'] . '</td>';
              echo '<td>' . $fila['EmpresaMensajeria'] . '</td>';
              echo '<td>' . $fila['Guia'] . '</td>';
              echo '<td>' . $fila['EstadoEnvio'] . '</td>';
              echo '<td>' . $fila['Gestionado'] . '</td>';
              echo '<td>' . $fila['FechaGestion'] . '</td>';
              echo '<td><a href="visualizar.php?NumeroRegistro=' . $fila['NumeroRegistro'] . '" class="visualizarlink">Visualizar</a></td>';
              echo '<td><a href="editar.php?NumeroRegistro=' . $fila['NumeroRegistro'] . '" class="editarlink">Editar</a></td>';
              echo '<td><a href="eliminar.php?NumeroRegistro=' . $fila['NumeroRegistro'] . '" class="eliminarlink" onclick="confirmarEliminacion(event)">Eliminar</a></td>';
              echo '</tr>';
            }

            echo '</table>';

            // Liberar el resultado
            mysqli_free_result($resultado);
          } else {
            echo 'Error en la consulta: ' . mysqli_error($conexion);
          }

          // Cerrar la conexión a la base de datos
          mysqli_close($conexion);
          ?>
        </p>
      </section>
      <footer class="footboton">
        <p class="pboton">
          <a href="Formulario.html" class="footlink" id="idfootlink">Volver</a>
        </p>
      </footer>
    </fieldset>
  </div>

  <!--///////////////////////////////////////////////////////////////////////////////////////////-->
  <script>
    function confirmarEliminacion(event) {
      event.preventDefault(); // Previene la acción predeterminada del enlace

      // Preguntar al usuario la contraseña
      const contraseña = prompt("Por favor, digite la contraseña para eliminar este registro:");

      // Comprobar si la contraseña ingresada es válida
      const contraseñaValida = "contraseña";

      if (contraseña === contraseñaValida) {
        // Si la contraseña es válida, redirigir al archivo eliminar.php
        window.location.href = event.target.href;
      } else {
        // Si la contraseña es incorrecta, mostrar un mensaje de error
        alert("Cancelado!. No se eliminó el registro.");
      }
    }
  </script>
  <!--///////////////////////////////////////////////////////////////////////////////////////////-->

</body>

</html>