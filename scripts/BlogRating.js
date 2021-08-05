$( document ).ready(function() {
    var obj = JSON.parse(rating);
    var calif = parseInt(obj.valor); 
    console.log(calif);

    setValue(calif);
    
    function setValue(valor){
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

    function(){
      
    }
  });