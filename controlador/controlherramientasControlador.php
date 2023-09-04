<?php
$ruta = parse_url($_SERVER['REQUEST_URI']);

if (isset($ruta["query"])) {

  if (
    $ruta["query"] == "ctrRegControlHerramienta" ||
    $ruta["query"] == "ctrEditControlHerramienta" ||
    $ruta["query"] == "ctrRegRegistrosControlHerramientas" ||
    $ruta["query"] == "ctrRepHerramientas" ||
    $ruta["query"] == "ctrRegDatosInforme" ||
    $ruta["query"] == "ctrDevolucionHerramienta" ||
    $ruta["query"] == "ctrEliControlHerramienta"
  ) {
    $metodo = $ruta["query"];
    $controlherramienta = new ControladorHerramientas();
    $controlherramienta->$metodo();
  }
}

class ControladorHerramientas
{

  static public function ctrInfoControlHerramientas()
  {
    $respuesta = ModeloControlHerramientas::mdlInfoControlHerramientas();
    return $respuesta;
  }

  static public function ctrInfoControlEnvio()
  {
    $respuesta = ModeloControlHerramientas::mdlInfoControlEnvio();
    return $respuesta;
  }

  static public function ctrInfoControlEnvioEstado($id)
  {
    $respuesta = ModeloControlHerramientas::mdlInfoControlEnvioEstado($id);
    return $respuesta;
  }



  static public function ctrRegControlHerramienta()
  {
    require_once "../modelo/controlherramientasModelo.php";

    $desControlHerramientas = $_POST["desControlHerramientas"];
    $pnControlHerramientas = $_POST["pnControlHerramientas"];
    $pnaltControlHerramientas = $_POST["pnaltControlHerramientas"];
    $numserieControlHerramientas = $_POST["numserieControlHerramientas"];
    $codigoControlHerramientas = $_POST["codigoControlHerramientas"];
    $marcafabriControlHerramientas = $_POST["marcafabriControlHerramientas"];
    $cantidadControlHerramientas = $_POST["cantidadControlHerramientas"];
    $unidadControlHerramientas = $_POST["unidadControlHerramientas"];
    $ubicacionControlHerramientas = $_POST["ubicacionControlHerramientas"];
    $fechacalControlHerramientas = $_POST["fechacalControlHerramientas"];
    $periodocalControlHerramientas = $_POST["periodocalControlHerramientas"];
    $fechavenciControlHerramientas = $_POST["fechavenciControlHerramientas"];
    $estadoControlHerramientas = $_POST["estadoControlHerramientas"];
    $diasalertaControlHerramientas = $_POST["diasalertaControlHerramientas"];
    $origencaliControlHerramientas = $_POST["origencaliControlHerramientas"];
    $propiedaControlHerramientas = $_POST["propiedaControlHerramientas"];
    $numcarpetaControlHerramientas = $_POST["numcarpetaControlHerramientas"];
    $numcertiControlHerramientas = $_POST["numcertiControlHerramientas"];
    $numregistroControlHerramientas = $_POST["numregistroControlHerramientas"];
    $alcaninstrucControlHerramientas = $_POST["alcaninstrucControlHerramientas"];
    $resinstruControlHerramientas = $_POST["resinstruControlHerramientas"];
    $ubicacionautoControlHerramientas = $_POST["ubicacionautoControlHerramientas"];
    $docsalidaControlHerramientas = $_POST["docsalidaControlHerramientas"];

    $data = array(
      "desControlHerramientas" => $_POST["desControlHerramientas"],
      "pnControlHerramientas" => $_POST["pnControlHerramientas"],
      "pnaltControlHerramientas" => $_POST["pnaltControlHerramientas"],
      "numserieControlHerramientas" => $_POST["numserieControlHerramientas"],
      "codigoControlHerramientas" => $_POST["codigoControlHerramientas"],
      "marcafabriControlHerramientas" => $_POST["marcafabriControlHerramientas"],
      "cantidadControlHerramientas" => $_POST["cantidadControlHerramientas"],
      "unidadControlHerramientas" => $_POST["unidadControlHerramientas"],
      "ubicacionControlHerramientas" => $_POST["ubicacionControlHerramientas"],
      "fechacalControlHerramientas" => $_POST["fechacalControlHerramientas"],
      "periodocalControlHerramientas" => $_POST["periodocalControlHerramientas"],
      "fechavenciControlHerramientas" => $_POST["fechavenciControlHerramientas"],
      "estadoControlHerramientas" => $_POST["estadoControlHerramientas"],
      "diasalertaControlHerramientas" => $_POST["diasalertaControlHerramientas"],
      "origencaliControlHerramientas" => $_POST["origencaliControlHerramientas"],
      "propiedaControlHerramientas" => $_POST["propiedaControlHerramientas"],
      "numcarpetaControlHerramientas" => $_POST["numcarpetaControlHerramientas"],
      "numcertiControlHerramientas" => $_POST["numcertiControlHerramientas"],
      "numregistroControlHerramientas" => $_POST["numregistroControlHerramientas"],
      "alcaninstrucControlHerramientas" => $_POST["alcaninstrucControlHerramientas"],
      "resinstruControlHerramientas" => $_POST["resinstruControlHerramientas"],
      "ubicacionautoControlHerramientas" => $_POST["ubicacionautoControlHerramientas"],
      "docsalidaControlHerramientas" => $_POST["docsalidaControlHerramientas"]
    );

    $respuesta = ModeloControlHerramientas::mdlRegControlHerramientas($data);
    echo $respuesta;
  }

  static public function ctrInfoControlHerramienta($id)
  {
    $respuesta = ModeloControlHerramientas::mdlInfoControlHerramienta($id);
    return $respuesta;
  }

  static public function ctrEditControlHerramienta()
  {

    require_once "../modelo/controlherramientasModelo.php";

    $desControlHerramientas = $_POST["desControlHerramientas"];
    $pnControlHerramientas = $_POST["pnControlHerramientas"];
    $pnaltControlHerramientas = $_POST["pnaltControlHerramientas"];
    $numserieControlHerramientas = $_POST["numserieControlHerramientas"];
    $codigoControlHerramientas = $_POST["codigoControlHerramientas"];
    $marcafabriControlHerramientas = $_POST["marcafabriControlHerramientas"];
    $cantidadControlHerramientas = $_POST["cantidadControlHerramientas"];
    $unidadControlHerramientas = $_POST["unidadControlHerramientas"];
    $ubicacionControlHerramientas = $_POST["ubicacionControlHerramientas"];
    $fechacalControlHerramientas = $_POST["fechacalControlHerramientas"];
    $periodocalControlHerramientas = $_POST["periodocalControlHerramientas"];
    $fechavenciControlHerramientas = $_POST["fechavenciControlHerramientas"];
    $estadoControlHerramientas = $_POST["estadoControlHerramientas"];
    $diasalertaControlHerramientas = $_POST["diasalertaControlHerramientas"];
    $origencaliControlHerramientas = $_POST["origencaliControlHerramientas"];
    $propiedaControlHerramientas = $_POST["propiedaControlHerramientas"];
    $numcarpetaControlHerramientas = $_POST["numcarpetaControlHerramientas"];
    $numcertiControlHerramientas = $_POST["numcertiControlHerramientas"];
    $numregistroControlHerramientas = $_POST["numregistroControlHerramientas"];
    $alcaninstrucControlHerramientas = $_POST["alcaninstrucControlHerramientas"];
    $resinstruControlHerramientas = $_POST["resinstruControlHerramientas"];
    $ubicacionautoControlHerramientas = $_POST["ubicacionautoControlHerramientas"];
    $docsalidaControlHerramientas = $_POST["docsalidaControlHerramientas"];
    $data = array(
      "idControlHerramientas" => $_POST["idControlHerramientas"],
      "desControlHerramientas" => $_POST["desControlHerramientas"],
      "pnControlHerramientas" => $_POST["pnControlHerramientas"],
      "pnaltControlHerramientas" => $_POST["pnaltControlHerramientas"],
      "numserieControlHerramientas" => $_POST["numserieControlHerramientas"],
      "codigoControlHerramientas" => $_POST["codigoControlHerramientas"],
      "marcafabriControlHerramientas" => $_POST["marcafabriControlHerramientas"],
      "cantidadControlHerramientas" => $_POST["cantidadControlHerramientas"],
      "unidadControlHerramientas" => $_POST["unidadControlHerramientas"],
      "ubicacionControlHerramientas" => $_POST["ubicacionControlHerramientas"],
      "fechacalControlHerramientas" => $_POST["fechacalControlHerramientas"],
      "periodocalControlHerramientas" => $_POST["periodocalControlHerramientas"],
      "fechavenciControlHerramientas" => $_POST["fechavenciControlHerramientas"],
      "estadoControlHerramientas" => $_POST["estadoControlHerramientas"],
      "diasalertaControlHerramientas" => $_POST["diasalertaControlHerramientas"],
      "origencaliControlHerramientas" => $_POST["origencaliControlHerramientas"],
      "propiedaControlHerramientas" => $_POST["propiedaControlHerramientas"],
      "numcarpetaControlHerramientas" => $_POST["numcarpetaControlHerramientas"],
      "numcertiControlHerramientas" => $_POST["numcertiControlHerramientas"],
      "numregistroControlHerramientas" => $_POST["numregistroControlHerramientas"],
      "alcaninstrucControlHerramientas" => $_POST["alcaninstrucControlHerramientas"],
      "resinstruControlHerramientas" => $_POST["resinstruControlHerramientas"],
      "ubicacionautoControlHerramientas" => $_POST["ubicacionautoControlHerramientas"],
      "docsalidaControlHerramientas" => $_POST["docsalidaControlHerramientas"]
    );

    $respuesta = ModeloControlHerramientas::mdlEditControlHerramienta($data);
    echo $respuesta;
  }

  static public function ctrEliControlHerramienta()
  {
    require "../modelo/controlherramientasModelo.php";
    $data = $_POST["id"];

    $respuesta = ModeloControlHerramientas::mdlEliControlHerramienta($data);

    echo $respuesta;
  }

  static public function ctrRegRegistrosControlHerramientas()
  {
    require_once "../modelo/controlherramientasModelo.php";

    $data = array(
      "registros" => $_FILES['dataControlHerra']
    );

    $respuesta = ModeloControlHerramientas::mdlRegRegistrosControlHerramientas($data);
    echo $respuesta;
  }

  static public function ctrRepHerramientas()
  {
    require "../modelo/controlherramientasModelo.php";

    $nomHerramienta = $_POST["nomHerramienta"];
    $data = array(
      "nomHerramienta" => $nomHerramienta
    );
    $respuesta = ModeloControlHerramientas::mdlRepHerramienta($data);
    foreach ($respuesta as $value) {
?>

      <tr>
        <td><?php echo $value["id_controlherramientas"]; ?></td>
        <td><?php echo $value["descripcion_controlherramientas"]; ?></td>
        <td><?php echo $value["pn_controlherramientas"]; ?></td>
        <td><?php echo $value["numserie_controlherramientas"]; ?></td>
        <td><?php echo $value["codigo_controlherramientas"]; ?></td>
        <td><?php echo $value["fechacali_controlherramientas"]; ?></td>
        <td><?php echo $value["fechavenci_controlherramientas"]; ?></td>
        <td><?php echo $value["ubicacion_controlherramientas"]; ?></td>
        <td><?php echo $value["numcarpeta_controlherramientas"]; ?></td>
      </tr>


    <?php

    }
    ?>
    <script>
      $(function() {
        $("#DataTableHerramientas").DataTable({
          "responsive": true,
          "lengthChange": false,
          "autoWidth": false,
        }).buttons().container().appendTo('#DataTableHerramientas_wrapper .col-md-6:eq(0)');

      });
    </script>
<?php
  }

  static public function ctrHerramientas($herramienta)
  {
    $respuesta = ModeloControlHerramientas::mdlHerramientas($herramienta);
    return $respuesta;
  }

  static public function ctrPorHerramientas($id)
  {
    $respuesta = ModeloControlHerramientas::mdlPorHerramientas($id);
    return $respuesta;
  }

  static public function ctrSelecHerramientas($id)
  {
    $respuesta = ModeloControlHerramientas::mdlSelecHerramientas($id);
    return $respuesta;
  }

  static public function ctrRegDatosInforme()
  {
    require "../modelo/controlherramientasModelo.php";
    $data = array(
      "seleccionados" => $_POST['seleccionados'],
      "fechaInforme" => $_POST['fechaInforme'],
      "numInforme" => $_POST['numInforme'],
      "respAlmacen" => $_POST['respAlmacen'],
      "repTecnico" => $_POST['repTecnico'],
      "encargadoInforme" => $_POST['encargadoInforme'],
      "asuntoInforme" => $_POST['asuntoInforme'],
      "descInforme" => $_POST['descInforme'],
    );
    $respuesta = ModeloControlHerramientas::mdlRegDatosInforme($data);
    echo $respuesta;
  }

  static public function ctrInfoHerramienta()
  {
    $respuesta = ModeloControlHerramientas::mdlInfoHerramienta();
    return $respuesta;
  }

  static public function ctrInfoInforme($id)
  {
    $respuesta = ModeloControlHerramientas::mdlInfoInforme($id);
    return $respuesta;
  }
  
}
