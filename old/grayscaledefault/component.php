<?php

defined('_JEXEC') or die;

$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$this->language  = $doc->language;
$this->direction = $doc->direction;

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
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	<jdoc:include type="message" />
	<jdoc:include type="component" />
</body>
</html>
