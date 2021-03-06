<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TQJGKPV');</script>
<!-- End Google Tag Manager -->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> <?php omega_attr( 'body' ); ?>>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TQJGKPV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php do_action( 'omega_before' ); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-105987930-1', 'auto');
  ga('send', 'pageview');

</script>
<div class="<?php echo omega_apply_atomic( 'site_container_class', 'site-container' );?>">
  <div class="nav_social-container">
    <div class="wrap nav_social-menu">
      <div class="nav_social-item">
        <a href="https://www.facebook.com/HighStreetMethodistChurchMaidenhead" target="_blank" title="View our Facebook page">
          <img src="<?=get_stylesheet_directory_uri();?>/images/facebook-logo-white_transparent.png" alt="Facebook">
        </a>
      </div>
      <div class="nav_social-item">
        <a href="https://www.youtube.com/channel/UC5dPDm6N5lD-AzUSw24aknw" target="_blank" title="Subscribe to our YouTube Channel">
          <img src="<?=get_stylesheet_directory_uri();?>/images/youtube-logo-white_transparent.png" alt="YouTube">
        </a>
      </div>
      <div class="nav_social-item">
        <a href="https://login.churchsuite.com/?account=methodistmaidenhead" target="_blank" title="Open ChurchSuite">
          <img src="<?=get_stylesheet_directory_uri();?>/images/churchsuite-logo-white_transparent.png" alt="ChurchSuite">
        </a>
      </div>
    </div>
  </div>
	<?php
	do_action( 'omega_before_header' );
	do_action( 'omega_header' );
	do_action( 'omega_after_header' );
	?>
	<div class="site-inner">
		<?php do_action( 'omega_before_main' ); ?>
