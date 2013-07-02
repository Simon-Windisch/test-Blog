<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<title><?php wp_title(''); ?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	
	<!-- css -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link href="/wp-content/uploads/favicon.ico" rel="shortcut icon" />
	
	<!-- latest jquery library -->
        <script src="http://code.jquery.com/jquery-1.6.min.js" type="text/javascript"></script>	
	<script src="<?php bloginfo('template_url'); ?>/js/script.js" type="text/javascript"></script>	

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26428912-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script type="text/javascript" src="http://blog.maxdome.de/wp-content/uploads/ga_social_tracking.js"></script>

</head>
<body> 

<!-- Render-Anweisung Google Plus -->
<script type="text/javascript">
  window.___gcfg = {lang: 'de'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();

</script>
<!-- Update your html tag to include the itemscope and itemtype attributes -->
<html itemscope itemtype="http://schema.org/Article">

<!-- Add the following three tags to your body 
<span itemprop="name">Title of your content</span>
<span itemprop="description">This would be a description of the content your users are sharing</span>
-->


<!-- facebook -->
<div id="fb-root"></div>
<script src="http://connect.facebook.net/de_DE/all.js#xfbml=1"></script>
<script type="text/javascript">_ga.trackFacebook();</script>




<!-- start Header -->
<div id="header">
    <div id="header-inner">
        <div id="header-nav--meta">
            <ul>
                <li>
                    <a href="http://www.maxdome.de/" class="arrow-right">maxdome</a>
                </li>
            </ul>
        </div>
        <div id="logo">
            <a href="<?php echo home_url( '/' ); ?>" title="logo" rel="home"><span>maxdome Blog</span></a>
        </div>
        <div id="web-presence-part">Blog</div>

        <!-- start search form -->
        <?php include(TEMPLATEPATH . '/searchform.php'); ?>
        <!-- end search form -->
    </div>
</div>
<!-- end Header -->

<!-- start wrapper -->
<div id="wrapper">
   
   <!-- start mainNav
   <div id="mainNav">
		<ul>
			<li class="home"><a href="http://www.maxdome.de">Home</a></li>
			<li class="<?php if ( is_page('spielfilm')) { echo 'selected '; } ?>btn_spielfilm"><a href="http://www.maxdome.de/spielfilm">Spielfilm</a></li>
			<li class="<?php if ( is_page('serie')) { echo 'selected '; } ?>btn_serie"><a href="http://www.maxdome.de/serie">Serie</a></li>
			<li class="<?php if ( is_page('showcomedy')) { echo 'selected '; } ?>btn_showcomedy"><a href="http://www.maxdome.de/showcomedy">Show &amp; Comedy</a></li>
			<li class="<?php if ( is_page('wissendoku')) { echo 'selected '; } ?>btn_wissen"><a href="http://www.maxdome.de/wissendoku">Wissen &amp; Doku</a></li>
			<li class="<?php if ( is_page('kids')) { echo 'selected '; } ?>btn_kids"><a href="http://www.maxdome.de/kids">Kids</a></li>
			<li class="<?php if ( is_page('musik')) { echo 'selected '; } ?>btn_musik"><a href="http://www.maxdome.de/musik">Musik</a></li>
			<li class="<?php if ( is_page('tvcenter')) { echo 'selected '; } ?>btn_tvcenter"><a href="http://www.maxdome.de/tvcenter">Tv Center</a></li>
			<li class="<?php if ( is_page('nightclub')) { echo 'selected '; } ?>btn_nightclub"><a href="http://www.nightclub.de">Nightclub</a></li>
			<li class="<?php if ( is_page('service')) { echo 'selected '; } ?>btn_service"><a href="http://www.maxdome.de/service">Service</a></li>
		</ul> 
	</div>
	end mainNav -->

	<!--start breadcrumbs-->	
	<div id="breadcrumbs">
		<?php
		if(function_exists('bcn_display'))
		{
		    bcn_display();
		}
		?>
	</div>	
	<!--end breadcrumbs-->
		
	<div class="clear"></div>

