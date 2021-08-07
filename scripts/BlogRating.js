var obj;
$( document ).ready(function() {
    obj = JSON.parse(rating);
    //var calif = parseInt(obj.valor); 
    console.log(obj.valor);
    console.log(obj.userId);
    console.log(obj.blogID);
    //console.log(myvar);

    setValue(parseInt(obj.valor));
    
    function setValue(valor){
      console.log("setValue "+valor);
      switch(valor) {
        case 0:
            document.getElementById("btn-yes").disabled = true;
            document.getElementById("btn-no").disabled = false;
            break;
        case 1:
            document.getElementById("btn-yes").disabled = false;
            document.getElementById("btn-no").disabled = true;
            break;
        default:{
          }
      }
    }

    $("#upcali1").submit(function(e){
      const postUp ={
        valor:$("#valor").val(),
        usrValue:parseInt(obj.valor),
        usrId:parseInt(obj.userId),
        blogId:parseInt(obj.blogID)
      };
      $.post("../scripts/blog-rate.php", postUp, function(response){
        //setValue(response);
        obj.valor = (parseInt(response));
        setValue(obj.valor);
        console.log("SI "+response);
      });
      e.preventDefault();
    })

    $("#upcali2").submit(function(e){

      const postDown ={
        valor:$("#valor2").val(),
        usrValue:parseInt(obj.valor),
        usrId:parseInt(obj.userId),
        blogId:parseInt(obj.blogID)
      };
      $.post("../scripts/blog-rate.php", postDown, function(response){

        obj.valor = (parseInt(response));
        setValue(obj.valor);
        //setValue(response);
        console.log("NO "+response);
      });
      e.preventDefault();
    });
  });