<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.core');

$doTask   = $displayData['doTask'];
$class    = $displayData['class'];
$text     = $displayData['text'];
$btnClass = $displayData['btnClass'];

?>
<button onclick="<?php echo $doTask; ?>" class="<?php echo $btnClass; ?>">
	<i class="<?php echo trim($class); ?>"></i>
	<?php echo $text; ?>
</button>
