$( document ).ready(function(test, cal) {

    // Obtiene el tipo de usuario
    var obj = JSON.parse(java);
    var access = parseInt(obj.tipo);
    var calif = obj.valor; 
    console.log(calif);
    var x;

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
  
  
  });