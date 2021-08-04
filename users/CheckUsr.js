$( document ).ready(function(test, cal) {

    // Obtiene el tipo de usuario
    var obj = JSON.parse(java);
    var access = parseInt(obj.tipo);
    var calif = parseInt(obj.valor); 
    console.log(calif);
    var x;
    setValue(calif);
    setAccess(access);
    
    
    // Checa las clases de los elemtos
    function setAccess(accessVal) {
      switch(accessVal) {
        case 1:
            x = ".UsrAdmin"
            break;
        case 2:
            x = ".UsrDir"
            break;
        case 3: 
            x = ".UsrPriv"
            break;
        case 4:
            x = ".UsrEmp"
            break;
          default:{
            x = ".Public"
          }
      }
  
      // Busca las clases de los elementos
      $(".usrAccess").each( function() {
        var ele = $(this); // readability
        showHide(ele, x);
        console.log(x);
      })
    }
    
    // Muestra u oculta elementos
    function showHide(ele, cls){
    
      if ( ele.is(cls) ){
        ele.show();    
      }
      else {
       ele.hide();
      }
       
    }

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
            x = ".Public"
          }
      }
    }
  
  
  });