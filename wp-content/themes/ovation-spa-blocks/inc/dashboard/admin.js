jQuery(document).ready(function($) {
$('.notice.is-dismissible').on('click', '.notice-dismiss', function () {
    $.ajax({
	        type: 'POST',
	        url: ajaxurl,
	        data: {
	            action: 'ovation_spa_blocks_dismiss_admin_notice',
	        },
    	});
	});
});