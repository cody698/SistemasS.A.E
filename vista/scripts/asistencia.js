var tabla;

//funcion que se ejecuta al inicio
function init(){

  /*$("#formulario").on("submit",function(e){
   	registrar_asistencia(e);
   })*/

}

//funcion limpiar
function limpiar(){
  $("#codigo_persona").val("");
  setTimeout('document.location.reload()',500);

}

//function registrar_asistencia(e){
function registrar_asistencia(){
  /*e.preventDefault();//no se activara la accion predeterminada 
     $("#btnGuardar").prop("disabled",true);*/
  var formData=new FormData($("#formulario")[0]);
//url: "../controlador/marcacionControlador.php?ctrRegMarcacion",
  $.ajax({
    url: "controlador/marcacionControlador.php?ctrRegMarcacion",
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function(datos){
      
      limpiar();
      //$("#movimientos").html(datos);
      //bootbox.alert(datos);
    }
  });
  
}

init();

/*========================================
ver detalle de ingreso y salida de tramite
=========================================*/
function VerDetalleVitacora(codSeguimiento){
  $("#modal-xl").modal("show")

  let obj=""

  $.ajax({
    type:"POST",
    url:"vista/seguimiento/MVerDetalleVitacora.php?cod="+codSeguimiento,
    data:obj,
    success:function(data){
      $("#content-xl").html(data)
    }
  })
}