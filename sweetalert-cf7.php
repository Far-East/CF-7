/**
 * Вспл. окно при отправке сообщения Sweet Alert Contact Form 7.
 * Документация Sweet Alert https://sweetalert2.github.io
 */
function sweetalert_javascript_footer() {
	wp_enqueue_script( 'sweetalert-js', '//cdn.jsdelivr.net/npm/sweetalert2@9' );
}
add_action( 'wp_enqueue_scripts', 'sweetalert_javascript_footer', 991 );

function sweetalert_settings_javascript_footer() {
	?>
	<script>
		// Ваше сообщение отправлено Sweet Alert CF_7.
		document.addEventListener('wpcf7mailsent', function (response) {
			Swal.fire({
				title: 'Отправлено!',
				text: response.detail.apiResponse.message,
				icon: 'success',
				confirmButtonText: 'OK',
				customClass: {
					confirmButton: 'confirm-button-class',
				}
			})
		}, false);

		// Ошибка заполнения полей Sweet Alert CF_7.
		document.addEventListener('wpcf7invalid', function (response) {
			Swal.fire({
				title: 'Ошибка!',
				text: response.detail.apiResponse.message,
				icon: 'error',
				confirmButtonText: 'OK',
				customClass: {
					confirmButton: 'confirm-button-class',
				}
			})
		}, false);

		// Ошибка отправки Sweet Alert CF_7.
		document.addEventListener('wpcf7mailfailed', function (response) {
			Swal.fire({
				title: 'Ошибка!',
				text: response.detail.apiResponse.message,
				icon: 'warning',
				confirmButtonText: 'OK',
				customClass: {
					confirmButton: 'confirm-button-class',
				}
			})
		}, false);
	</script>
	<?php
}
add_action('wp_footer', 'sweetalert_settings_javascript_footer', 992);
