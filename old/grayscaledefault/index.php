<?php

defined('_JEXEC') or die;

$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$this->language  = $doc->language;
$this->direction = $doc->direction;
$sitename = $app->getCfg('sitename');
$desc_site = $app->getCfg('MetaDesc');
// Getting params from template
$params = $app->getTemplate(true)->params;
$logos = $this->params->get('myphoto');
foreach ($this->_scripts as $script => $value)
{
    if (preg_match('/media\/jui/i', $script))
	{
      unset($this->_scripts[$script]);
	}
}
// Add Stylesheets
$doc->addStyleSheet('templates/grayscale/assets/css/grayscale.min.css');
$doc->addStyleSheet('templates/grayscale/assets/css/template.min.css');
//$doc->addStyleSheet('http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic');
$doc->addStyleSheet('http://fonts.googleapis.com/css?family=Montserrat:400,700');
?>
<!DOCTYPE html>
<html lang="en" manifest="<?php echo $_SERVER['SERVER_NAME']; ?>.appcache">
<head>
	<jdoc:include type="head" />
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body itemscope itemtype="http://schema.org/WebPage" id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <nav class="navbar navbar-custom navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
             <?php if(!empty($logos)){ ?>
			<img src="<?php echo JURI::root(true).'/'.$logos; ?>" itemprop="image" alt="<?php echo $sitename; ?>">
			<meta itemprop="image" content="<?php echo JURI::root(true).'/'.$logos; ?>">
			<?php } ?>
                </a>
            </div>
            <div class="collapse navbar-collapse navbar-main-collapse">
				<?php if ($this->countModules('grayscale_menu')) : ?>
					<jdoc:include type="modules" name="grayscale_menu" style="none" />
				<?php endif; ?>	

            </div>
        
           
        </div>
    </nav>
    <header class="intro">
        <div class="intro-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sx-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2" itemscope itemtype="http://schema.org/CreativeWork">
                        <h1 class="brand-heading" itemprop="name"><?php echo $sitename; ?></h1>
						<meta itemprop="name" content="<?php echo $sitename; ?>">
                        <p class="intro-text" itemprop="description"><?php echo $desc_site; ?></p>
						<meta itemprop="description" content="<?php echo $desc_site; ?>">
                        <a href="#services" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated fa-5x"></i>
                        </a>
                    </div>
					
                </div>
            </div>
        </div>    

    </header>
    <section id="recherche" class="content-section text-center">
        <div class="gray-section">
            <div class="container-fluid">
				<div class="row">
					<jdoc:include type="modules" name="grayscale_search" style="none" />
				</div>
            </div>
        </div>
    </section>
				
    <div class="container text-center">
        <div class="row">
			
				<div class="visible-md-block visible-lg-block hidden-sx hidden-sm col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
					<jdoc:include type="modules" name="banner-header" style="none" />
				</div>
				<div class="visible-sx-block visible-sm-block hidden-md hidden-lg col-sx-12 col-sm-12">
					<jdoc:include type="modules" name="banner-mheader" style="none" />
				</div>
        </div>
    </div>

   <?php 
   /**<section id="services" class="content-section text-center">
        <div class="gray-section">
            <div class="container-fluid">
			 if ($this->countModules('grayscale_service')) : 
					<jdoc:include type="modules" name="grayscale_service" style="none" />
			 endif; 
            </div>
        </div>
    </section>
	***/
	?>
	

    <section id="next" class="container-fluid content-section text-center">
					<jdoc:include type="message" />
					<jdoc:include type="component" />
    </section>


    <section id="translator" class="content-section text-center">
        <div class="gray-section">
            <div class="container-fluid">
			<?php if ($this->countModules('grayscale_translator')) : ?>
					<jdoc:include type="modules" name="grayscale_translator" style="none" />
			<?php endif; ?>
            </div>
        </div>
    </section>
    <div class="container text-center">
        <div class="row">
				<div class="visible-md-block visible-lg-block hidden-sx hidden-sm col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
					<jdoc:include type="modules" name="banner-footer" style="none" />
				</div>
				<div class="visible-sx-block visible-sm-block hidden-md hidden-lg col-sx-12 col-sm-12">
					<jdoc:include type="modules" name="banner-mfooter" style="none" />
				</div>
        </div>
    </div>
<footer class="text-center">
	<div class="footer-above">
		<div class="container">
			<div class="row text-center">
				<div class="col-sx-12 col-sm-12 col-md-12 col-lg-12"><p style="text-align:center;">
					<i class="fa fa-mobile fa-5x"></i> <i class="fa fa-tablet fa-5x"></i> <i class="fa fa-laptop fa-5x"></i> <i class="fa fa-desktop fa-5x"></i> <br />
					Nous sommes 100% amis avec les moteur de recherches et multiplateformes avec n'importe quelles choix de votre navigateur internet.</p>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<?php if ($this->countModules('grayscale_footer-1')) : ?>
						<jdoc:include type="modules" name="grayscale_footer-1" style="none" />
				<?php endif; ?>
				<?php if ($this->countModules('grayscale_footer-2')) : ?>
						<jdoc:include type="modules" name="grayscale_footer-2" style="none" />
				<?php endif; ?>
				<?php if ($this->countModules('grayscale_footer-3')) : ?>
						<jdoc:include type="modules" name="grayscale_footer-3" style="none" />
				<?php endif; ?>
				<?php if ($this->countModules('grayscale_footer-4')) : ?>
						<jdoc:include type="modules" name="grayscale_footer-4" style="none" />
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="footer-below">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sx-12 col-sm-12 col-md-12 col-lg-12">
					<span itemprop="copyrightHolder">&copy; <a href="<?php echo JURI::base(); ?>"><?php echo $sitename; ?></a></span> - <span itemprop="copyrightYear"><?php echo date('Y'); ?></span> - Toute reproduction interdite sans l'autorisation de l'auteur. 	
				</div>
			</div>
		</div>
	</div>
</footer>
	<?php if ($this->countModules('reference')) : ?>
		<jdoc:include type="modules" name="reference" style="none" />
	<?php endif; ?>
	
    <script src="templates/grayscale/assets/js/grayscale-full-custom.min.js"></script>
	<jdoc:include type="modules" name="debug" style="none" />
</body>
</html>
