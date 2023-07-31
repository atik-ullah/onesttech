$(document).ready(function() {
    $('#groupStore').submit(function(e){
        e.preventdefault();
        console.log('Hi');
    });

    $('#test').click(function(){
        alert('Hi');
    });
  });