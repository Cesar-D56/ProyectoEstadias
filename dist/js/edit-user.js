$(function(){

    $("#info").submit(function(e){
        const postData = {
        usrID:$("#id").val(),
        valor:parseInt($("#valor").val()),
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
        const postData2 = {
        usrID:$("#id2").val(),
        valor:parseInt($("#valor2").val()),
        email:$("#email").val(),
        password:$("#password").val(),
        tipo:parseInt($("#tipo").val())
        };
        $.post("../scripts/editUsr.php", postData2, function(response){
          //setValue(response);
            console.log(response);
            if(parseInt(response)==1){
                console.log($("#valor").val());
                swal.fire({
                    title: "Completado",
                    text: "Se a actualizado la informacion con exito",
                  });
                $('#password').val("");  
            }else if(parseInt(response)==2){
              swal.fire({
                title: "Error",
                text: "Advertencia: El correo ingresado ya esta registrado",
              }); 
              $('#email').val("");
            }else{
                swal.fire({
                    title: "Error",
                    text: "Algo a salido muy mal durante la operacion",
                  });  
            }
              
        });
        e.preventDefault();
      });

      $('#delete').on('click', function(e){
        e.preventDefault();
        var form_data = new FormData();      
        const href = $('#delete').attr('value')
        form_data.append('id', href)

        swal.fire({
            title: '¿Estas Seguro?',
            text: 'El usuario sera eliminado',
            showCancelButton:true,
            confirmButtonText:"Aceptar",
        }).then((result)=>{
            if(result.value){
                $.ajax({
                  url: '../scripts/deleteUsr.php', // <-- point to server-side PHP script 
                  dataType: 'text',  // <-- what to expect back from the PHP script, if anything
                  cache: false,
                  contentType: false,
                  processData: false,
                  data: form_data,                         
                  type: 'post',
                  success: function(php_script_response){
                      alert(php_script_response); // <-- display response from the PHP script, if any
                  }
                })
            }
        })
    })
});