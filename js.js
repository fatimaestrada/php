$(document).on('click','#btnSave',function(){dbInsert();})

function dbInsert(){
  var txtNombre = $("#txtNombre").val();
  var txtImporte = $("#txtImporte").val();
  var txtFecha = $("#txtFecha").val();

  $.ajax({
    type:'POST',
    url:'dbinc.php',
    data: {"txtNombre":txtNombre ,"txtImporte":txtImporte,"txtFecha":txtFecha} ,
        dataType:'json',
        beforeSend:function(){
          $("#div_exito").fadeOut(30);
          $("#div_error").fadeOut(30);
        },
        success:function(data){
            var salida = eval(data);
            if (salida["errores"] == "") {
              $("#div_exito").html("Su dato fue agregado").fadeIn(1000);
            } else {
              $("#div_error").html(salida["errores"]).fadeIn(1000);
            }

        },
        complete:function(){
        }
  });

  return false;
}


function tabla(){

        $.ajax({
            type:'POST',
            url:'tabla.php',
            data: {"xxx":"xxx"},
            dataType:'json',
            beforeSend:function(){
            },
            success:function(data){
                var array = eval(data);
                $("#tabla").html(array["contenido"]);
            },
            complete:function(){
            }
        });
        return false;
    }
