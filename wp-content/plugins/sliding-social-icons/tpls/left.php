<!-- slider div for left-->

<div id="ssi-absolute">
	<ul class="contact-side">
		<?php if("" != $facebook_url) {?>
			<li class="ssi-facebook"><a target="_blank" href="<?php echo $facebook_url ?>"><span>Facebook</span> <img src="<?php echo plugins_url('sliding-social-icons/images/facebook.png') ?>" /></a></li><?php }?>
		<?php if("" != $twitter_url) {?>
			<li class="ssi-twitter"><a target="_blank" href="<?php echo $twitter_url ?>"><span>Twitter</span> <img src="<?php echo plugins_url('sliding-social-icons/images/twitter.png') ?>" /></a></li><?php }?>
		<?php if("" != $gplus_url) {?>
			<li class="ssi-gplus"><a target="_blank" href="<?php echo $gplus_url ?>"><span>Google Plus</span> <img src="<?php echo plugins_url('sliding-social-icons/images/gplus.png') ?>" /></a></li><?php }?>
		<?php if("" != $instagram_url) {?>
			<li class="ssi-instagram"><a target="_blank" href="<?php echo $instagram_url ?>"><span>Instagram</span> <img src="<?php echo plugins_url('sliding-social-icons/images/instagram.png') ?>" /></a></li> <?php }?>
		<?php if("" != $linkedin_url) {?>
			<li class="ssi-linkedin"><a target="_blank" href="<?php echo $linkedin_url ?>"><span>LinkedIn</span> <img src="<?php echo plugins_url('sliding-social-icons/images/linkedin.png') ?>" /></a></li> <?php }?>
		<?php if("" != $pinterest_url) {?>
			<li class="ssi-pinterest"><a target="_blank" href="<?php echo $pinterest_url ?>"><span>Pinterest</span> <img src="<?php echo plugins_url('sliding-social-icons/images/pinterest.png') ?>" /></i></a></li><?php }?>
		<?php if("" != $youtube_url) {?>
			<li class="ssi-youtube"><a target="_blank" href="<?php echo $youtube_url ?>"><span>YouTube</span> <img src="<?php echo plugins_url('sliding-social-icons/images/youtube.png') ?>" /></a></li><?php }?>
		<?php if("" != $contact_shortcode) {?>
			<li class="ssi-envelope"><a id="ssi-contact"><span>Contact Us</span> <img src="<?php echo plugins_url('sliding-social-icons/images/envelope.png') ?>" /></a></li><?php } else if("" != $email_url){?>
			<li class="ssi-envelope"><a href="<?php echo $email_url ?>"><span>Email</span> <img src="<?php echo plugins_url('sliding-social-icons/images/envelope.png') ?>" /></a></li><?php }?>
		<?php if("" != $phone_url) {?>
			<li class="ssi-phone"><a href="callto:<?php echo $phone_url ?>"><span>Call</span> <img src="<?php echo plugins_url('sliding-social-icons/images/phone.png') ?>" /></a></li><?php }?>
	
	</ul>
</div>
<div id="ssi-dim"></div>
<div id="ssi-contact-form">
	<h1 class="ssi-top-bar">Contact Us <span id="ssi-close-x"><img src="<?php echo plugins_url('sliding-social-icons/images/close-x.png') ?>" /></span></h1>
	<div class="ssi-contact-content">
		<?php echo do_shortcode($contact_shortcode); ?>
	</div>
</div>
<script language="JavaScript">

	jQuery('.contact-side li').hover(function(){
			jQuery(this).stop().animate({
					'left': '0px'
				},500)
		},function(){
			jQuery(this).stop().animate({
					'left': '-140px'
				},400)
		});
		
</script>
    