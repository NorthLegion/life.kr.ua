<div class="post-sharrre group">
	<div id="twitter" data-url="<?php echo the_permalink(); ?>" data-text="<?php echo the_title(); ?>" data-title="Tweet"></div>
	<div id="facebook" data-url="<?php echo the_permalink(); ?>" data-text="<?php echo the_title(); ?>" data-title="Like"></div>
	<div id="vk" data-url="<?php echo the_permalink(); ?>" data-text="<?php echo the_title(); ?>" data-title="Like"></div>
	<div id="pinterest" data-url="<?php echo the_permalink(); ?>" data-text="<?php echo the_title(); ?>" data-title="Pin It"></div>
</div><!--/.post-sharrre-->

<script type="text/javascript">
	// Sharrre
	jQuery(document).ready(function(){
		jQuery('#twitter').sharrre({
			share: {
				twitter: true
			},
			template: '<a class="box group" href="#"><div class="count" href="#">{total}</div><div class="share"><i class="fa fa-twitter"></i></div></a>',
			enableHover: false,
			enableTracking: true,
			buttons: { twitter: {via: '<?php echo ot_get_option('twitter-username'); ?>'}},
			click: function(api, options){
				api.simulateClick();
				api.openPopup('twitter');
			}
		});
		jQuery('#faceboo').sharrre({
			share: {
				facebook: true
			},
			template: '<a class="box group" href="#"><div class="count" href="#">{total}</div><div class="share"><i class="fa fa-facebook-square"></i></div></a>',
			enableHover: false,
			enableTracking: true,
			click: function(api, options){
				api.simulateClick();
				api.openPopup('facebook');
			}
		});
		jQuery('#vk').sharrre({
			share: {
				vk: true
			},
			template: '<a class="box group" href="#"><div class="count" href="#">{total}</div><div class="share"><i class="fa fa-vk"></i></div></a>',
			enableHover: false,
			enableTracking: true,
			urlCurl: '<?php echo get_template_directory_uri() .'/js/sharrre.php'; ?>',
			click: function(api, options){
				api.simulateClick();
				api.openPopup('vk');
			}
		});
		jQuery('#pinteres').sharrre({
			share: {
				pinterest: true
			},
			template: '<a class="box group" href="#" rel="nofollow"><div class="count" href="#">{total}</div><div class="share"><i class="fa fa-pinterest"></i></div></a>',
			enableHover: false,
			enableTracking: true,
			buttons: {
			pinterest: {
				description: '<?php echo the_title(); ?>'<?php if( has_post_thumbnail() ){ ?>,media: '<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>'<?php } ?>
				}
			},
			click: function(api, options){
				api.simulateClick();
				api.openPopup('pinterest');
			}
		});
	});
</script>

