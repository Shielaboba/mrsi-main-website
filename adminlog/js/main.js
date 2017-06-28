
  $('#register_process_btb').on('click', function () {
    var $btn = $(this).button('loading')
        
    setTimeout(function(){
    
    $btn.button('reset');

    },500);
  });
