<?php
$ruta = parse_url($_SERVER['REQUEST_URI']);

if (isset($ruta["query"])) {

  if (
    $ruta["query"] == "ctrRegHerramienta" ||
    $ruta["query"] == "ctrEditControlHerramienta" ||
    $ruta["query"] == "ctrRegRegistrosHerramientas" ||
    $ruta["query"] == "ctrRepHerramientas" ||
    $ruta["query"] == "ctrEliControlHerramienta"
  ) {
    $metodo = $ruta["query"];
    $herramienta = new ControladorHerramientasSalidas();
    $herramienta->$metodo();
  }
}

class ControladorHerramientasSalidas
{

  static public function ctrInfoHerramientasSalidas()
  {
    $respuesta = ModeloHerramientas::mdlInfoHerramientas();
    return $respuesta;
  }

  static public function ctrRegHerramienta()
  {
    require_once "../modelo/herramientasModelo.php";

    $nHerramientas = $_POST["nHerramientas"];
    $desHerramientas = $_POST["desHerramientas"];
    $pnHerramientas = $_POST["pnHerramientas"];
    $pnaltHerramientas = $_POST["pnaltHerramientas"];
    $numserieHerramientas = $_POST["numserieHerramientas"];
    $codigoHerramientas = $_POST["codigoHerramientas"];
    $marcafabriHerramientas = $_POST["marcafabriHerramientas"];
    $cantidadHerramientas = $_POST["cantidadHerramientas"];
    $unidadHerramientas = $_POST["unidadHerramientas"];
    $ubicacionHerramientas = $_POST["ubicacionHerramientas"];
    $observacionHerramientas = $_POST["observacionHerramientas"];
    $aeronaveHerramientas = $_POST["aeronaveHerramientas"];
    $ataHerramientas = $_POST["ataHerramientas"];
    $docHerramientas = $_POST["docHerramientas"];
    $numcarpetaHerramientas = $_POST["numcarpetaHerramientas"];
    $equivalenciatecnicaHerramientas = $_POST["equivalenciatecnicaHerramientas"];
    $hojamanualHerramientas = $_POST["hojamanualHerramientas"];
    $stickerHerramientas = $_POST["stickerHerramientas"];
    $ultimoinventarioHerramientas = $_POST["ultimoinventarioHerramientas"];
    $calibradaespecializadaHerramientas = $_POST["calibradaespecializadaHerramientas"];
    $estadoHerramientas = $_POST["estadoHerramientas"];
    $requiereinspeperiodicaHerramientas = $_POST["requiereinspeperiodicaHerramientas"];
    $rangomedidaHerramientas = $_POST["rangomedidaHerramientas"];
    $ubicacionactualHerramientas = $_POST["ubicacionactualHerramientas"];
    $observacionesdelHerramientas = $_POST["observacionesdelHerramientas"];
    $ubicacionactualHerramientas = $_POST["ubicacionactualHerramientas"];
    /*capturamos la imagen*/
    $imagen = $_FILES["imgHerramientas"];

    $nomImagen = $imagen["name"];
    $archImagen = $imagen["tmp_name"];

    move_uploaded_file($archImagen, "../assest/dist/img/herramientas/" . $nomImagen);

    $data = array(
      "nHerramientas" => $_POST["nHerramientas"],
      "desHerramientas" => $_POST["desHerramientas"],
      "pnHerramientas" => $_POST["pnHerramientas"],
      "pnaltHerramientas" => $_POST["pnaltHerramientas"],
      "numserieHerramientas" => $_POST["numserieHerramientas"],
      "codigoHerramientas" => $_POST["codigoHerramientas"],
      "marcafabriHerramientas" => $_POST["marcafabriHerramientas"],
      "cantidadHerramientas" => $_POST["cantidadHerramientas"],
      "unidadHerramientas" => $_POST["unidadHerramientas"],
      "ubicacionHerramientas" => $_POST["ubicacionHerramientas"],
      "observacionHerramientas" => $_POST["observacionHerramientas"],
      "aeronaveHerramientas" => $_POST["aeronaveHerramientas"],
      "ataHerramientas" => $_POST["ataHerramientas"],
      "docHerramientas" => $_POST["docHerramientas"],
      "numcarpetaHerramientas" => $_POST["numcarpetaHerramientas"],
      "equivalenciatecnicaHerramientas" => $_POST["equivalenciatecnicaHerramientas"],
      "hojamanualHerramientas" => $_POST["hojamanualHerramientas"],
      "stickerHerramientas" => $_POST["stickerHerramientas"],
      "ultimoinventarioHerramientas" => $_POST["ultimoinventarioHerramientas"],
      "calibradaespecializadaHerramientas" => $_POST["calibradaespecializadaHerramientas"],
      "estadoHerramientas" => $_POST["estadoHerramientas"],
      "requiereinspeperiodicaHerramientas" => $_POST["requiereinspeperiodicaHerramientas"],
      "rangomedidaHerramientas" => $_POST["rangomedidaHerramientas"],
      "ubicacionactualHerramientas" => $_POST["ubicacionactualHerramientas"],
      "observacionesdelHerramientas" => $_POST["observacionesdelHerramientas"],
      "imgHerramientas" => $nomImagen
    );

    $respuesta = ModeloHerramientas::mdlRegHerramientas($data);
    echo $respuesta;
  }

  static public function ctrInfoHerramienta($id)
  {
    $respuesta = ModeloHerramientas::mdlInfoHerramienta($id);
    return $respuesta;
  }

  static public function ctrInfoHerraSeleccionada($id)
  {
    $respuesta = ModeloHerramientas::mdlInfoHerraSeleccionada($id);
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

  static public function ctrRegRegistrosHerramientas()
  {
    require_once "../modelo/herramientasModelo.php";

    $data = array(
      "registros" => $_FILES['dataHerramientas']
    );

    $respuesta = ModeloHerramientas::mdlRegRegistrosHerramientas($data);
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
}
