jQuery(document).ready(function($) {
$('.notice.is-dismissible').on('click', '.notice-dismiss', function () {
    $.ajax({
	        type: 'POST',
	        url: ajaxurl,
	        data: {
	            action: 'home_services_blocks_dismiss_admin_notice',
	        },
    	});
	});
});