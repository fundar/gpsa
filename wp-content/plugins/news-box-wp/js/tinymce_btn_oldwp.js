(function(){
	var nb_H = 180;
	var nb_W = 420;
	
	// create the plugin
	tinymce.create('tinymce.plugins.NewsBox', {
		createControl : function(id, controlManager) {

			if (id == 'nb_btn') {
				// creates the button
				var nb_sc_button = controlManager.createButton('nb_btn', {
					title : 'News Box Shortcode', // title of the button
					image : '../wp-content/plugins/news-box-wp/img/nb_tinymce_btn.png',  // path to the button's image
					onclick : function() {
						tb_show('News Box Shortcode', '#TB_inline?width=' + nb_W + '&height=' + nb_H + '&inlineId=nb-shortcode-form');
						
						nb_scw_setup();
						nb_live_chosen();
					}
				});
				return nb_sc_button;
			}
			return null;
		}
	});
	tinymce.PluginManager.add('NewsBox', tinymce.plugins.NewsBox);
	
	
	// manage the lightbox position
	function nb_scw_setup() {
		if( jQuery('#TB_window').is(':visible') ) {
			jQuery('#TB_window').css("height", nb_H);
			jQuery('#TB_window').css("width", nb_W);	
			jQuery('#TB_window, #TB_ajaxContent').css('overflow', 'visible');
			
			jQuery('#TB_window').css("top", ((jQuery(window).height() - nb_H) / 4) + 'px');
			jQuery('#TB_window').css("left", ((jQuery(window).width() - nb_W) / 4) + 'px');
			jQuery('#TB_window').css("margin-top", ((jQuery(window).height() - nb_H) / 4) + 'px');
			jQuery('#TB_window').css("margin-left", ((jQuery(window).width() - nb_W) / 4) + 'px');
			
			
		} else {
			setTimeout(function() {
				nb_scw_setup();
			}, 10);
		}
	}


	////////////////////////////////////////////////////////
	///// insert shortcode
	jQuery('body').delegate('#nb-shortcode-submit', 'click', function(){	
		var shortcode = '[newsbox id="'+ jQuery('#nb_box_id').val() +'"]';
		tinyMCE.activeEditor.execCommand('mceInsertContent', 0, shortcode);
		tb_remove();
	});
	
	
	///////
	
	// init chosen for live elements
	function nb_live_chosen() {
		jQuery('.lcweb-chosen').each(function() {
			var w = jQuery(this).css('width');
			jQuery(this).chosen({width: w}); 
		});
		jQuery(".lcweb-chosen-deselect").chosen({allow_single_deselect:true});
	}
	
})();
