<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?= lang('title') ?></title>
<meta name="description" content="<?= lang('description') ?>" />
<meta name="viewport" content="width=device-width">
<meta name="keywords" content="" />
<meta name="author" content="" />

<!-- Social Networks Meta -->
<meta itemprop="name" content="<?= lang('title') ?>">
<meta itemprop="description" content="<?= lang('description') ?>">
<meta itemprop="image" content="<?php echo base_url(IMAGES."dpm_share.jpg");?>">

<meta property="og:title" content="<?= lang('title') ?>">
<meta property="og:description" content="<?= lang('description') ?>">
<meta property="og:url" content="http://dontpayme.com">
<meta property="og:image" content="<?php echo base_url(IMAGES."dpm_share.jpg");?>">

<link rel="stylesheet" href="<?php echo base_url(CSS."style.css");?>">
<link rel="stylesheet" href="<?php echo base_url(CSS."global.css?v=1.0.2");?>">

<!-- extra CSS-->
<?php foreach($css as $c):?>
<link rel="stylesheet" href="<?php echo base_url().CSS.$c?>">
<?php endforeach;?>

<!-- extra fonts-->
<?php foreach($fonts as $f):?>
<link href="http://fonts.googleapis.com/css?family=<?php echo $f?>"
	rel="stylesheet" type="text/css">
<?php endforeach;?>
<script src="<?php echo base_url(JS."libs/modernizr-2.6.1-respond-1.1.0.min.js");?>"></script>

<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="<?php echo base_url(IMAGES.'ico/favicon.ico');?>">
<link rel="apple-touch-icon" href="<?php echo base_url(IMAGES.'ico/apple-touch-icon-precompresse.png');?>">
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(IMAGES.'ico/apple-touch-icon-57x57-precompressed.png');?>">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(IMAGES.'ico/apple-touch-icon-72x72-precompressed.png');?>">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(IMAGES.'ico/apple-touch-icon-114x114-precompressed.png');?>">


<!-- GOOGLE ANALYTICS -->
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(
    ['_setAccount', 'UA-48805035-1'],
    ['_setDomainName', 'dontpayme.com'], // Subdomain tracking
    ['_setAllowLinker', true], // Cross domain tracking
    ['_setCampaignCookieTimeout', 2592000000], // 30 day campaign cookie
    ['_trackPageview']
    );
    
    (function() { 
    var ga = document.createElement('script'); 
    ga.type = 'text/javascript'; 
    ga.async = true; 
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js'; 
    var s = document.getElementsByTagName('script')[0]; 
    s.parentNode.insertBefore(ga, s); 
    })();
  </script>

</head>
<body id="<?= lang('lang_code') ?>">
    <div id="fb-root"></div>
	<?php echo $body ?>
	<script
		src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo base_url(JS."libs/jquery-1.9.1.min.js");?>"><\/script>')</script>
	<script src="<?php echo base_url(JS."libs/underscore-min-1.4.4.js");?>"></script>
        <script src="<?php echo base_url(JS."libs/jquery.backgroundvideo.min.js");?>"></script>
        <script src="<?php echo base_url(JS."libs/jquery.flexslider-min.js");?>"></script>
        <script src="<?php echo base_url(JS."libs/jquery.countdown.js");?>"></script>       
        <script src="<?php echo base_url(JS."libs/jquery.countdown-". lang('lang_code').".js");?>"></script>
        <script src="<?php echo base_url(JS."libs/snap.js");?>"></script>
	<script src="<?php echo base_url(JS."plugins.js");?>"></script>
	<script src="<?php echo base_url(JS."script.js?w=1");?>"></script>
                
        
        <script type="text/javascript">

        </script>        

	<!-- extra js-->
	<?php foreach($javascript as $js):?>
	<script defer src="<?php echo base_url().JS.$js?>"></script>
	<?php endforeach;?>
      
    <script src="//connect.facebook.net/en_US/all.js"></script>
    <script type="text/javascript">
        (function($, window, undefined){                        
            $(window).load(function(){                
                FB.init( { appId : 1456441601252216, status : true, cookie : true, xfbml : true });
            });
        })(jQuery, window);
    </script> 
    
</body>
</html>
