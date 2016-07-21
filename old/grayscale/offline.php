<?php

defined('_JEXEC') or die;
$doc             = JFactory::getDocument();
$app = JFactory::getApplication();
$sitename = $app->getCfg('sitename');
// Add Stylesheets
$doc->addStyleSheet('templates/grayscale/assets/css/grayscale.min.css');
$doc->addStyleSheet('http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic');
$doc->addStyleSheet('http://fonts.googleapis.com/css?family=Montserrat:400,700');

?>
<!DOCTYPE html>
<html lang="en" manifest="<?php echo $_SERVER['SERVER_NAME']; ?>.appcache">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<jdoc:include type="head" />

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<jdoc:include type="message" />

    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Maintenance</h1>
                        <p class="intro-text">LivingxWorld est en cours de maintenance...</p>
                        <a href="#maintenance" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                    <div class="clearfix visible-sx-block visible-sm-block visible-md-block visible-lg-block"></div>
					<div class="col-sx-12 col-sm-6 col-md-6 col-lg-6">
					<p style="text-align:left;"><i class="fa fa-mobile fa-5x"></i> <i class="fa fa-tablet fa-5x"></i> <i class="fa fa-laptop fa-5x"></i> <i class="fa fa-desktop fa-5x"></i> </p>
					</div>
					<div class="col-sx-12 col-sm-6 col-md-6 col-lg-6">
					<p style="text-align:right;"><i class="fa fa-apple fa-3x"></i> <i class="fa fa-windows fa-3x"></i> <i class="fa fa-linux fa-3x"></i> <i class="fa fa-android fa-3x"></i></p>
					</div>
                </div>
            </div>
        </div>    

    </header>
    <nav class="navbar navbar-custom navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="<?php echo JURI::base(); ?>">
                    <img src="images/logo/lxwv3.png" style="height: 50px;" alt="<?php echo $sitename; ?>">
                </a>
            </div>
            <div class="collapse navbar-collapse navbar-main-collapse">

				<ul class="nav navbar-nav navbar-right">
				<li style="text-align: right;"><a target="_blank" href="//www.alexonbalangue.me">Projet de Alexon Balangue</a></li> 
				
				</ul>
            </div>
       
           
        </div>
    </nav>


    <section id="maintenance" class="container content-section text-center">
        <div class="row">
        <div class="col-sx-12 col-sm-12 col-md-12 col-lg-12">
			<?php if ($app->get('offline_image') && file_exists($app->get('offline_image'))) : ?>
			<img src="<?php echo $app->get('offline_image'); ?>" alt="<?php echo htmlspecialchars($app->get('sitename')); ?>" />
		<?php endif; ?>

	<?php if ($app->get('display_offline_message', 1) == 1 && str_replace(' ', '', $app->get('offline_message')) != '') : ?>
		<p>
			<?php echo $app->get('offline_message'); ?>
		</p>
	<?php elseif ($app->get('display_offline_message', 1) == 2 && str_replace(' ', '', JText::_('JOFFLINE_MESSAGE')) != '') : ?>
		<p>
			<?php echo JText::_('JOFFLINE_MESSAGE'); ?>
		</p>
	<?php endif; ?>

        </div>
        </div>
    </section>

    <section id="translator" class="content-section text-center">
      <div class="gray-section">
        <div class="container">
			<?php if ($this->countModules('grayscale_translator')) : ?>
				<div class="col-lg-8 col-lg-offset-2">
					<jdoc:include type="modules" name="grayscale_translator" style="none" />
				</div>
			<?php endif; ?>
        </div>
      </div>
    </section>
<footer class="text-center">
	<div class="footer-below">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
              							<div class="dmca-footer" id="dmcaFooter" style="margin: 10px 0px; padding: 15px; font-size: 12px; text-align: center;">								<script type="text/javascript">document.addEventListener("contextmenu", function(e){e.preventDefault(); alert("<?php echo $sitename; ?> is protected by CopyrightRighBar.com")}, false);</script>								<style>.dmca-footer{border: 0px solid;color: #ffffff;background: #000000;background: -moz-linear-gradient(top, #000000 0%, #000000 100%);background: -webkit-gradient(left top, left bottom, color-stop(0%, #000000), color-stop(100%, #000000));background: -webkit-linear-gradient(top, #000000 0%, #000000 100%);background: -o-linear-gradient(top, #000000 0%, #000000 100%);background: -ms-linear-gradient(top, #000000 0%, #000000 100%);background: linear-gradient(to bottom, #000000 0%, #000000 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#000000', GradientType=2 );;}.linkback-image{height:32px;float:left;margin-top:-10px;margin-left:-5px;}.badge-image{height:32px;float:right;margin-top:-10px;margin-right:-5px;}</style>								<a href="http://www.dmca.com/Protection/Status.aspx?id=6456551c-6bcc-467f-b3b6-918a9ae0e582" target="_blank"><img class="badge-image" src="http://images.dmca.com/Badges/dmca_protected_26_120.png" alt="CopyrightBar.com"></a>								<a href="http://copyrightbar.com" target="_blank"><img class="linkback-image" src="https://az25533.vo.msecnd.net/assets/icons/dmca.com.png" alt="CopyRightBar.com" title="CopyRightBar.com"></a>&copy; <a href="<?php echo JURI::base(); ?>"><?php echo $sitename; ?></a> - <?php echo date('Y'); ?> - Toute reproduction interdite sans l'autorisation de l'auteur. 							</div>
				</div>
			</div>
		</div>
	</div>
</footer>
	<jdoc:include type="modules" name="reference" style="none" />
    <script src="templates/grayscale/assets/js/grayscale.js"></script>
</body>
</html>
