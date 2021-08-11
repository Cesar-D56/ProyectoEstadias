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
            }else{
                swal.fire({
                    title: "Error",
                    text: "Algo a salido muy mal durante la operacion",
                  });  
            }
              
        });
        e.preventDefault();
      });

      $("#upload").submit(function(e){

        /*
        var file_data = $("#fileToUpload").prop("files")[0];
        var form_data = new FormData();
        form_data.append("file", file_data);
        console.log(form_data["file"]);
        const postData3 = {
        usrID:$("#id3").val(),
        image:$(form_data),
        };
        $.post("../scripts/editUsr.php", postData3, function(response){
          //setValue(response);
            console.log(response);
            if(parseInt(response)==1){
                console.log($("#valor").val());
                swal.fire({
                    title: "Completado",
                    text: "Se a actualizado la informacion con exito",
                  });
                $('#password').val("");  
            }else{
                swal.fire({
                    title: "Error",
                    text: "Algo a salido muy mal durante la operacion",
                  });  
            }
              
        });
        e.preventDefault();
        */
        
        var formData = new FormData();
        var files = $("#fileToUpload"[0].files[0]);
        formData.append('file', files);
        $.ajax({
            url : "fileUpload.php",
            type: "post",
            data : formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response){
                $('.result').html(response.html);
            }
        }
      });
});