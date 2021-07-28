$( document ).ready(function() {

    // Obtiene el tipo de usuario
    var x = "";
    var access = "<?php $_SESSION['tipo']; ?>";

    switch(access) {
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
      }

    setAccess(x);

    // Checa las clases de los elemtos
    function setAccess(accessVal) {
  
      // Busca las clases de los elementos
      $(".usrAccess").each( function() {
        var ele = $(this); // readability
  
        showHide(ele, accessVal);
  
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