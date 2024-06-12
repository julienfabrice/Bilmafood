//<![CDATA[
	$(window).on('load', function () {
		tb_quickview.initQuickViewContainer();
	});
	
	var tb_quickview = {
		'initQuickViewContainer': function () {
			if ($('.quickview-container').length === 0) {
				$('body').append('<div class="quickview-container"></div>');
				$('div.quickview-container').load('index.php?route=product/tb_quickview/appendcontainer');
			}
		},
	
		'appendCloseFrameLink': function () {
			var text_close = $('#qv-text-close').val();
			if ($('.a-qv-close').length === 0) {
				$('div#quickview-content').prepend("<a href='javascript:void(0);' class='a-qv-close' onclick='tb_quickview.closeQVFrame()'>" + text_close + "</a>");
			}
		},
	
		'closeQVFrame': function () {
			$('#quickview-bg-block').hide();
			$('.quickview-load-img').hide();
			$('div#quickview-content').hide().html('');
		},
	
		'ajaxView': function (url) {
			if (url.includes('route=product/product')) {
				url = url.replace('route=product/product', 'route=product/tb_quickview');
			} else {
				url = 'index.php?route=product/tb_quickview/seoview&ourl=' + url;
			}
	
			$.ajax({
				url: url,
				type: 'get',
				beforeSend: function () {
					$('#quickview-bg-block').show();
					$('.quickview-load-img').show();
				},
				success: function (json) {
					if (json.success) {
						$('.quickview-load-img').hide();
						$('#quickview-content').html(json.html);
						tb_quickview.appendCloseFrameLink();
						$('#quickview-content').show();
						
						// Initialize datetimepickers only if necessary
						if ($('#datetimepicker').length) {
							$('#datetimepicker').datetimepicker({ pickTime: false });
						}
						if ($('#datetime').length) {
							$('#datetime').datetimepicker({ pickDate: true, pickTime: true });
						}
						if ($('#Time').length) {
							$('#Time').datetimepicker({ pickDate: false });
						}
					}
				}
			});
		}
	};
	//]]>
	
