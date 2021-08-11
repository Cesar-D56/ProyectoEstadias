$(function(){

    $("#info").submit(function(e){
        const postData = {
        usrID:$("#id").val(),
        valor:$("#valor").val(),
        nombres:$("#nombres").val(),
        apellidos:$("#apellidos").val(),
        titulo:$("#titulo").val(),
        area:$("#area").val(),
        telefono:$("#telefono").val(),
        twitter:$("#twitter").val(),
        desc:$("#desc").val()
        };
        $.post("../scripts/editUsr.php", postData, function(response){
          //setValue(response);
            console.log(response);
            if(parseInt(response)==1){
                swal.fire({
                    title: "Completado",
                    text: "Se a guardado la informacion con exito",
                  });  
            }else{
                swal.fire({
                    title: "Error",
                    text: "Algo a salido mal durante la operacion",
                  });  
            }
              
        });
        e.preventDefault();
      });
      
      $("#advanced").submit(function(e){
        const postData = {
        usrID:$("#id").val(),
        valor:$("#valor").val(),
        email:$("#email").val(),
        password:$("#password").val(),
        tipo:parseInt($("#tipo").val())
        };
        $.post("../scripts/editUsr.php", postData, function(response){
          //setValue(response);
            console.log(response);
            if(parseInt(response)==1){
                swal.fire({
                    title: "Completado",
                    text: "Se a guardado la informacion con exito",
                  });  
            }else{
                swal.fire({
                    title: "Error",
                    text: "Algo a salido mal durante la operacion",
                  });  
            }
              
        });
        e.preventDefault();
      });

});