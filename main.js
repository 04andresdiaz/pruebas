$(document).ready(function(){
  $("#bto").on("click", function(){
   var  user = document.getElementById("a").value;
   var  pass = document.getElementById("b").value;
    $.ajax({
        type: "POST",
        url: "controlador.php",
        data: "usuario="+user+"&contrasena="+pass,
        success: function(res){
          if (res == "1") {
            location.href = 'vistas/vista_principal_administrador.php';
          }else if(res == "2"){
            alert("El Usuario No existe")
          }
        }
      })
    })
})
