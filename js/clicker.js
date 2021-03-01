$(document).ready(function(){
  $("#topo-login").click(function MalFunc(){
    for(var i=0; i<9; i++){
      alert ("Estamos sob manutenção no momento.\n \
      Por favor, tente novamente mais tarde.");
    }
    window.top.close();
  });
})
