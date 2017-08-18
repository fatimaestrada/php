$(document).on('click','#btnSave',function(){dbInsert();});
$(document).on('click','#btnDel',function(){
    if (!confirm("Si elimina este item no se recupera")) {
        return false;
    }
    delet($(this).attr("param"));
});

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
            success:function(data){
                var array = eval(data);
                $("#tabla").html(array["contenido"]);
            }
        });
        return false;
    }

function delet(aEliminar){

        $.ajax({
            type:'POST',
            url:'eliminar/eliminar.php',
            data: {"aEliminar":aEliminar},
            dataType:'json',
            success:function(data){
                tabla();
            },
        });
        return false;
    }
