$( document ).ready(function() {

    // Obtiene el tipo de usuario

    var test2 = '<?php echo $var; ?>;'; 
    var x;
    var access=test;
    //console.log(access);

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
            x = "xd"
          }
      }
  
      // Busca las clases de los elementos
      $(".usrAccess").each( function() {
        var ele = $(this); // readability
        showHide(ele, x);
        //console.log(x);
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
  
  
  });