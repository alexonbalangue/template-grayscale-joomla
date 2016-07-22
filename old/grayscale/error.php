<?php defined('_JEXEC') or die;$apps             = JFactory::getApplication();$docs             = JFactory::getDocument();$this->language  = $docs->language;$this->direction = $docs->direction;// Getting params from template$params = $apps->getTemplate(true)->params;$sitename = $apps->getCfg('sitename');?><!DOCTYPE html><!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<html lang="en" manifest="<?php echo $_SERVER['SERVER_NAME']; ?>.appcache"><head>	<title><?php echo $this->title; ?> <?php echo htmlspecialchars($this->error->getMessage(), ENT_QUOTES, 'UTF-8'); ?></title>    <meta charset="utf-8"><link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">    <meta http-equiv="X-UA-Compatible" content="IE=edge"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">    <meta name="viewport" content="width=device-width, initial-scale=1">    <link href="templates/grayscale/assets/css/grayscale.css" rel="stylesheet">    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">    <!--[if lt IE 9]>        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>    <![endif]--></head><body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">    <header class="intro">        <div class="intro-body">            <div class="container">                <div class="row">                    <div class="col-md-8 col-md-offset-2">                        <h1 class="brand-heading"><?php echo JText::_('JERROR_LAYOUT_PAGE_NOT_FOUND'); ?></h1>                        <p class="intro-text">LivingxWorld &agrave; une pages non existant, d'&eacute;soler...</p>                        <a href="#pages-error" class="btn btn-circle page-scroll">                            <i class="fa fa-angle-double-down animated fa-5x"></i>                        </a>                    </div>                    <div class="clearfix visible-sx-block visible-sm-block visible-md-block visible-lg-block"></div>					<div class="col-sx-12 col-sm-6 col-md-6 col-lg-6">					<p style="text-align:left;"><i class="fa fa-mobile fa-5x"></i> <i class="fa fa-tablet fa-5x"></i> <i class="fa fa-laptop fa-5x"></i> <i class="fa fa-desktop fa-5x"></i> </p>					</div>					<div class="col-sx-12 col-sm-6 col-md-6 col-lg-6">					<p style="text-align:right;"><i class="fa fa-apple fa-3x"></i> <i class="fa fa-windows fa-3x"></i> <i class="fa fa-linux fa-3x"></i> <i class="fa fa-android fa-3x"></i></p>					</div>                </div>            </div>        </div>        </header>    <nav class="navbar navbar-custom navbar-default navbar-fixed-top" role="navigation">        <div class="container">            <div class="navbar-header">                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">                    <span class="sr-only">Toggle navigation</span>                    <span class="icon-bar"></span>                    <span class="icon-bar"></span>                    <span class="icon-bar"></span>                </button>                <a class="navbar-brand page-scroll" href="<?php echo JURI::base(); ?>">                    <img src="images/logo/lxwv3.png" style="height: 50px;" alt="<?php echo $sitename; ?>">                </a>            </div>            <div class="collapse navbar-collapse navbar-main-collapse">				<ul class="nav navbar-nav navbar-right">				<li style="text-align: right;"><a target="_blank" href="//www.alexonbalangue.me">Projet de Alexon Balangue</a></li> 								</ul>            </div>                          </div>    </nav>    <section id="pages-error" class="container content-section text-center">							<div class="well">						<div class="row">							<div class="col-sx-12 col-sm-6 col-md-6 col-lg-6">								<p><strong><?php echo JText::_('JERROR_LAYOUT_ERROR_HAS_OCCURRED_WHILE_PROCESSING_YOUR_REQUEST'); ?></strong></p>								<p><?php echo JText::_('JERROR_LAYOUT_NOT_ABLE_TO_VISIT'); ?></p>								<ul>									<li><?php echo JText::_('JERROR_LAYOUT_AN_OUT_OF_DATE_BOOKMARK_FAVOURITE'); ?></li>									<li><?php echo JText::_('JERROR_LAYOUT_MIS_TYPED_ADDRESS'); ?></li>									<li><?php echo JText::_('JERROR_LAYOUT_SEARCH_ENGINE_OUT_OF_DATE_LISTING'); ?></li>									<li><?php echo JText::_('JERROR_LAYOUT_YOU_HAVE_NO_ACCESS_TO_THIS_PAGE'); ?></li>								</ul>							</div>							<div class="clearfix visible-sx-block">							<div class="col-sx-12 col-sm-6 col-md-6 col-lg-6">								<i class="fa fa-ban fa-5x"></i>								<hr />								<p><?php echo JText::_('JERROR_LAYOUT_GO_TO_THE_HOME_PAGE'); ?></p>								<p><a href="<?php echo $this->baseurl; ?>/index.php" class="btn"><i class="icon-home"></i> <?php echo JText::_('JERROR_LAYOUT_HOME_PAGE'); ?></a></p>							</div>						</div>						<hr />						<p><?php echo JText::_('JERROR_LAYOUT_PLEASE_CONTACT_THE_SYSTEM_ADMINISTRATOR'); ?></p>						<blockquote>							<span class="label label-inverse"><?php echo $this->error->getCode(); ?></span> <?php echo htmlspecialchars($this->error->getMessage(), ENT_QUOTES, 'UTF-8');?>						</blockquote>					</div>      </div>       </section>       <section id="translator" class="content-section text-center">      <div class="gray-section">        <div class="container">				<div class="col-lg-8 col-lg-offset-2"><h2>Traduire</h2><p>Traduisez le site internet en bilanguistique ci-dessous</p><div id="google_translate_element"></div><script type="text/javascript">function googleTranslateElementInit() {new google.translate.TranslateElement({pageLanguage: 'fr', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL, multilanguagePage: true, gaTrack: true, gaId: 'UA-51904605-1'}, 'google_translate_element');}</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script><h6 style="text-align: right;">Elles proposent la traduction en multi-langage. </h6>                 				</div>        </div>      </div>    </section><footer class="text-center">	<div class="footer-below">		<div class="container">			<div class="row">				<div class="col-lg-12">												<div class="dmca-footer" id="dmcaFooter" style="margin: 10px 0px; padding: 15px; font-size: 12px; text-align: center;">								<script type="text/javascript">document.addEventListener("contextmenu", function(e){e.preventDefault(); alert("<?php echo $sitename; ?> is protected by CopyrightRighBar.com")}, false);</script>								<style>.dmca-footer{border: 0px solid;color: #ffffff;background: #000000;background: -moz-linear-gradient(top, #000000 0%, #000000 100%);background: -webkit-gradient(left top, left bottom, color-stop(0%, #000000), color-stop(100%, #000000));background: -webkit-linear-gradient(top, #000000 0%, #000000 100%);background: -o-linear-gradient(top, #000000 0%, #000000 100%);background: -ms-linear-gradient(top, #000000 0%, #000000 100%);background: linear-gradient(to bottom, #000000 0%, #000000 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#000000', GradientType=2 );;}.linkback-image{height:32px;float:left;margin-top:-10px;margin-left:-5px;}.badge-image{height:32px;float:right;margin-top:-10px;margin-right:-5px;}</style>								<a href="http://www.dmca.com/Protection/Status.aspx?id=6456551c-6bcc-467f-b3b6-918a9ae0e582" target="_blank"><img class="badge-image" src="http://images.dmca.com/Badges/dmca_protected_26_120.png" alt="CopyrightBar.com"></a>								<a href="http://copyrightbar.com" target="_blank"><img class="linkback-image" src="https://az25533.vo.msecnd.net/assets/icons/dmca.com.png" alt="CopyRightBar.com" title="CopyRightBar.com"></a>&copy; <a href="<?php echo JURI::base(); ?>"><?php echo $sitename; ?></a> - <?php echo date('Y'); ?> - Toute reproduction interdite sans l'autorisation de l'auteur. 							</div>				</div>			</div>		</div>	</div></footer>	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>    <script src="templates/grayscale/assets/js/grayscale.js"></script></body></html>