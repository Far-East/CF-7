(function ($) {
  "use strict";

 //Ваше сообщение отправлено в лайтбоксе Bootstrap 4 и CF_7.
  document.addEventListener('wpcf7mailsent', function (event) {
    $('#call-to-action').modal('hide');
    $("#CF7success").modal('show');
  }, false);
  
 // Ваше сообщение отправлено в лайтбоксе Remodal и CF_7.
  document.addEventListener('wpcf7mailsent', function (event) { 
    var instagent = $('.form-modal').remodal();
    var instconfirm = $('.modal-confirm').remodal();
    instagent.close();
    instconfirm.open();
  }, false);  

})(jQuery);



<!--Успешная отправка сообщения REMODAL===========================================-->
<div class="remodal loop-remodal modal-confirm" data-remodal-id="loop-remodal" role="dialog">
	<button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
	<h3 class="modal-title" style="text-align: center;">Сообщение успешно отправлено!!!</h3>
	<img width="90px" class="d-block mx-auto mb-4 mt-4" src="<?php echo get_template_directory_uri(); ?>/img/check
	.png" alt="Сообщение успешно отправлено">
	<p class="text-center mb-0">Менеджер свяжется с вами в ближайшее время.</p>
</div>
